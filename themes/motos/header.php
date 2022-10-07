<!DOCTYPE html>
<html lang="<?php language_attributes(); ?> ">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  the_title(); ?></title>
    <?php wp_head();  ?>
</head>
<body <?php body_class(); ?> >
    <header id="site-header">
        <div class="contenedor">
                <div class="logo">
                     <a href="">
                         <img src="<?php echo get_template_directory_uri() ?>/assets/img/logitipo.jpg" alt="">
                     </a>
                </div>
                <?php
                    $args = array(
                        'theme_location' => 'header-menu',
                        'container' => 'nav',
                        'container_class' => 'header-menu'
                    );
                    wp_nav_menu($args);
                ?>
                <?php
                   $args_menu_redes = array(
                      'theme_location' => 'redes-menu',
                      'container' => 'nav',
                      'container_class' => 'redes'
                   );
                   wp_nav_menu( $args_menu_redes );
                ?>
        </div>

        <div class="parrafos">
              <h1><?php  the_field('titulo');  ?></h1>
              <h2><?php  the_field('descripcion')  ?></h2>

        </div>
    </header>

   
