<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>User Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      min-height: 100vh;
      font-family: sans-serif;
    }

    main.containerrrr {
      max-width: 480px;
      width: 100%;
      margin: 60px auto;
      padding: 0 15px;
    }

    .navbar {
      width: 100%;
      margin-bottom: 20px;
    }

    .profile-card {
      background: rgba(255, 255, 255, 0.25);
      backdrop-filter: blur(15px);
      -webkit-backdrop-filter: blur(15px);
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      padding: 48px 40px;
      text-align: center;
      border: 1px solid rgba(255, 255, 255, 0.3);
      transition: all 0.3s ease;
    }

    .profile-card:hover {
      transform: scale(1.02);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .profile-avatar {
      width: 128px;
      height: 128px;
      border-radius: 50%;
      overflow: hidden;
      margin: 0 auto 24px auto;
      border: 4px solid rgba(255, 255, 255, 0.5);
    }

    .profile-avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .profile-name {
      font-size: 2.5rem;
      font-weight: bold;
      color: #1e293b;
      margin-bottom: 12px;
    }

    .profile-info {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      font-size: 1.1rem;
      color: #334155;
      background: rgba(255, 255, 255, 0.35);
      padding: 10px 16px;
      border-radius: 12px;
      box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.05);
    }

    .profile-info i {
      font-size: 1.2rem;
      color: #0d6efd;
    }

    @media (max-width: 640px) {
      .profile-card {
        padding: 32px 20px;
      }

      .profile-name {
        font-size: 2rem;
      }

      .profile-info {
        font-size: 1rem;
        padding: 8px 12px;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="user.php">BACK</a>
    </div>
  </nav>

  <main class="containerrrr" role="main" aria-label="User profile information">
    <section class="profile-card" aria-labelledby="profile-name">
      <div class="profile-avatar" aria-hidden="true">
        <img src="img/user.jpg" alt="User Avatar" />
      </div>
      <h1 id="profile-name" class="profile-name">User</h1>
      <div class="profile-info" aria-label="Email address">
        <i class="bi bi-envelope-fill"></i>
        <span>user@gmail.com</span>
      </div>
    </section>
  </main>
</body>

</html>