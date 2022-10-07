<?php

function motos_setup(){
     /* titulo para el seo*/
     add_theme_support('title-tag');
      // Imagenes destacadas
    add_theme_support('post-thumbnails');

    // Tamaños de imagenes
    add_image_size('nosotros', 437, 291, true);
    add_image_size('Galeria', 768,515, true);
    add_image_size('contactenos', 435, 526, true);
}
add_action('after_setup_theme', 'motos_setup');



//funcion para los estilos y scripts de la pagina
function motocicletas_style(){
  //agregar normalize css
    wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '8.0.1');

    //barra de menu 
    wp_enqueue_style('slicknavcss', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.min.css', array('normalize'), '1.0.10');

    

    //stilos propios
    wp_enqueue_style('style' , get_stylesheet_uri(), array('normalize'), '1.0.0');

    //javascript de la hamburgesa
    wp_enqueue_script('slicknavjs', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);

  
    //scripts para font awesome
    wp_enqueue_script( 'fontAwesome', "https://kit.fontawesome.com/bea5a99c98.js", array(),'6.2.0',true);

    //scripts propios
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0', true);

  

}
add_action('wp_enqueue_scripts','motocicletas_style');



//funcion para los menus

function motos_menus(){

    register_nav_menus(array(
        'header-menu' => "Header Menu",
        'redes-menu' => "redes Menu"
    ));

}
add_action("init","motos_menus");



//funcion para traer la imagen del fondo de home 

function motos_hero_image(){
  
    /* obtenemos el id de la pagina */
    $id_page = get_option('page_on_front');

    //* obtenemos el id de la imagen */
    $id_image = get_field('Fondo', $id_page);

    /*estilos a la imagen*/
    $imagen = wp_get_attachment_image_src( $id_image,'full')[0];

    /* estilos fianales*/
    wp_register_style('custom', false);
    wp_enqueue_style('custom');

    $imagen_destacada = "
    body.home #site-header {
      background-image : linear-gradient( rgba(0,0,0,0.75),  rgba(0,0,0,0.75) ), url($imagen);
      background-repeat: no-repeat;
      background-size: 100%;
      height: 44rem;
    } 
  
  ";    
  wp_add_inline_style('custom' , $imagen_destacada );
}
add_action('init', 'motos_hero_image'); 

