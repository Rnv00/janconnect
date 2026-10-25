<?php
// Shared page header for JanConnect.
// $pageTitle can be set before including this file.
$pageTitle = $pageTitle ?? 'JanConnect | Your civic services, simplified';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="JanConnect brings civic services, complaints, SOS help, and updates together in one place.">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <a class="skip-link" href="#main-content">Skip to main content</a>
  <header class="site-header sticky-top">
    <nav class="navbar navbar-expand-lg container py-3" aria-label="Main navigation">
      <a class="navbar-brand d-flex align-items-center gap-2" href="index.php" aria-label="JanConnect home">
        <span class="brand-mark" aria-hidden="true">JC</span>
        <span>Jan<strong>Connect</strong></span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#siteNav" aria-controls="siteNav" aria-expanded="false" aria-label="Open navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="siteNav">
        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="track.php">Track request</a></li>
          <li class="nav-item"><a class="nav-link" href="help.php">Help</a></li>
          <li class="nav-item ms-lg-2"><a class="btn btn-marigold btn-sm" href="login.php">Citizen login</a></li>
        </ul>
      </div>
    </nav>
  </header>
