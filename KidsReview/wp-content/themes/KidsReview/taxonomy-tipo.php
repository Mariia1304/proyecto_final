<?php get_header(); ?>
<div class="container">
<div class="row row__lugares">
<?php
  while ( have_posts() ) {
    the_post();
  ?>
 
	<div class="col-md-6">
    <a class="a__lugares" href="<?php the_permalink(); ?>"><article class="article__lugares">
   <?php the_post_thumbnail('lugar-single', ['class'=> 'img-fluid img-fluid__lugares']); ?>
   <h3><?php the_title();?></h3>
   <p><?php the_date(); ?></p>
   <p><?php the_excerpt();?></p> 
   </article>
   </a>
  </div>
   
  <?php } wp_reset_postdata();
  ?>
  </div>
  </div>
 <?php get_footer(); ?>
