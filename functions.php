<?php

function registrar_templates_personalizados() {
    if (is_page('playlists')) {
        include(TEMPLATEPATH . '/playlists.php');
        exit();
    }
    if (is_page('sobre')) {
        include(TEMPLATEPATH . '/sobre.php');
        exit();
    }
    if (is_page('gerador')) {
        include(TEMPLATEPATH . '/gerador.php');
        exit();
    }
}
add_action('template_redirect', 'registrar_templates_personalizados');

function meu_tema_scripts() {
    wp_enqueue_style('meu-tema-style', get_stylesheet_uri());
    wp_enqueue_style('meu-css-custom', get_template_directory_uri() . '/assets/css/main.css');

}
add_action('wp_enqueue_scripts', 'meu_tema_scripts');
