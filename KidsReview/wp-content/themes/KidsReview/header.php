<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <meta charset="<?php bloginfo('charset')?>"/>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <title>
            <?php bloginfo('name')?>
        </title>
       
        <?php wp_head(); ?>
    </head>
    <body>
        <?php
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        ?>
        <section id="logo" >
            <a href="">
                <img alt="" class="mx-auto d-block img-fluid" src="<?php echo $logo[0]; ?>"/>
            </a>
        </section>
     <section id="navbar">
              <nav id="cssmenu">
                <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
                    <?php wp_nav_menu( array(
                        'theme_location'    => 'header-menu',
                        'container' => false,
                        'menu_class' => false,
                        'menu_id' => false
                    )); ?>
            <?php } ?>
               
               
            </nav>
        </section> 