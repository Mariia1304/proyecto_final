 <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
                    <?php wp_nav_menu( array( 
                        'theme_location'    => 'header-menu',
                     'container'        => 'false',
                         //'container_id'      => 'navbarResponsive',
                         //'container_class'   => 'collapse navbar-collapse',
                        'menu_class'        => 'navbar-nav'
                        )
                    ); ?>
                <?php } ?>