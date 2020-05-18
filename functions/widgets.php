<?php

add_action( 'widgets_init', 'somadev_widgets_init' );

function somadev_widgets_init() {

    register_sidebar ( array (
        'name' => __( 'WhatsApp', 'somadev' ),
        'id' => 'whatsapp',
        'description' => __( 'WhatsApp', 'somadev' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));

    register_sidebar ( array (
        'name' => __( 'Elementos da Home', 'somadev' ),
        'id' => 'home',
        'description' => __( 'Blocos da Home', 'somadev' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));

    register_sidebar ( array (
        'name' => __( 'Topo Esquerda', 'somadev' ),
        'id' => 'topoesquerda',
        'description' => __( 'Exibição de conteúdo no topo a esquerda', 'somadev' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));

    register_sidebar ( array (
        'name' => __( 'Topo Direita', 'somadev' ),
        'id' => 'topodireita',
        'description' => __( 'Exibição de conteúdo no topo a direita', 'somadev' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));

    register_sidebar ( array (
        'name' => __( 'Footer 1', 'somadev' ),
        'id' => 'footer1',
        'description' => __( 'Exibição de conteúdo na coluna 1 do rodapé', 'somadev' ),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar ( array (
        'name' => __( 'Footer 2', 'somadev' ),
        'id' => 'footer2',
        'description' => __( 'Exibição de conteúdo na coluna 2 do rodapé', 'somadev' ),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar ( array (
        'name' => __( 'Footer 3', 'somadev' ),
        'id' => 'footer3',
        'description' => __( 'Exibição de conteúdo na coluna 3 do rodapé', 'somadev' ),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar ( array (
        'name' => __( 'Footer 4', 'somadev' ),
        'id' => 'footer4',
        'description' => __( 'Exibição de conteúdo na coluna 4 do rodapé', 'somadev' ),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

    register_sidebar ( array (

        'name' => __( 'Final da Página Lista de Produtos', 'somadev' ),
        'id' => 'bottom-product',
        'description' => __( 'Exibição de conteúdo no final da página lista de Produtos', 'somadev' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    register_sidebar ( array (
        'name' => __( 'Página Interna de Produtos', 'somadev' ),
        'id' => 'bottom-single-product',
        'description' => __( 'Exibiçao de conteúdo no final da página interna de cada produto', 'somadev' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title-main"><span>',
        'after_title' => '</span></h2>',
    ));

    register_sidebar ( array (
        'name' => __( 'Mapa', 'somadev' ),
        'id' => 'mapa',
        'description' => __( 'Exibição de mapa', 'somadev' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));

    register_sidebar ( array (
        'name' => __( 'Sidebar', 'somadev' ),
        'id' => 'sidebar',
        'description' => __( 'Exibição de elementos na sidebar do Blog', 'somadev' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

}