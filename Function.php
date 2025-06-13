<?php
// ============================================
// KONFIGURASI DATABASE
// ============================================
$host     = "localhost";
$user     = "root";
$password = "270498Dika.";
$database = "pw2025_tubes_243040034";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

// ============================================
// HANDLE FORM REGISTER
// ============================================
if (isset($_POST['username'], $_POST['email'], $_POST['password'], $_POST['confirm'])) {
  $username = $_POST['username'];
  $email    = $_POST['email'];
  $password = $_POST['password'];
  $confirm  = $_POST['confirm'];

  if ($password !== $confirm) {
    echo "❌ Password dan konfirmasi tidak cocok.";
  } else {
    $stmt = $conn->prepare("INSERT INTO register (username, email, password, confirm) VALUES (?, ?, ?, ?)");
    if ($stmt) {
      $stmt->bind_param("ssss", $username, $email, $password, $confirm);
      echo $stmt->execute() ? "✅ Sign up berhasil." : "❌ Gagal register: " . $stmt->error;
      $stmt->close();
    } else {
      echo "❌ Prepare gagal (register): " . $conn->error;
    }
  }
}

// ============================================
// HANDLE FORM CONTACT
// ============================================
if (isset($_POST['submit_contact'])) {
  $firstname = trim($_POST['firstname']);
  $lastname  = trim($_POST['lastname']);
  $phone     = trim($_POST['phone']);
  $email     = trim($_POST['email']);
  $help      = trim($_POST['help']);

  $stmt = $conn->prepare("INSERT INTO contact (firstname, lastname, phone, email, help) VALUES (?, ?, ?, ?, ?)");
  if ($stmt) {
    $stmt->bind_param("ssiss", $firstname, $lastname, $phone, $email, $help);
    echo $stmt->execute() ? "✅ Pesan Contact berhasil dikirim." : "❌ Gagal kirim pesan Contact: " . $stmt->error;
    $stmt->close();
  } else {
    echo "❌ Prepare gagal (contact): " . $conn->error;
  }
}

// ============================================
// HANDLE FORM HELP
// ============================================
if (isset($_POST['submit_help'])) {

  $firstname = trim($_POST['firstname']);
  $lastname  = trim($_POST['lastname']);
  $phone     = trim($_POST['phone']);
  $email     = trim($_POST['email']);
  $help      = trim($_POST['help']);

  // Validasi dasar
  if (empty($firstname) || empty($lastname) || empty($phone) || empty($email) || empty($help)) {
    header("Location: help.php?status=fail");
    exit;
  }

  // Siapkan dan eksekusi query
  $stmt = $conn->prepare("INSERT INTO help (firstname, lastname, phone, email, help) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("sssss", $firstname, $lastname, $phone, $email, $help_message);

  if (!$stmt) {
    header("Location: help.php?status=fail");
    exit;
  }

  $stmt->bind_param("sssss", $firstname, $lastname, $phone, $email, $help);

  if ($stmt->execute()) {
    header("Location: help.php?status=success");
    exit;
  } else {
    header("Location: help.php?status=fail");
    exit;
  }
}

// ============================================
// HANDLE FORM REVIEW
// ============================================
if (isset($_POST['title'], $_POST['category'], $_POST['director'], $_POST['year'], $_POST['rating'], $_POST['message'])) {
  $title    = $_POST['title'];
  $category = $_POST['category'];
  $director = $_POST['director'];
  $year     = $_POST['year'];
  $rating   = $_POST['rating'];
  $message  = $_POST['message'];

  $stmt = $conn->prepare("INSERT INTO review (title, category, director, year, rating, message) VALUES (?, ?, ?, ?, ?, ?)");
  if ($stmt) {
    $stmt->bind_param("ssssis", $title, $category, $director, $year, $rating, $message);
    header("Location: review.php?status=" . ($stmt->execute() ? "success" : "error"));
    exit;
  } else {
    echo "❌ Prepare gagal (review): " . $conn->error;
  }
}

// ============================================
// HANDLE ADD USERS (ADMIN PANEL)
// ============================================
if (isset($_POST['add_user'])) {
  $name  = $conn->real_escape_string($_POST['name']);
  $email = $conn->real_escape_string($_POST['email']);

  if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = 'uploads/';
    $allowedTypes = ['jpg', 'jpeg', 'png', 'webp'];
    $fileTmp = $_FILES['photo']['tmp_name'];
    $fileExt = strtolower(pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION));
    $photoFileName = uniqid() . '.' . $fileExt;
    $targetFile = $uploadDir . $photoFileName;

    // Validasi tipe file
    if (!in_array($fileExt, $allowedTypes)) {
      header("Location: addusers.php?status=invalid_file_type");
      exit;
    }

    // Validasi ukuran file
    if ($_FILES['photo']['size'] > 2 * 1024 * 1024) {
      header("Location: addusers.php?status=file_too_large");
      exit;
    }

    // Pindahkan file yang diunggah
    if (move_uploaded_file($fileTmp, $targetFile)) {
      // Masukkan phone_id dummy, dummy = data sementara
      $phone_id = 0;

      // query
      $stmt = $conn->prepare("INSERT INTO addusers (phone_id, name, email, photo) VALUES (?, ?, ?, ?)");
      $stmt->bind_param("isss", $phone_id, $name, $email, $photoFileName);

      if ($stmt->execute()) {
        header("Location: userlist.php?status=success");
      } else {
        header("Location: addusers.php?status=error_db");
      }

      $stmt->close();
    } else {
      header("Location: addusers.php?status=upload_failed");
    }
  } else {
    header("Location: addusers.php?status=no_file_uploaded");
  }
  exit;
}

