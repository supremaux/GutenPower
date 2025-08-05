<?php
function gutenpower_setup() {
    // Adiciona suporte para o editor Gutenberg
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');

    // Adiciona suporte para título dinâmico
    add_theme_support('title-tag');

    // Adiciona suporte para miniaturas de posts
    add_theme_support('post-thumbnails');

    // Adiciona suporte para menus
    add_theme_support('menus');

    // Registra menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'gutenpower'),
        'footer' => __('Footer Menu', 'gutenpower'),
    ));
}
add_action('after_setup_theme', 'gutenpower_setup');

// Carrega estilos e scripts
function gutenpower_scripts() {
    // Carrega o estilo principal
    wp_enqueue_style('gutenpower-style', get_stylesheet_uri());

    // Carrega o estilo do editor Gutenberg
    add_theme_support('editor-styles');
    add_editor_style('assets/css/editor-style.css');
}
add_action('wp_enqueue_scripts', 'gutenpower_scripts');
