<?php get_header(); ?>
<div class="container">
<div class="row row__lugar">



  <?php  while ( have_posts() ) {
  the_post();
  ?> 
  <div class="col-md-6">

  <?php the_post_thumbnail('lugar-single',['class' =>'img-fluid']); ?>
  </div>
  <div class="col-md-6">
  <p><?php the_date(); ?></p>
  <?php the_title(); ?>
  <?php the_content(); ?>

 

  <?php previous_post_link();?>
  <?php next_post_link();?>
  
   </div>
  <?php } wp_reset_postdata();
  ?>
</div>
</div>




  
  
    

<div class="jumbotron">
  <h3>Galería</h3>
<div class="row">

<?php 

$images = get_field('gallery');

if( $images ): ?>

        <?php foreach( $images as $image ): ?>
            <div class="col-md-3 col-sm-6" >
                <a href="<?php echo $image['url']; ?>">
                     <img class="img-fluid" style="width: 300px;height: 300px;" src="<?php echo $image['sizes']['slide']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                <p><?php echo $image['caption']; ?></p>
           </div>
        <?php endforeach; ?>
  
<?php endif; ?>
</div>
</div>
<?php get_footer(); ?>

