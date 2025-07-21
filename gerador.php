<?php 
/*
Template Name: Gerador
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
<div class="container">
  <div class="esquerdo">
    <h1>GERAR NOVA PLAYLIST</h1>
    <p>Escolha as suas preferências para criar uma playlist personalizada baseada no seu gosto musical e estado de espírito.</p>
  </div>

  <div class="direito">
    <h2>Preencha as Opções para Gerar sua Playlist</h2>

    <form action="page-segunda.php" method="get">
      <div class="form-row">
        <label for="genero">Gênero Musical:</label>
        <select id="genero" name="genero">
          <option value="pop">Pop</option>
          <option value="rock">Rock</option>
          <option value="eletronica">Eletrônica</option>
          <option value="indie">Indie</option>
        </select>
      </div>

      <div class="form-row">
        <label for="humor">Humor:</label>
        <select id="humor" name="humor">
          <option value="animado">Animado</option>
          <option value="relaxante">Relaxante</option>
          <option value="treino">Treino</option>
          <option value="festa">Festa</option>
        </select>
      </div>

      <div class="form-row">
        <label for="duracao">Duração (minutos):</label>
        <input type="number" id="duracao" name="duracao" min="10" max="120">
      </div>

      <input type="submit" value="Gerar nova playlist" class="btn">
    </form>
  </div>
</div>


<?php get_footer(); ?>