<?php
require_once 'Function.php';

$keyword = $_GET['search'] ?? '';
$users = searchUsers($keyword);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <style>
        .container {
            max-width: 1000px;
            margin: 30px auto;
            background-color: #fff;
            padding: 24px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .add-btn {
            background-color: #28a745;
            color: white;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
        }

        .add-btn:hover {
            background-color: #218838;
        }

        .user-table {
            width: 100%;
            border-collapse: collapse;
        }

        .user-table th,
        .user-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        .user-table th {
            background-color: #333;
            color: white;
        }

        .user-table img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
        }

        .edit-btn {
            background-color: #f0ad4e;
            color: white;
        }

        .edit-btn:hover {
            background-color: #ec971f;
        }

        .delete-btn {
            background-color: #dc3545;
            color: white;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="Admin.php">BACK</a>
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="addusers.php">Add Users</a>
                    <a class="nav-item nav-link" href="editusers.php">Edit Users</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <!-- Status Alerts -->
        <?php if (isset($_GET['status'])): ?>
            <div class="alert alert-<?= in_array($_GET['status'], ['success', 'update_success']) ? 'success' : 'danger' ?> text-center" role="alert">
                <?php
                switch ($_GET['status']) {
                    case 'success':
                        echo "✅ User berhasil ditambahkan.";
                        break;
                    case 'update_success':
                        echo "✅ User berhasil diperbarui.";
                        break;
                    case 'update_error':
                        echo "❌ Gagal memperbarui user.";
                        break;
                    case 'delete_success':
                        echo "✅ User berhasil dihapus.";
                        break;
                    case 'delete_error':
                        echo "❌ Gagal menghapus user.";
                        break;
                    default:
                        echo "❌ Terjadi kesalahan.";
                }
                ?>
            </div>
        <?php endif; ?>

        <!-- Top Bar with Search -->
        <div class="top-bar row align-items-center mb-4">
            <div class="col-md-4">
                <h2 class="mb-0">User Management</h2>
                <?php if ($keyword): ?>
                    <small class="text-muted">Hasil pencarian untuk: <strong><?= htmlspecialchars($keyword) ?></strong></small>
                <?php endif; ?>
            </div>
            <div class="col-md-8">
                <form method="get" class="d-flex flex-wrap gap-2 justify-content-md-end">
                    <input type="text" name="search" class="form-control" placeholder="Search by name..." value="<?= htmlspecialchars($keyword) ?>">
                    <button type="submit" class="btn btn-primary">Search</button>
                    <a href="userlist.php" class="btn btn-secondary">Reset</a>
                    <a href="addusers.php" class="btn add-btn">+ Add User</a>
                </form>
            </div>
        </div>

        <!-- User Table -->
        <table class="user-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Photo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($users) > 0): ?>
                    <?php foreach ($users as $index => $user): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= htmlspecialchars($user['name']) ?></td>
                            <td><?= htmlspecialchars($user['email']) ?></td>
                            <td>
                                <?php
                                $photo = 'uploads/' . htmlspecialchars($user['photo']);
                                $photoSrc = (is_file($photo) && !empty($user['photo'])) ? $photo : 'default.png';
                                ?>
                                <img src="<?= $photoSrc ?>" alt="User Photo">
                            </td>
                            <td>
                                <a href="editusers.php?id=<?= $user['login_id'] ?>" class="btn edit-btn">Edit</a>
                                <form method="post" action="Function.php" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this user?')">
                                    <input type="hidden" name="delete_id" value="<?= $user['login_id'] ?>">
                                    <button type="submit" class="btn delete-btn">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">No users found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>