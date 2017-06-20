 <!-- start footer nav -->
							
	<?php

        $defaults = array(
                    'theme_location'  => 'footer-menu',
                    'menu'            => '',
                    'container'       => 'ul',
                    'container_class' => '',
                    'menu_class'      => 'footer-nav pull-left',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => '',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                        );

                       if(has_nav_menu('footer-menu')) {
                        wp_nav_menu( $defaults );
						}
         
                        ?>	