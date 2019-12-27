<?php

register_sidebar( array(
    'name' => 'Main Sidebar',
    'id' => 'sidebar-page',
    'description' => 'Widgets in this area will be shown on all posts and pages with sidebars enabled.',
    'before_widget' => '<aside id="%1$s" class="mg-widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="mg-widget-title">',
    'after_title'   => '</h2>',
) );
