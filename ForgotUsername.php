<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Forgot Username</title>
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
      border-radius: 24px;
      padding: 28px 28px 32px 28px;
      max-width: 320px;
      width: 100%;
      box-sizing: border-box;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .inner-container {
      background-color: white;
      border: 1px solid #3b5998;
      border-radius: 24px;
      padding: 24px 20px 28px 20px;
      box-sizing: border-box;
      width: 100%;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.07);
    }

    .header-text {
      color: #2980b9;
      font-size: 24px;
      font-weight: 800;
      text-align: center;
      margin-bottom: 20px;
      user-select: none;
      letter-spacing: 0.02em;
    }

    .info-text {
      font-size: 13px;
      color: #444;
      margin-bottom: 24px;
      line-height: 1.4;
      text-align: center;
      user-select: none;
      padding: 0 6px;
    }

    form {
      max-width: 100%;
      margin: 0 auto;
    }

    label {
      font-weight: 600;
      font-size: 13px;
      display: block;
      margin-bottom: 6px;
      color: #2a75bb;
    }

    input[type="email"] {
      width: 100%;
      padding: 10px 8px;
      font-size: 13px;
      border: 1.5px solid #cbd5e1;
      border-radius: 7px;
      box-sizing: border-box;
      margin-bottom: 24px;
      font-family: Arial, Helvetica, sans-serif;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    input[type="email"]:focus {
      border-color: #2a75bb;
      outline: none;
      box-shadow: 0 0 6px #2a75bbaa;
    }

    button.submit-btn {
      width: 100%;
      background-color: #3b5998;
      color: #fff;
      font-weight: 700;
      font-size: 14px;
      padding: 12px 0;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-family: Arial, Helvetica, sans-serif;
      user-select: none;
      box-shadow: 0 3px 8px #3b5998aa;
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    button.submit-btn:hover {
      background-color: #334d84;
      box-shadow: 0 5px 12px #334d84cc;
    }

    .back-link {
      text-align: center;
      font-size: 13px;
      margin-top: 16px;
      user-select: none;
    }

    .back-link a {
      color: #3b5998;
      font-weight: 700;
      text-decoration: none;
      cursor: pointer;
      transition: color 0.3s ease;
    }

    .back-link a:hover {
      text-decoration: underline;
      color: #1e3a6f;
    }

    @media (max-width: 480px) {
      .outer-container {
        max-width: 100%;
        padding: 20px 18px 24px 18px;
      }

      .inner-container {
        padding: 20px 18px 24px 18px;
      }

      .header-text {
        font-size: 20px;
        margin-bottom: 18px;
      }

      .info-text {
        font-size: 12px;
        margin-bottom: 20px;
        padding: 0 4px;
      }

      label {
        font-size: 12px;
        margin-bottom: 5px;
      }

      input[type="email"] {
        font-size: 12px;
        padding: 9px 7px;
        margin-bottom: 20px;
      }

      button.submit-btn {
        font-size: 13px;
        padding: 10px 0;
      }

      .back-link {
        font-size: 12px;
        margin-top: 14px;
      }
    }
  </style>
</head>

<body>
  <div class="outer-container">
    <div class="inner-container">
      <div class="header-text">Forgot Username</div>
      <p class="info-text">
        Enter the email address associated with your account, and we'll send you your username.
      </p>
      <form action="#" method="POST" autocomplete="off">
        <label for="email">Email Address</label>
        <input id="email" name="email" type="email" autocomplete="email" placeholder="Enter your email address" required />
        <button type="submit" class="submit-btn">Send Username</button>
      </form>
      <div class="back-link">
        <a href="http://localhost/pw2025_tubes_243040034/login.php#">Back to Login</a>
      </div>
    </div>
  </div>
</body>

</html>