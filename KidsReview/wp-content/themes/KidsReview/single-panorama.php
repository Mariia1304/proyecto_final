<?php get_header(); ?>
<div class="container">
<?php  while ( have_posts() ) {
  the_post();
  ?> 
  <h1><?php the_title(); ?></h1>
  <div class="row">
  <div class="col-md-6 ">
  	<?php the_post_thumbnail('lugar-single',['class'=>'img-fluid']); ?>  
  </div>
  <div class="col-md-6 ">
    <?php the_content(); ?> 
  </div>
  </div>
    <?php } wp_reset_postdata();
?>
</div>
<div class="jumbotron">
  <h3>Galería</h3>
<div class="row">

<?php 

$images = get_field('galeria');

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