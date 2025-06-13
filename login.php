<?php
session_start();


if (isset($_POST["login"])) {
    if ($_POST["username"] == "Admin" && $_POST["password"] == "Adminaja") {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}

if (isset($_POST["login"])) {
    if ($_POST["username"] == "user" && $_POST["password"] == "useraja") {
        header("Location: user.php");
        exit;
    } else {
        $error = true;
    }
}



$error = false;


?>


<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            background-color: #a7d1df;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 16px;
            box-sizing: border-box;
        }

        .outer-container {
            background-color: #f2fcf9;
            border: 1px solid #3b5998;
            border-radius: 25px;
            padding: 32px 32px 40px 32px;
            max-width: 400px;
            width: 100%;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .inner-container {
            background-color: white;
            border: 1px solid #3b5998;
            border-radius: 25px;
            padding: 28px 24px 32px 24px;
            box-sizing: border-box;
            width: 100%;
        }

        .header-text {
            color: #2980b9;
            font-size: 2rem;
            font-weight: 800;
            text-align: center;
            margin-bottom: 25px;
            user-select: none;
        }

        form {
            max-width: 280px;
            margin: 0 auto;
        }

        label {
            font-weight: 600;
            font-size: 13px;
            display: block;
            margin-bottom: 6px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px 8px;
            font-size: 14px;
            border: 1px solid #d1d5db;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 18px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .password-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 6px;
        }

        .show-password-label {
            font-weight: 400;
            font-size: 13px;
            cursor: pointer;
            user-select: none;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .show-password-label input[type="checkbox"] {
            width: 14px;
            height: 14px;
            cursor: pointer;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 13px;
            margin-bottom: 18px;
            cursor: pointer;
            user-select: none;
        }

        .checkbox-label input[type="checkbox"] {
            width: 14px;
            height: 14px;
            cursor: pointer;
        }

        .warning-text {
            font-size: 13px;
            margin-bottom: 24px;
            line-height: 1.3;
            display: flex;
            align-items: flex-start;
            gap: 8px;
        }

        .warning-text i {
            margin-top: 3px;
            font-style: normal;
            font-weight: 700;
        }

        button.login-btn {
            width: 100%;
            background-color: #3b5998;
            color: #fff;
            font-weight: 700;
            font-size: 14px;
            padding: 10px 0;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin-bottom: 24px;
            font-family: Arial, Helvetica, sans-serif;
            user-select: none;
            transition: background-color 0.3s ease;
        }

        button.login-btn:hover {
            background-color: #334d84;
        }

        .forgot-links {
            text-align: center;
            font-size: 12px;
            color: #3b5998;
            margin-bottom: 24px;
        }

        .forgot-links a {
            color: #3b5998;
            text-decoration: none;
            margin: 0 5px;
        }

        .forgot-links a:hover {
            text-decoration: underline;
        }

        .signup-btn {
            display: block;
            margin: 0 auto;
            background-color: #dbe2f1;
            color: #3b5998;
            font-weight: 800;
            font-size: 14px;
            padding: 6px 32px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-family: Arial, Helvetica, sans-serif;
            user-select: none;
            transition: background-color 0.3s ease;
            text-align: center;
            text-decoration: none;
            width: max-content;
        }

        .signup-btn:hover {
            background-color: #c1c9e0;
        }

        @media (max-width: 480px) {
            .outer-container {
                max-width: 100%;
                padding: 24px 20px 28px 20px;
            }

            .inner-container {
                padding: 24px 20px 28px 20px;
            }

            form {
                max-width: 100%;
            }

            button.login-btn {
                font-size: 13px;
                padding: 9px 0;
            }

            .forgot-links {
                font-size: 11px;
                margin-bottom: 20px;
            }

            .signup-btn {
                padding: 5px 24px;
                font-size: 13px;
            }

            .header-text {
                font-size: 24px;
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="outer-container">
        <div class="inner-container">
            <div class="header-text">Watch YUK!</div>

            <?php if ($error): ?>
                <p style="color: red; text-align: center; font-size: 14px; margin-bottom: 16px;">
                    Username atau password salah.
                </p>
            <?php endif; ?>

            <form action="login.php" method="POST" autocomplete="off">
                <label for="username">Username</label>
                <input id="username" name="username" type="text" autocomplete="username" placeholder="Enter your username" required />
                <div class="password-row">
                    <label for="password">Password</label>
                    <label for="show-password" class="show-password-label">
                        <input id="show-password" type="checkbox" onclick="togglePassword()" />
                        Show Password
                    </label>
                </div>
                <input id="password" name="password" type="password" autocomplete="current-password" placeholder="Enter your password" required />
                <label class="checkbox-label" for="stay-logged-in">
                    <input id="stay-logged-in" type="checkbox" checked />
                    Stay logged in?
                </label>
                <p class="warning-text" aria-live="polite">
                    <i aria-hidden="true">❗</i>
                    Make sure the password you entered is correct. Always check the domain is Watch YUK! before entering your password.
                </p>
                <button type="submit" name="login" class="login-btn">Login</button>
            </form>
            <div class="forgot-links">
                <a href="ForgotUsername.php">Forgot username?</a> | <a href="ForgotPassword.php">Forgot password?</a>
            </div>
            <a href="register.php" class="signup-btn">Sign Up</a>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById("password");
            const showPassword = document.getElementById("show-password");
            passwordField.type = showPassword.checked ? "text" : "password";
        }
    </script>
</body>

</html>