// ============================================
// HANDLE UPDATE USER
// ============================================
if (isset($_POST['update_user'])) {
  $login_id = intval($_POST['login_id']);
  $name     = $conn->real_escape_string($_POST['name']);
  $email    = $conn->real_escape_string($_POST['email']);
  $updatePhoto = "";

  if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = 'uploads/';
    $photoName = basename($_FILES['photo']['name']);
    $targetFile = $uploadDir . time() . '_' . $photoName;

    if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFile)) {
      $photoFileName = basename($targetFile);
      $updatePhoto = ", photo = '$photoFileName'";

      $old = $conn->query("SELECT photo FROM addusers WHERE login_id = $login_id");
      if ($old && $row = $old->fetch_assoc()) {
        $oldPath = 'uploads/' . $row['photo'];
        if (file_exists($oldPath)) unlink($oldPath);
      }
    } else {
      header("Location: userlist.php?status=update_photo_error");
      exit;
    }
  }

  $sql = "UPDATE addusers SET name = '$name', email = '$email' $updatePhoto WHERE login_id = $login_id";
  header("Location: userlist.php?status=" . ($conn->query($sql) ? "update_success" : "update_error"));
  exit;
}

// ============================================
// HANDLE DELETE USER
// ============================================
if (isset($_POST['delete_id'])) {
  $delete_id = intval($_POST['delete_id']);
  $photo = '';

  // Ambil nama file foto dari database
  $query = $conn->prepare("SELECT photo FROM addusers WHERE login_id = ?");
  if ($query) {
    $query->bind_param("i", $delete_id);
    $query->execute();
    $result = $query->get_result();
    if ($row = $result->fetch_assoc()) {
      $photo = $row['photo'];
    }
    $query->close();
  }

  // Hapus data user dari database
  $stmt = $conn->prepare("DELETE FROM addusers WHERE login_id = ?");
  if ($stmt) {
    $stmt->bind_param("i", $delete_id);

    if ($stmt->execute()) {
      // Hapus foto
      if (!empty($photo)) {
        $photoPath = __DIR__ . '/uploads/' . $photo;
        if (file_exists($photoPath)) {
          unlink($photoPath);
        }
      }

      header("Location: userlist.php?status=delete_success");
    } else {
      // Logging error jika query gagal
      error_log("Gagal menghapus user ID $delete_id: " . $stmt->error);
      header("Location: userlist.php?status=delete_error");
    }

    $stmt->close();
  } else {
    // Logging jika prepare gagal
    error_log("Gagal mempersiapkan query DELETE: " . $conn->error);
    header("Location: userlist.php?status=delete_error");
  }

  exit;
}


// ============================================
// FUNCTION: SEARCH USERS
// ============================================
function searchUsers($keyword = '')
{
  global $conn;
  $keyword = $conn->real_escape_string($keyword);

  if (!empty($keyword)) {
    $query = "SELECT * FROM addusers WHERE name LIKE '%$keyword%' ORDER BY login_id DESC";
  } else {
    $query = "SELECT * FROM addusers ORDER BY login_id DESC";
  }

  $result = $conn->query($query);
  $users = [];

  while ($row = $result->fetch_assoc()) {
    $users[] = $row;
  }

  return $users;
}


// ============================================
// HANDLE ADD TO WATCHLIST
// ============================================
if (isset($_POST['add_watchlist_simple'])) {
  $title    = $conn->real_escape_string($_POST['title']);
  $category = $conn->real_escape_string($_POST['category']);

  $stmt = $conn->prepare("INSERT INTO watchlist (title, category) VALUES (?, ?)");
  if ($stmt) {
    $stmt->bind_param("ss", $title, $category);
    header("Location: watchlist.php?status=" . ($stmt->execute() ? "success" : "error"));
    exit;
  } else {
    echo "❌ Prepare gagal (insert watchlist): " . $conn->error;
  }
}

// ============================================
// HANDLE DELETE FROM WATCHLIST
// ============================================
if (isset($_POST['delete_watchlist'])) {
  $id = $_POST['delete_watchlist'];

  $stmt = $conn->prepare("DELETE FROM watchlist WHERE id = ?");
  if (!$stmt) {
    header("Location: watchlist.php?status=prepare_failed");
    exit;
  }

  $stmt->bind_param("i", $id);

  if ($stmt->execute()) {
    header("Location: watchlist.php?status=deleted");
  } else {
    header("Location: watchlist.php?status=delete_failed");
  }
  exit;
}

// ============================================
// FUNCTION: SEARCH WATCHLIST
// ============================================
function searchWatchlist($keyword = '')
{
  global $conn;

  if ($keyword) {
    $stmt = $conn->prepare("SELECT * FROM watchlist WHERE title LIKE ?");
    if (!$stmt) die("❌ Prepare gagal (search watchlist): " . $conn->error);
    $search = $keyword . '%';
    $stmt->bind_param("s", $search);
  } else {
    $stmt = $conn->prepare("SELECT * FROM watchlist");
    if (!$stmt) die("❌ Prepare gagal (load all watchlist): " . $conn->error);
  }

  $stmt->execute();
  $result = $stmt->get_result();
  return $result->fetch_all(MYSQLI_ASSOC);
}
