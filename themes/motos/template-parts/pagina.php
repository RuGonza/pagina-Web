
    <?php  while( have_posts()) : the_post();  ?>
    <div class="contenedor-cuadrar">
        <h1 class="text-center texto-primario"><?php  the_title(); ?></h1>
            
        <?php if(has_post_thumbnail()) : ?>
                <?php  the_post_thumbnail('blog', array('class' => 'Imagen_destacada'));    ?>
        <?php  endif; ?>
        <?php the_content(); ?>

        </div>
    <?php endwhile; ?>

