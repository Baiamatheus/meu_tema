<?php
function meu_tema_scripts() {
    wp_enqueue_style('meu-tema-style', get_stylesheet_uri());
    wp_enqueue_style('meu-css-custom', get_template_directory_uri() . '/assets/css/main.css');
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

// Criar tabela de músicas
function criar_tabela_musicas() {
    global $wpdb;

    $nome_tabela = $wpdb->prefix . 'musicas';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $nome_tabela (
        id INT NOT NULL AUTO_INCREMENT,
        nome VARCHAR(255) NOT NULL,
        artista VARCHAR(255) NOT NULL,
        duracao INT NOT NULL,
        genero VARCHAR(50) NOT NULL,
        humor VARCHAR(50) NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);
}
add_action('after_setup_theme', 'criar_tabela_musicas');

// Inserir músicas no banco (apenas se não houver)
function inserir_musicas_reais() {
    global $wpdb;
    $tabela = $wpdb->prefix . 'musicas';

    $ja_tem = $wpdb->get_var("SELECT COUNT(*) FROM $tabela");
    if ($ja_tem > 0) {
        return; 
    }

    $musicas = [
        // POP - Animado
        ['Blinding Lights', 'The Weeknd', 3, 'pop', 'animado'],
        ['Levitating', 'Dua Lipa', 4, 'pop', 'animado'],
        ['Don’t Start Now', 'Dua Lipa', 3, 'pop', 'animado'],
        ['Can’t Stop The Feeling!', 'Justin Timberlake', 4, 'pop', 'animado'],
        ['Shake It Off', 'Taylor Swift', 3, 'pop', 'animado'],
        ['Uptown Funk', 'Mark Ronson ft. Bruno Mars', 4, 'pop', 'animado'],
        ['Happy', 'Pharrell Williams', 3, 'pop', 'animado'],
        ['Sorry', 'Justin Bieber', 3, 'pop', 'animado'],
        ['Break Free', 'Ariana Grande ft. Zedd', 3, 'pop', 'animado'],
        ['Rain On Me', 'Lady Gaga & Ariana Grande', 3, 'pop', 'animado'],
        ['Bang Bang', 'Jessie J, Ariana Grande, Nicki Minaj', 3, 'pop', 'animado'],
        ['Toxic', 'Britney Spears', 3, 'pop', 'animado'],

        // POP - Relaxante
        ['Easy On Me', 'Adele', 4, 'pop', 'relaxante'],
        ['Someone Like You', 'Adele', 4, 'pop', 'relaxante'],
        ['Stay With Me', 'Sam Smith', 4, 'pop', 'relaxante'],
        ['Let Her Go', 'Passenger', 4, 'pop', 'relaxante'],
        ['All Of Me', 'John Legend', 4, 'pop', 'relaxante'],
        ['Photograph', 'Ed Sheeran', 4, 'pop', 'relaxante'],
        ['Jealous', 'Labrinth', 4, 'pop', 'relaxante'],
        ['Say You Won’t Let Go', 'James Arthur', 4, 'pop', 'relaxante'],
        ['When I Was Your Man', 'Bruno Mars', 4, 'pop', 'relaxante'],
        ['Love Yourself', 'Justin Bieber', 3, 'pop', 'relaxante'],
        ['Lose You To Love Me', 'Selena Gomez', 3, 'pop', 'relaxante'],
        ['Happier', 'Ed Sheeran', 3, 'pop', 'relaxante'],

        // ROCK - Animado
        ['Back In Black', 'AC/DC', 4, 'rock', 'animado'],
        ['Smells Like Teen Spirit', 'Nirvana', 4, 'rock', 'animado'],
        ['Seven Nation Army', 'The White Stripes', 4, 'rock', 'animado'],
        ['Are You Gonna Be My Girl', 'Jet', 4, 'rock', 'animado'],
        ['Song 2', 'Blur', 2, 'rock', 'animado'],
        ['Mr. Brightside', 'The Killers', 3, 'rock', 'animado'],
        ['I Bet You Look Good on the Dancefloor', 'Arctic Monkeys', 3, 'rock', 'animado'],
        ['Do I Wanna Know?', 'Arctic Monkeys', 4, 'rock', 'animado'],
        ['Take Me Out', 'Franz Ferdinand', 4, 'rock', 'animado'],
        ['Sweet Child O’ Mine', 'Guns N’ Roses', 5, 'rock', 'animado'],
        ['Livin’ On A Prayer', 'Bon Jovi', 4, 'rock', 'animado'],
        ['Eye of the Tiger', 'Survivor', 4, 'rock', 'animado'],

        // ROCK - Relaxante
        ['Nothing Else Matters', 'Metallica', 6, 'rock', 'relaxante'],
        ['Wish You Were Here', 'Pink Floyd', 5, 'rock', 'relaxante'],
        ['Tears In Heaven', 'Eric Clapton', 4, 'rock', 'relaxante'],
        ['Patience', 'Guns N’ Roses', 5, 'rock', 'relaxante'],
        ['Black', 'Pearl Jam', 5, 'rock', 'relaxante'],
        ['Angie', 'The Rolling Stones', 4, 'rock', 'relaxante'],
        ['The Scientist', 'Coldplay', 5, 'rock', 'relaxante'],
        ['Yellow', 'Coldplay', 4, 'rock', 'relaxante'],
        ['Drive', 'Incubus', 4, 'rock', 'relaxante'],
        ['Creep', 'Radiohead', 4, 'rock', 'relaxante'],
        ['High and Dry', 'Radiohead', 4, 'rock', 'relaxante'],
        ['Under The Bridge', 'Red Hot Chili Peppers', 4, 'rock', 'relaxante'],
    ];

    foreach ($musicas as $musica) {
        $wpdb->insert($tabela, [
            'nome'     => $musica[0],
            'artista'  => $musica[1],
            'duracao'  => $musica[2],
            'genero'   => $musica[3],
            'humor'    => $musica[4],
        ]);
    }
}
add_action('init', 'inserir_musicas_reais');
