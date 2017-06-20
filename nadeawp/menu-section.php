 <!-- start main nav -->
	<?php

        $defaults = array(
                    'theme_location'  => 'main-menu',
                    'menu'            => '',
                    'container'       => 'ul',
                    'container_class' => '',
                    'menu_class'      => 'navTabs',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'show_top_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                        );
      

                       if(has_nav_menu('main-menu')) {
                        wp_nav_menu( $defaults );
}
          else {
            echo ('<ul class="navTabs"><li><a href="#">No menu assigned!</a></li></ul>');
          }
                        ?>

					

