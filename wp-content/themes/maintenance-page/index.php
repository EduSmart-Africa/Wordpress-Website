<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?> – Maintenance</title>
  <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/icone.jpg">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #f4f7fa, #e0e7ef);
      color: #333;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      text-align: center;
      padding: 2rem;
    }

    .container {
      max-width: 600px;
      background: white;
      padding: 3rem 2rem;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }

    .logo {
      max-width: 400px;
      margin-bottom: 1.5rem;
    }

    h1 {
      font-size: 2rem;
      color: #222;
      margin-bottom: 1rem;
    }

    p {
      font-size: 1.1rem;
      color: #555;
      margin-bottom: 2rem;
    }

    .loader {
      width: 40px;
      height: 40px;
      border: 4px solid #ccc;
      border-top-color: #007bff;
      border-radius: 50%;
      animation: spin 1s linear infinite;
      margin: 0 auto;
    }

    @keyframes spin {
      to { transform: rotate(360deg); }
    }

    @media (max-width: 480px) {
      h1 {
        font-size: 1.5rem;
      }
      p {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <img src="<?php echo get_template_directory_uri(); ?>/couverture.jpg" alt="Logo" class="logo" />
    <h1>Nous revenons très bientôt !</h1>
    <p>Notre site est temporairement en maintenance. Merci de votre patience.</p>
    <div class="loader"></div>
  </div>
</body>
</html>
