<?php
function meu_tema_scripts() {
    wp_enqueue_style('meu-tema-style', get_stylesheet_uri());
    wp_enqueue_style('meu-css-custom', get_template_directory_uri() . '/assets/css/main.css');
}
add_action('wp_enqueue_scripts', 'meu_tema_scripts');

require_once get_template_directory() . '/index.php';
require_once get_template_directory() . '/playlists.php';
require_once get_template_directory() . '/gerador.php';
require_once get_template_directory() . '/sobre.php';
