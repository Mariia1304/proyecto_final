<div class="row">
  <div class="col-md-12"><h4 style="text-align: center;margin-top: 20px;">TOP LUGARES PARA SALIR  A PASEAR</h4></div>  
</div>
<div class="responsive" style="margin-top: 0">
<?php
      $args = array( 'post_type' => 'lugar', 'posts_per_page' => 1000 );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
       ?>
        
            <div class="slide">
                <a href="<?php the_permalink(); ?>">
                    <img style="height: 300px" alt="" class="img-fluid" src="<?php echo get_field('img_lugar')['sizes']['slide']; ?>"/>
                   <div class="overlay" >
                       
                       <?php the_title(); ?>
                        
                  </div> 
                </a>
            </div>
              <?php endwhile;
         wp_reset_postdata();
        ?>
</div>
      
        <section id="slider">
            <!-- slick -->
        </section>