<?php 
/*
Template Name: Início
*/
get_header(); ?>

<div class="header-top">
  <div class="menu-icon"></div>
  <nav class="menu-barra">
    <a href="#">Início</a>
    <a href="playlists.php">Playlists</a>
    <a href="sobre.php">Sobre</a>
  </nav>
  <div class="right-icon"></div>
</div>


<div class="container">
  <div class="esquerdo">
    <h1>OUVIR AGORA</h1>
    <p>Entre rapidamente para curtir suas músicas favoritas e criar o clima perfeito para seu momento.</p>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/music.png" alt="icone-musica" class="musica">
  </div>

  <div class="direito">
    <h2>FIQUE POR DENTRO</h2>
    <p>Que tal montar novas playlists?</p>
    <a href="gerador.php" class="btn">Gerar nova playlist</a>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/capa-musica.png" alt="Capa da música" class="capa">
  </div>
</div>

<?php get_footer(); ?>
