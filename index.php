<?php 
/*
Template Name: Início
*/
get_header(); 
?>

<div class="esquerdo">
    <h3>Olá, nós somos a</h3>
    <h1>Kojima Musics</h1>
    <h3>Oferecemos <span class="multiple-text"></span></h3>
</div>

<div class="container">
    <div class="direito">
        <h2>FIQUE POR DENTRO</h2>
        <p>Que tal montar novas playlists?</p>
        <a href="gerador.php" class="btn">Gerar nova playlist</a>
    </div>
</div>

<div class="carrossel">
    <h2 class="titulo-noticias">Notícias da música</h2>

    <section aria-labelledby="carousel-section" class="carousel-container small-carousel">
        <h2 id="carousel-section" class="visually-hidden">Carrossel de Imagens</h2>

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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/capa-musica.png" class="d-block w-100" alt="kojima">
                    <div class="carousel-texto">
                        Novo álbum do EcoAventureiros está revolucionando o cenário da música sustentável.
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ozzy.png" class="d-block w-100" alt="Ozzy Osbourne">
                    <div class="carousel-texto">
                        Ozzy Osbourne retorna aos palcos com energia renovada e novo repertório.
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/playlist3.jpg" class="d-block w-100" alt="Playlist">
                    <div class="carousel-texto">
                        Playlist especial traz os maiores hits do funk carioca em 2025.
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>
    </section>
</div>

<!-- Seção Sobre -->
<section class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/jojo.png" style="max-width: 300px; height: auto;" alt="Imagem sobre a Kojimamusics">
        </div>
        <div class="col-md-6">
            <h2>Quem Somos</h2>
            <p>
                A Kojimamusics é um espaço onde a visão única de Hideo Kojima ganha uma nova forma: o som.
                Mesmo sem compor, Kojima entende que a música é parte essencial da imersão — ela constrói atmosferas,
                desperta sentimentos e amplia narrativas.
            </p>
            <p>
                Este site existe para expandir a experiência Kojima além dos jogos. É um reflexo de sua genialidade,
                onde a música não é o fim, mas o meio para provocar emoção, reflexão e conexão.
                Nosso objetivo é transmitir sensações, criar mundos e deixar uma marca — não com trilhas autorais, mas
                com o impacto que só Kojima sabe provocar.
            </p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
