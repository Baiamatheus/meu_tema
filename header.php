<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo('name'); ?> <?php wp_title('|', true, 'left'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap 5.3.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <?php wp_head(); ?>
</head>
<body>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-koji.png" style="max-width: 70px; height: auto;" alt="logo">
      <span>KojimaMusics</span>
    </a>

    <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link <?php if (is_front_page()) echo 'active'; ?>" href="<?php echo home_url('/'); ?>">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] === '/playlists') echo 'active'; ?>" href="<?php echo home_url('/playlists'); ?>">Playlists</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] === '/sobre') echo 'active'; ?>" href="<?php echo home_url('/sobre'); ?>">Sobre</a>
          </li>
        </ul>

    </div>
  </div>
</nav>
