<?php
function meu_tema_scripts() {
    // 1. Carrega o style.css da raiz (obrigatório para o WordPress)
    wp_enqueue_style('meu-tema-style', get_stylesheet_uri());

    // 2. Carrega seu CSS real da pasta assets/styles/
    wp_enqueue_style('meu-css-custom', get_template_directory_uri() . '/assets/css/main.css');
}
add_action('wp_enqueue_scripts', 'meu_tema_scripts');
