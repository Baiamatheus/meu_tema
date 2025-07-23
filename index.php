<?php 
/*
Template Name: Início
*/
get_header(); ?>

<!--Navbar-->
<nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="index.html">
                <img src="images/ecoaventureiros-logo.png" alt="KOJImusics" title="KOJImusics" height="50">
            </a>

            <!-- Botão de Toggle para Mobile -->
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links da Navbar -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="playlists.php">playlists</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre.php">Sobre</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


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
     <!--Carrossel-->
     <section aria-labelledby="carousel-section" class="carousel-container small-carousel">
            <h2 id="carousel-section" class="visually-hidden">Carrossel de Imagens</h2>
            <!-- Título oculto para acessibilidade -->

            <!-- Carrossel -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/banner-carousel-1.png" class="d-block w-100" alt="EcoAventureiros">
                    </div>
                    <div class="carousel-item">
                        <img src="images/banner-carousel-2.png" class="d-block w-100" alt="Aventura Sustentável">
                    </div>
                    <div class="carousel-item">
                        <img src="images/banner-carousel-3.png" class="d-block w-100" alt="Jogo da EcoMemória">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/capa-musica.png" alt="Capa da música" class="capa">
  </div>
</div>
<!-- Texto da Seção Sobre -->
                <div class="col-md-6">
                    <h2>Quem Somos</h2>
                    <p>
                        O EcoAventureiros é um espaço cheio de aventuras e descobertas, feito para quem quer cuidar do
                        planeta brincando e aprendendo. Aqui, você é o herói da história, ajudando a criar um mundo mais
                        sustentável com escolhas simples e divertidas!
                    </p>
                    <p>
                        Nosso objetivo é ensinar, inspirar e convidar você a explorar, aprender e compartilhar. Vamos
                        juntos nessa missão ecológica? O planeta conta com a gente!
                    </p>
                </div>
            </div>
        </section>
    </main>


<?php get_footer(); ?>
