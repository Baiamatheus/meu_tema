<?php
/*
Template Name: Playlists
*/

session_start();
get_header();
?>

<div class="container">
  <h1>Minhas Playlists Salvas</h1>

  <?php if (!empty($_SESSION['playlists'])): ?>
    <?php foreach ($_SESSION['playlists'] as $index => $p): ?>
      <div class="playlist-card">
        <h2><?php echo $p['nome']; ?></h2> 
        <p><strong>Gênero:</strong> <?php echo ucfirst($p['genero']); ?></p> 
        <p><strong>Humor:</strong> <?php echo ucfirst($p['humor']); ?></p> 
        <p><strong>Duração:</strong> <?php echo $p['tempo_total']; ?> min</p> 

        <h3>Músicas:</h3>
        <ul>
          <?php foreach ($p['musicas'] as $musica): ?>
            <li><?php echo $musica['nome']; ?> - <?php echo $musica['artista']; ?> (<?php echo $musica['duracao']; ?> min)</li> 
          <?php endforeach; ?>
        </ul>

        <div style="margin-top: 20px;">
          <a href="<?php echo site_url('/gerador'); ?>" class="btn" style="background:#777;">Gerar Nova Playlist</a> 
        </div>
      </div>
    <?php endforeach; ?>
  <?php else: ?>
    <p style="color: #fff;">Nenhuma playlist gerada ainda.</p>
    <a href="<?php echo site_url('/gerador'); ?>" class="btn">Gerar Agora</a>
  <?php endif; ?>
</div>

<style>
    /*Style temporário aqui pois não está pegando
  do main.css */
  body {
    background: linear-gradient(90deg, #000428, #004e92);
    color: #fff;
  }

  .container {
    padding: 2rem;
    max-width: 900px;
    margin: auto;
  }

  .playlist-card {
    background-color: rgba(34, 34, 34, 0.9);
    border: 2px solid #555;
    padding: 16px;
    margin: 20px 0;
    border-radius: 10px;
  }

  .playlist-card h2 {
    color: #00aaff;
  }

  ul {
    list-style: none;
    padding-left: 0;
  }

  li {
    border-bottom: 1px solid #444;
    padding: 6px 0;
  }

  .btn {
    display: inline-block;
    background-color: #006eff;
    color: #fff;
    border: none;
    padding: 0.75rem 1.5rem;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
    text-decoration: none;
  }

  .btn:hover {
    background-color: #0055cc;
  }
</style>

<?php get_footer(); ?>