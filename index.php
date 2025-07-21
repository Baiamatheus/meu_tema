<?php get_header(); ?>

<div class="caminho">
  MENU
</div>
<div class="container">
  <div class="esquerdo">
    <h1>OUVIR AGORA</h1>
    <p>Entre rapidamente para curtir suas 
      músicas favoritas e criar o clima perfeito 
      para seu momento.</p>
    <div class="icone-esquerdo">🎵</div>  
  </div>
  <div class="direito">
    <h2>FIQUE POR DENTRO</h2>
    <p>Que tal montar novas playlists?</p>
    <a href="<?php echo site_url('/page-segunda'); ?>" class="btn">Gerar nova playlist</a>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/capa-musica.png" alt="Capa da música" class="capa">
  </div>
</div>  
<div class="menu-barra">
  <a href="#" class="menu-link" data-secao="playlists">Playlists</a>
  <a href="#" class="menu-link" data-secao="artistas">Artistas</a>
  <a href="#" class="menu-link" data-secao="favoritas">Favoritas</a>
</div>

<div id="conteudo-dinamico"></div>
<?php get_footer(); ?>
