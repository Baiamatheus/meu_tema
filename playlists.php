<?php 
/*
Template Name: Playlists
*/
get_header(); ?>
<div class="header-top">
  <div class="menu-icon"></div>
  <nav class="menu-barra">
    <a href="index.php">Início</a>
    <a href="playlists.php">Playlists</a>
    <a href="sobre.php">Sobre</a>
  </nav>
  <div class="right-icon"></div>
</div>

<main class="playlist-section">
  <section class="playlist-header">
    <h1 class="titulo">Suas Playlists</h1>
    <p class="subtitulo">Escolha uma playlist para curtir agora mesmo</p>
  </section>

  <section class="playlists-container">
    <article class="playlist-card" onclick="window.location.href='<?php echo home_url('/playlist-detalhe?id=1'); ?>'">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/playlist3.png" alt="Capa da playlist Rock Clássico">
      <h2>Rock Clássico</h2>
      <p>Os maiores sucessos do rock de acordo com mano Brown.</p>
    </article>

    <article class="playlist-card" onclick="window.location.href='<?php echo home_url('/playlist-detalhe?id=2'); ?>'">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/playlist3.jpg" alt="Capa da playlist Treino Insano">
      <h2>Treino Insano</h2>
      <p>A trilha sonora para estourar o supino.</p>
    </article>

    <article class="playlist-card" onclick="window.location.href='<?php echo home_url('/playlist-detalhe?id=3'); ?>'">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/playlist3.jpg" alt="Capa da playlist Relax Total">
      <h2>Relax Total</h2>
      <p>Músicas para dormir, meu fiho.</p>
    </article>
  </section>
</main>

<?php get_footer(); ?>
