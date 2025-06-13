<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            max-width: 600px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        h2 {
            margin-bottom: 25px;
            color: #333;
        }

        label {
            font-weight: 600;
        }

        input[type="text"],
        input[type="email"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 12px 0 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 12px;
            border: none;
            width: 100%;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
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

        .message {
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 6px;
            font-weight: bold;
            text-align: center;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="Admin.php">BACK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="addusers.php">Add Users</a>
                    <a class="nav-item nav-link" href="editusers.php">Edit Users</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Form -->
    <div class="container">
        <h2>Add New User</h2>

        <!-- Status Message -->
        <?php if (isset($_GET['status'])): ?>
            <?php
            $status = $_GET['status'];
            $message = '';
            $class = 'error';

            switch ($status) {
                case 'success':
                    $message = '✅ User added successfully!';
                    $class = 'success';
                    break;
                case 'invalid_file_type':
                    $message = '❌ Invalid file type! Only JPG, PNG, or WEBP allowed.';
                    break;
                case 'file_too_large':
                    $message = '❌ File is too large! Max 2MB allowed.';
                    break;
                case 'upload_failed':
                    $message = '❌ Failed to upload photo.';
                    break;
                case 'no_file_uploaded':
                    $message = '❌ No photo uploaded.';
                    break;
                case 'error_db':
                    $message = '❌ Database error occurred while adding user.';
                    break;
                default:
                    $message = '❌ Unknown error.';
            }
            ?>
            <div class="message <?= $class ?>"><?= $message ?></div>
        <?php endif; ?>

        <!-- Form -->
        <form action="Function.php" method="POST" enctype="multipart/form-data">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="photo">Upload Photo</label>
            <input type="file" id="photo" name="photo" accept=".jpg,.jpeg,.png,.webp" required>

            <button type="submit" name="add_user">Add User</button>
        </form>

        <a href="userlist.php" class="back-link">← Back to User List</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>