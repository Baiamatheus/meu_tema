<?php

// Enfileirar CSS e JS do tema
function meu_tema_scripts() {
    wp_enqueue_style('meu-tema-style', get_stylesheet_uri());
    wp_enqueue_style('meu-css-custom', get_template_directory_uri() . '/assets/css/main.css');

    wp_enqueue_script('typed-js', 'https://cdn.jsdelivr.net/npm/typed.js@2.0.12', array(), null, true);
    wp_enqueue_script('typed-init', get_template_directory_uri() . '/scripts/typed-init.js', array('typed-js'), null, true);
}
add_action('wp_enqueue_scripts', 'meu_tema_scripts');

// Criar páginas personalizadas com seus respectivos templates
function criar_paginas_personalizadas() {
    $paginas = [
        [
            'post_title'    => 'Gerador',
            'post_name'     => 'gerador',
            'post_template' => 'gerador.php',
        ],
        [
            'post_title'    => 'Playlists',
            'post_name'     => 'playlists',
            'post_template' => 'playlists.php',
        ],
        [
            'post_title'    => 'Sobre',
            'post_name'     => 'sobre',
            'post_template' => 'sobre.php',
        ],
    ];

    foreach ($paginas as $pagina) {
        $page = get_page_by_path($pagina['post_name']);

        // Se não existe, cria
        if (!$page) {
            $id = wp_insert_post([
                'post_title'   => $pagina['post_title'],
                'post_name'    => $pagina['post_name'],
                'post_status'  => 'publish',
                'post_type'    => 'page',
            ]);

            if ($id && !is_wp_error($id)) {
                update_post_meta($id, '_wp_page_template', $pagina['post_template']);
            }
        } else {
            update_post_meta($page->ID, '_wp_page_template', $pagina['post_template']);
        }
    }
}
add_action('after_switch_theme', 'criar_paginas_personalizadas');
