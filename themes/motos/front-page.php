<?php get_header(); ?>
   <div class="seccion-galeria">
            <div class="contenedor-galeria">
                <h2 class="text-center texto-primario">TODAS LAS MOTOS</h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="galeria">
                       <?php
                                $args = array(
                                    'post_type' => 'motocilcetas',
                                    'posts_per_page' => 6,
                                    'orderBy' => 'title',
                                    'order' => 'DESC'
                                );
                                $morocicletas = new WP_Query($args);
                               while ($morocicletas->have_posts()) : $morocicletas->the_post();
                       ?>
                         <?php get_template_part('template-parts/loop', 'motocicletas'); ?>
                         <?php endwhile;  wp_reset_postdata(); ?>
                </div>

            </div>

   </div>
   
  

<?php get_footer(); ?>