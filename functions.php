<?php
function meu_tema_scripts() {
    wp_enqueue_style('meu-tema-style', get_stylesheet_uri());
    wp_enqueue_style('meu-css-custom', get_template_directory_uri() . '/assets/css/main.css');

    wp_enqueue_script(
        'typed-js',
        'https://cdn.jsdelivr.net/npm/typed.js@2.0.12',
        array(),
        null,
        true
    );

    wp_enqueue_script(
        'typed-init',
        get_template_directory_uri() . '/scripts/typed-init.js',
        array('typed-js'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'meu_tema_scripts');
