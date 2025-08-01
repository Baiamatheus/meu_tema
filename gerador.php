<?php
/*
Template Name: Gerador
*/

session_start();
get_header();


// Processa o POST de salvar playlist
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['salvar_playlist'])) {
  $nova_playlist = [
    'nome' => $_POST['nome'],
    'genero' => $_POST['genero'],
    'humor' => $_POST['humor'],
    'tempo_total' => $_POST['tempo_total'],
    'musicas' => unserialize(base64_decode($_POST['musicas']))
  ];

  if (!isset($_SESSION['playlists'])) {
    $_SESSION['playlists'] = [];
  }

  $_SESSION['playlists'][] = $nova_playlist;
}
?>

<div class="container">
<?php if (isset($_GET['genero'], $_GET['humor'])):

  $genero = htmlspecialchars($_GET['genero']);
  $humor = htmlspecialchars($_GET['humor']);

  $nomes_possiveis = [
    'pop' => ['animado' => 'Hits para Brilhar', 'relaxante' => 'Pop Suave'],
    'rock' => ['animado' => 'Rock na Veia', 'relaxante' => 'Rock Desplugado'],
  ];

  $nome_playlist = $nomes_possiveis[$genero][$humor] ?? 'Minha Playlist';
  global $wpdb;
  $tabela = $wpdb->prefix . 'musicas';

  $playlist_musicas = $wpdb->get_results(
    $wpdb->prepare("SELECT nome, artista, duracao FROM $tabela WHERE genero = %s AND humor = %s", $genero, $humor),
    ARRAY_A
  );

  if (empty($playlist_musicas)) {
    $playlist_musicas = [['nome' => 'Sem Música', 'artista' => '-', 'duracao' => 3]];
  }

  $tempo_total = array_sum(array_column($playlist_musicas, 'duracao'));
?>

  <div class="playlist-card" onclick="abrirModal()">
    <h2><?php echo $nome_playlist; ?></h2>
    <p><strong>Gênero:</strong> <?php echo ucfirst($genero); ?></p>
    <p><strong>Duração:</strong> <?php echo $tempo_total; ?> min</p>
  </div>

  <div class="modal" id="modalPlaylist">
    <div class="modal-content">
      <span class="close" onclick="fecharModal()">&times;</span>
      <h2><?php echo $nome_playlist; ?></h2>
      <p><strong>Gênero:</strong> <?php echo ucfirst($genero); ?></p>
      <p><strong>Humor:</strong> <?php echo ucfirst($humor); ?></p>
      <p><strong>Duração Total:</strong> <?php echo $tempo_total; ?> min</p>

      <h3>Músicas:</h3>
      <ul>
        <?php foreach ($playlist_musicas as $musica): ?>
          <li><?php echo $musica['nome']; ?> - <?php echo $musica['artista']; ?> (<?php echo $musica['duracao']; ?> min)</li>
        <?php endforeach; ?>
      </ul>

      <div style="margin-top: 20px;">
        <form method="post" action="<?php echo esc_url(get_permalink()); ?>">
          <input type="hidden" name="salvar_playlist" value="1">
          <input type="hidden" name="nome" value="<?php echo $nome_playlist; ?>">
          <input type="hidden" name="genero" value="<?php echo $genero; ?>">
          <input type="hidden" name="humor" value="<?php echo $humor; ?>">
          <input type="hidden" name="tempo_total" value="<?php echo $tempo_total; ?>">
          <input type="hidden" name="musicas" value="<?php echo base64_encode(serialize($playlist_musicas)); ?>">
          <button type="submit" class="btn">Salvar Playlist</button>
          <a href="<?php echo get_permalink(); ?>" class="btn" style="background:#777; margin-left: 10px;">Cancelar</a>
        </form>
      </div>
    </div>
  </div>

<?php else: ?>

  <div class="esquerdo">
    <h1>GERAR NOVA PLAYLIST</h1>
    <p>Escolha o gênero e humor para criar uma playlist personalizada</p>
  </div>

  <div class="direito">
    <form method="get">
      <div class="form-row">
        <label for="genero">Gênero Musical:</label>
        <select id="genero" name="genero" required>
          <option value="">Selecione</option>
          <option value="pop">Pop</option>
          <option value="rock">Rock</option>
        </select>
      </div>

      <div class="form-row">
        <label for="humor">Humor:</label>
        <select id="humor" name="humor" required>
          <option value="">Selecione</option>
          <option value="animado">Animado</option>
          <option value="relaxante">Relaxante</option>
        </select>
      </div>

      <input type="submit" value="Gerar Playlist" class="btn">
    </form>
  </div>

<?php endif; ?>
</div>

<style>
/*Style temporário aqui pois não está pegando
do main.css */
  body {
    background: linear-gradient(90deg, #000428, #004e92);
    color: #fff;
    margin: 0;
    padding: 0;
  }

  .container {
    display: flex;
    justify-content: space-between;
    margin: 4rem auto;
    padding: 3rem;
    width: 90%;
    max-width: 1200px;
    border-radius: 20px;
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
    color: #fff;
    gap: 2rem;
  }

  .esquerdo, .direito {
    background-color: rgba(51, 51, 51, 0.9);
    padding: 2rem;
    border-radius: 10px;
    margin-bottom: 1.5rem;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
  }

  label, select, input {
    display: block;
    width: 100%;
    margin-top: 0.5rem;
    margin-bottom: 1rem;
    color: #fff;
  }

  input[type="number"], select {
    background-color: #222;
    border: 1px solid #555;
    padding: 0.5rem;
    color: #fff;
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
  }

  .btn:hover {
    background-color: #0055cc;
  }

  .playlist-card {
    background-color: rgba(34, 34, 34, 0.9);
    border: 2px solid #555;
    padding: 16px;
    margin: 20px 0;
    cursor: pointer;
    border-radius: 10px;
    transition: background 0.3s, transform 0.2s;
  }

  .playlist-card:hover {
    background-color: #1e1e1e;
    transform: scale(1.02);
  }

  .modal {
    display: none;
    position: fixed;
    z-index: 999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.8);
  }

  .modal-content {
    background-color: #222;
    color: #fff;
    margin: 5% auto;
    padding: 40px;
    width: 80%;
    max-width: 1000px;
    height: auto;
    max-height: 80vh;
    border-radius: 10px;
    position: relative;
    border: 2px solid #444;
    box-sizing: border-box;
  }

  @media (max-width: 768px) {
    .modal-content {
      width: 90%;
      max-width: 800px;
    }
  }

  .modal-content h2, .modal-content h3 {
    color: #00aaff;
  }

  .modal-content ul {
    list-style: none;
    padding-left: 0;
  }

  .modal-content li {
    border-bottom: 1px solid #444;
    padding: 6px 0;
  }

  .modal-content .close {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 22px;
    cursor: pointer;
    color: #aaa;
  }

  .modal-content .close:hover {
    color: #fff;
  }
</style>

<script>
  function abrirModal() {
    document.getElementById("modalPlaylist").style.display = "block";
  }

  function fecharModal() {
    document.getElementById("modalPlaylist").style.display = "none";
  }

  window.onclick = function(event) {
    const modal = document.getElementById("modalPlaylist");
    if (event.target == modal) modal.style.display = "none";
  }
</script>

<?php get_footer(); ?>