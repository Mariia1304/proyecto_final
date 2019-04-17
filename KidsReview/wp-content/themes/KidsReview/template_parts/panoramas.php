<section id="panoramas">
            <div class="container ">
              <h4 style="text-align: center;margin:20px;">PANORAMAS CON NIÑOS</h4>
               
                        <div class="row flex-center">
                            <?php
                                $args = array( 'post_type' => 'panorama', 'posts_per_page' =>4 );
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post();
                            ?>
                            <div class="card">
                               <?php the_post_thumbnail( 'front', ['class' =>'card-img-top'] ); ?>
                              <div class="card-body">
                                <a href="<?php the_permalink(); ?>"><button class="button" type="button" data-hover="LEER MAS" data-active="I'M ACTIVE"><span>LEER MAS</span></button></a>
                                <h5 class="card-title"><?php the_title(); ?></h5>

                                <p class="card-text"> <?php the_excerpt();?></p>
                                
                              </div>
                            </div>
                                                            
                            <?php endwhile;

                                 wp_reset_postdata();
                            ?>
                            
                        </div>
                  
               
            </div>
        </section>