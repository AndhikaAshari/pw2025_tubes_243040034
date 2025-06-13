<?php
$statusMessage = '';
$statusType = '';

if (isset($_GET['status'])) {
    $statusType = $_GET['status'] === 'success' ? 'success' : 'danger';
    $statusMessage = $_GET['status'] === 'success' ? '✅ Pesan berhasil dikirim!' : '❌ Gagal mengirim pesan. Coba lagi.';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Help Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .containerr {
            max-width: 960px;
            margin: 100px auto;
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
            overflow: hidden;
        }

        .left,
        .right {
            padding: 40px 48px;
        }

        .left {
            flex: 1 1 60%;
            background-color: #fff;
        }

        .right {
            flex: 1 1 40%;
            background-color: #1f2937;
            color: white;
        }

        .form-row {
            display: flex;
            gap: 24px;
            margin-bottom: 16px;
        }

        .form-row input,
        .full-width-input {
            width: 100%;
            border: none;
            border-bottom: 1px solid #d1d5db;
            padding: 6px 0;
            font-size: 0.875rem;
            color: #6b7280;
            background: transparent;
        }

        .submit-wrapper {
            display: flex;
            justify-content: flex-end;
            margin-top: 24px;
        }

        button.submit-btn {
            background-color: #9b0212;
            color: white;
            padding: 10px 24px;
            border-radius: 9999px;
            border: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        button.submit-btn:hover {
            background-color: #b70a16;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 0.875rem;
            color: #d1d5db;
        }

        .social-buttons {
            display: flex;
            gap: 16px;
            margin-top: 8px;
        }

        .social-btn {
            background-color: #4b5563;
            border-radius: 9999px;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .containerr {
                flex-direction: column;
            }

            .form-row {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="user.php">BACK</a>
        </div>
    </nav>

    <?php if (!empty($statusMessage)) : ?>
        <div class="alert alert-<?= htmlspecialchars($statusType) ?> text-center m-3" role="alert">
            <?= htmlspecialchars($statusMessage) ?>
        </div>
    <?php endif; ?>

    <div class="containerr">
        <section class="left">
            <div class="header d-flex justify-content-between align-items-center mb-4">
                <h2>Send a Message</h2>
                <i class="bi bi-envelope fs-4 text-secondary"></i>
            </div>

            <form action="Function.php" method="POST">
                <div class="form-row">
                    <input id="firstname" type="text" name="firstname" placeholder="Firstname" required>
                    <input id="lastname" type="text" name="lastname" placeholder="Lastname" required>
                </div>
                <div class="form-row">
                    <input id="phone" type="text" name="phone" placeholder="Phone" required>
                    <input id="email" type="email" name="email" placeholder="Email" required>
                </div>
                <input id="help" type="text" name="help" placeholder="How can we help?" class="full-width-input" required>

                <div class="submit-wrapper">
                    <button type="submit" class="submit-btn" name="submit_help">
                        <i class="bi bi-send"></i> SUBMIT
                    </button>
                </div>
            </form>
        </section>

        <aside class="right">
            <h3>Contact Info</h3>
            <div class="contact-item">
                <i class="bi bi-telephone"></i><span>+62 390 5902 8531</span>
            </div>
            <div class="contact-item">
                <i class="bi bi-envelope"></i><span>WatchYUK!@gmail.com</span>
            </div>
            <div class="social-buttons">
                <div class="social-btn"><i class="bi bi-facebook"></i></div>
                <div class="social-btn"><i class="bi bi-twitter-x"></i></div>
                <div class="social-btn"><i class="bi bi-youtube"></i></div>
                <div class="social-btn"><i class="bi bi-instagram"></i></div>
            </div>
        </aside>
    </div>

</body>

</html>