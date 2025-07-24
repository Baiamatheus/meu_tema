<?php
// Carregar estilos e scripts
function meu_tema_scripts() {
    // CSS principal do tema
    wp_enqueue_style('meu-tema-style', get_stylesheet_uri());

    // CSS customizado
    wp_enqueue_style('meu-css-custom', get_template_directory_uri() . '/assets/css/main.css');

    // Typed.js (efeito de digitação)
    wp_enqueue_script(
        'typed-js',
        'https://cdn.jsdelivr.net/npm/typed.js@2.0.12',
        array(),
        null,
        true
    );

    // Script de inicialização do Typed.js
    wp_enqueue_script(
        'typed-init',
        get_template_directory_uri() . '/scripts/typed-init.js',
        array('typed-js'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'meu_tema_scripts');

// Adicionar rotas personalizadas para páginas sem precisar criar posts ou páginas no WP
function adicionar_rotas_personalizadas() {
    add_rewrite_rule('^playlists/?$', 'index.php?custom_page=playlists', 'top');
    add_rewrite_rule('^sobre/?$', 'index.php?custom_page=sobre', 'top');
    add_rewrite_rule('^gerador/?$', 'index.php?custom_page=gerador', 'top');
}
add_action('init', 'adicionar_rotas_personalizadas');

// Permitir que a query var 'custom_page' seja reconhecida pelo WP
function adicionar_query_vars($vars) {
    $vars[] = 'custom_page';
    return $vars;
}
add_filter('query_vars', 'adicionar_query_vars');

// Carregar o template certo de acordo com a URL
function carregar_template_personalizado() {
    $pagina = get_query_var('custom_page');

    if ($pagina === 'playlists') {
        include get_template_directory() . '/playlists.php';
        exit;
    } elseif ($pagina === 'sobre') {
        include get_template_directory() . '/sobre.php';
        exit;
    } elseif ($pagina === 'gerador') {
        include get_template_directory() . '/gerador.php';
        exit;
    }
}
add_action('template_redirect', 'carregar_template_personalizado');
