<?php

/*
    Plugin Name: Todas Las Mostos Post Type
    Plugin URI: 
    Description: Añade Post Types al Sitio Web
    Version: 1.0.0
    Author: Ruben Dario Hernandez Gonzalez
    Text Domain: motos
*/


if(!defined('ABSPATH')) die();

function Motocilcetas(){
        $labels = array(
            'name'               => _x( 'Motocicletas', 'motos' ),
            'singular_name'      => _x( 'Motocicletas', 'post type singular name', 'motos' ),
            'menu_name'          => _x( 'Motocicletas', 'admin menu', 'motos' ),
            'name_admin_bar'     => _x( 'Motocicletas', 'add new on admin bar', 'motos' ),
            'add_new'            => _x( 'Agregar Nueva', 'book', 'motos' ),
            'add_new_item'       => __( 'Agregar Motocicletas', 'motos' ),
            'new_item'           => __( 'Nueva Motocicletas', 'motos' ),
            'edit_item'          => __( 'Editar Motocicletas', 'motos' ),
            'view_item'          => __( 'Ver Motocicletas', 'motos' ),
            'all_items'          => __( 'Todas las Motocicletas', 'motos' ),
            'search_items'       => __( 'Buscar Motocicletas', 'motos' ),
            'not_found'          => __( 'No se encontraron Motocicletas', 'motos' ),
            'not_found_in_trash' => __( 'No se encontraron Motocicletas', 'motos' )
        ); 
        $args = array(
            'labels'             => $labels,
        'description'        => __( 'Descripción.', 'motos' ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'motos' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 6,
            'supports'           => array( 'title', 'editor', 'thumbnail' ),
            'show_in_rest'       => true,
        );
    
        register_post_type( 'Motocilcetas', $args );
}
add_action( 'init', 'Motocilcetas');