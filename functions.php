<?php
function meu_tema_scripts() {
    // 1. Style.css do tema (obrigatório)
    wp_enqueue_style('meu-tema-style', get_stylesheet_uri());

    // 2. CSS customizado
    wp_enqueue_style('meu-css-custom', get_template_directory_uri() . '/assets/css/main.css');

    // 3. JavaScript customizado
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/interacoes.js"></script>

    
}
add_action('wp_enqueue_scripts', 'meu_tema_scripts');
