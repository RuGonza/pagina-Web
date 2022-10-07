<main class="contenedor pagina seccion">
      <div class="contenido-principal">
            <?php while(have_posts()) : the_post(); ?>    
                 <?php
                  /** Obtener la galeria de la pagina actual */
                  $galeria =get_post_gallery(get_the_ID(), false);
                  /** Obtener los ids de las imagenes de la galeria */
                  $galeria_imagenes_ID = explode(',',$galeria['ids']);
                 ?>
                 <ul class="galeria-imagenes">
                 <?php $i = 1; ?>
                     <?php foreach($galeria_imagenes_ID as $id): ?>
                        <?php  $tama =  ($i == 4 || $i == 6) ? 'portrait' : 'square' ?>
                        <?php $imagen_peque = wp_get_attachment_image_src($id, $tama)[0]; ?>
                        <?php $imagen = wp_get_attachment_image_src($id , 'full')[0]; ?>
                       

                        <li>
                              <a href="<?php echo $imagen;  ?>" data-lightbox="galeria" >
                                  <img src="<?php echo $imagen_peque; ?>" alt="imagen">
                               </a>
                        </li>
            
                     <?php endforeach; ?>
                 </ul>
            <?php  endwhile; ?>
      </div>
 </main>
