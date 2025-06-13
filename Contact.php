<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Form</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background-color: #fff;
            font-family: Arial, sans-serif;
            color: #1f2937;
        }

        .containerr {
            max-width: 960px;
            margin: 100px auto;
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgb(0 0 0 / 0.1);
            display: flex;
            flex-wrap: wrap;
            overflow: hidden;
        }

        /* Left side */
        .left {
            flex: 1 1 60%;
            background-color: #fff;
            padding: 40px 48px;
            display: flex;
            flex-direction: column;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .header h2 {
            font-weight: 600;
            font-size: 1.125rem;
            line-height: 1.33;
            color: #111827;
            margin: 0;
        }

        .header .icon-envelope {
            font-size: 20px;
            color: #374151;
        }

        form {
            width: 100%;
        }

        .form-row {
            display: flex;
            gap: 24px;
            margin-bottom: 16px;
            flex-wrap: wrap;
        }

        .form-row>input {
            flex: 1 1 45%;
            border: none;
            border-bottom: 1px solid #d1d5db;
            padding: 6px 0;
            font-size: 0.875rem;
            color: #6b7280;
            background: transparent;
        }

        .form-row>input::placeholder {
            color: #9ca3af;
        }

        .form-row>input:focus {
            outline: none;
            border-color: #9ca3af;
            color: #111827;
        }

        .full-width-input {
            width: 100%;
            border: none;
            border-bottom: 1px solid #d1d5db;
            padding: 6px 0;
            font-size: 0.875rem;
            color: #6b7280;
            background: transparent;
            margin-bottom: 16px;
        }

        .full-width-input::placeholder {
            color: #9ca3af;
        }

        .full-width-input:focus {
            outline: none;
            border-color: #9ca3af;
            color: #111827;
        }

        .submit-wrapper {
            display: flex;
            justify-content: flex-end;
            margin-top: 24px;
        }

        button.submit-btn {
            background-color: #9b0212;
            color: white;
            font-weight: 600;
            font-size: 0.875rem;
            padding: 10px 24px;
            border-radius: 9999px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: background-color 0.3s ease;
        }

        button.submit-btn:hover {
            background-color: #b70a16;
        }

        /* Right side */
        .right {
            flex: 1 1 40%;
            background-color: #1f2937;
            color: white;
            padding: 40px 48px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 24px;
            min-width: 280px;
        }

        .right h3 {
            font-weight: 600;
            font-size: 1.125rem;
            margin: 0 0 12px 0;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 0.875rem;
            color: #d1d5db;
        }

        .contact-item i {
            font-size: 18px;
            color: #6b7280;
            min-width: 18px;
            text-align: center;
        }

        .contact-item span {
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
            cursor: auto;
            border: none;
            font-size: 14px;
            color: white;
            line-height: 1;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .containerr {
                flex-direction: column;
            }

            .left,
            .right {
                flex: 1 1 100%;
                min-width: auto;
                padding: 32px 24px;
            }

            .form-row {
                flex-direction: column;
            }

            .form-row>input {
                flex: 1 1 100%;
                margin-top: 8px;
            }

            .form-row>input:first-child {
                margin-top: 0;
            }

            .submit-wrapper {
                justify-content: center;
            }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                BACK</a>
        </div>
    </nav>
    <div class="containerr">
        <section class="left">
            <div class="header">
                <h2>Send a Message</h2>
                <i class="bi bi-envelope"></i>
            </div>
            <form action="Function.php" method="POST">
                <div class="form-row">
                    <input id="firstname" type="text" placeholder="Firstname" name="firstname" />
                    <input id="lastname" type="text" placeholder="Lastname" name="lastname" />
                </div>
                <div class="form-row">
                    <input id="phone" type="text" placeholder="phone" name="phone" />
                    <input id="email" type="email" placeholder="email" name="email" />
                </div>
                <input
                    id="help"
                    type="text"
                    placeholder="How can we help?"
                    name="help"
                    class="full-width-input" />
                <div class="submit-wrapper">
                    <button type="submit" class="submit-btn" name="submit_contact">
                        <i class="bi bi-send"></i>
                        SUBMIT
                    </button>
                </div>
            </form>
        </section>
        <aside class="right">
            <h3>Contact Info</h3>
            <div class="contact-item">
                <i class="bi bi-telephone"></i>
                <span>+62 390 5902 8531</span>
            </div>
            <div class="contact-item">
                <i class="bi bi-envelope"></i>
                <span>WatchYUK!@gmail.com</span>
            </div>
            <div class="social-buttons">
                <div class="social-btn">
                    <i class="bi bi-facebook"></i>
                </div>
                <div class="social-btn">
                    <i class="bi bi-twitter-x"></i>
                </div>
                <div class="social-btn">
                    <i class="bi bi-youtube"></i>
                </div>
                <div class="social-btn">
                    <i class="bi bi-instagram"></i>
                </div>
            </div>
        </aside>
    </div>
</body>

</html>