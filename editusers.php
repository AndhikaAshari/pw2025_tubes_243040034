<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .card {
            background: white;
            max-width: 500px;
            margin: 30px auto;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #444;
        }

        input[type="text"],
        input[type="email"],
        input[type="file"] {
            width: 100%;
            padding: 10px 14px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        .photo-preview {
            text-align: center;
            margin-bottom: 20px;
        }

        .photo-preview img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
            border: 2px solid #ccc;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            font-weight: bold;
            text-align: center;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .back-link {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #555;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="Admin.php">BACK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="addusers.php">Add Users</a>
                <a class="nav-item nav-link active" href="editusers.php">Edit Users</a>
            </div>
        </div>
    </nav>

    <?php
    // Ambil data user dari database
    if (isset($_GET['id'])) {
        $conn = new mysqli("localhost", "root", "270498Dika.", "pw2025_tubes_243040034");

        if ($conn->connect_error) {
            die("<div class='alert alert-danger text-center'>Koneksi database gagal: " . $conn->connect_error . "</div>");
        }

        $id = (int) $_GET['id'];
        $query = $conn->query("SELECT * FROM addusers WHERE login_id = $id");

        if ($query && $query->num_rows > 0) {
            $user = $query->fetch_assoc();
        } else {
            echo "<div class='alert alert-danger text-center'>❌ User tidak ditemukan.</div>";
            exit;
        }

        $conn->close();
    } else {
        echo "<div class='alert alert-warning text-center'>ID tidak diberikan.</div>";
        exit;
    }
    ?>

    <div class="card">
        <h2>Edit User</h2>
        <form action="Function.php" method="post" enctype="multipart/form-data">
            <!-- Hidden input untuk login_id user -->
            <input type="hidden" name="login_id" value="<?= htmlspecialchars($user['login_id']) ?>">

            <!-- Input nama -->
            <label for="name">Name</label>
            <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" required>

            <!-- Input email -->
            <label for="email">Email</label>
            <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>

            <!-- Preview foto lama -->
            <label>Current Photo</label>
            <div class="photo-preview">
                <img src="uploads/<?= htmlspecialchars($user['photo']) ?>" alt="User Photo">
            </div>

            <!-- Upload foto baru (opsional) -->
            <label for="photo">Change Photo</label>
            <input type="file" name="photo" accept="image/*">

            <!-- Tombol submit -->
            <button type="submit" name="update_user" class="btn">Update User</button>
        </form>

        <!-- Link kembali -->
        <a href="userlist.php" class="back-link">Back to User List</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>