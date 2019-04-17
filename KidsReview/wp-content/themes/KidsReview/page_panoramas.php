<?php 
/*
Template Name: Panoramas
*/ ?>

<?php get_header(); ?>
<div class="container" style="margin-top: 40px;">
<div class="row">
<?php
        $args = array( 'post_type' => 'panorama', 'posts_per_page' => 1000 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
            ?>
<div class="card">
  <?php the_post_thumbnail( 'lugar-single',['class'=>'card-img-top'] ); ?>
  <a style="text-decoration: none;color: black;" href="<?php the_permalink(); ?>"><div class="card-body">
    <h5 class="card-title"><?php the_title(); ?></h5>
    <p class="card-text"><?php the_excerpt(); ?></p>
  </div></a>
</div>


        <?php endwhile;

        wp_reset_postdata();
        ?>
</div>
</div>
<?php get_footer(); ?>
