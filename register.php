<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register Page</title>
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

        .container {
            background-color: #f2fcf9;
            border: 1px solid #3b5998;
            border-radius: 24px;
            padding: 24px 28px;
            max-width: 400px;
            width: 100%;
            box-sizing: border-box;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .title-large {
            color: #2980b9;
            font-size: 2rem;
            font-weight: 800;
            text-align: center;
            margin: 0 0 6px 0;
            user-select: none;
        }

        .title-small {
            color: #2980b9;
            font-size: 1rem;
            font-weight: 600;
            text-align: center;
            margin: 0 0 24px 0;
            user-select: none;
        }

        form {
            max-width: 100%;
        }

        label {
            display: block;
            font-weight: 600;
            font-size: 12px;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px 6px;
            font-size: 13px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            box-sizing: border-box;
            margin-bottom: 18px;
            font-family: Arial, Helvetica, sans-serif;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #2a75bb;
            outline: none;
            box-shadow: 0 0 4px #2a75bb;
        }

        .password-wrapper {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 18px;
        }

        .password-wrapper input[type="password"] {
            flex-grow: 1;
            margin-bottom: 0;
        }

        .show-password-label {
            font-size: 12px;
            font-weight: 400;
            user-select: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
            white-space: nowrap;
        }

        .show-password-label input[type="checkbox"] {
            width: 14px;
            height: 14px;
            cursor: pointer;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
            gap: 7px;
            font-size: 12px;
            font-weight: 400;
            margin-bottom: 20px;
            cursor: pointer;
            user-select: none;
        }

        .checkbox-label input[type="checkbox"] {
            width: 14px;
            height: 14px;
            cursor: pointer;
        }

        button.register-btn {
            width: 100%;
            background-color: #3b5998;
            color: #fff;
            font-weight: 700;
            font-size: 14px;
            padding: 10px 0;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-family: Arial, Helvetica, sans-serif;
            user-select: none;
        }

        button.register-btn:hover {
            background-color: #334d84;
        }

        .login-link {
            text-align: center;
            font-size: 13px;
            color: #3b5998;
            user-select: none;
        }

        .login-link a {
            color: #3b5998;
            font-weight: 700;
            text-decoration: none;
            cursor: pointer;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .container {
                padding: 20px 20px;
            }

            .title-large {
                font-size: 1.75rem;
            }

            .title-small {
                font-size: 0.9rem;
                margin-bottom: 20px;
            }

            button.register-btn {
                font-size: 13px;
                padding: 9px 0;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="title-large">Watch YUK!</h2>
        <h3 class="title-small">Create Account</h3>
        <form action="Function.php" method="POST" autocomplete="off">
            <label for="username">Username</label>
            <input id="username" name="username" type="text" autocomplete="username" required placeholder="Enter your username" />

            <label for="email">Email Address</label>
            <input id="email" name="email" type="email" autocomplete="email" required placeholder="Enter your email address" />

            <label for="password">Password</label>
            <div class="password-wrapper">
                <input id="password" name="password" type="password" autocomplete="new-password" required placeholder="Create a password" />
                <label for="show-password" class="show-password-label">
                    <input id="show-password" type="checkbox" />
                    Show Password
                </label>
            </div>

            <label for="confirm">Confirm Password</label>
            <input id="confirm" name="confirm" type="password" autocomplete="new-password" required placeholder="Re-enter your password" />

            <label class="checkbox-label" for="terms">
                <input id="terms" type="checkbox" required />
                I agree to the <a href="#" style="color:#2a75bb; text-decoration: underline; cursor:pointer;">Terms and Conditions</a>
            </label>

            <button type="submit" class="register-btn">Register</button>
        </form>
        <p class="login-link">
            Already have an account? <a href="http://localhost/pw2025_tubes_243040034/login.php#">Login here</a>
        </p>
    </div>
</body>

</html>