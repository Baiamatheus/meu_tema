<?php
function meu_tema_enqueue_styles() {
    wp_enqueue_style('meu-tema-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'meu_tema_enqueue_styles');
