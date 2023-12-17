<?php
add_action('after_setup_theme', 'blankslate_setup');
function blankslate_setup()
{
    add_theme_support('post-thumbnails');

    register_nav_menus(
        array('main-menu' => 'Main menu',
            'category-menu' => 'Category menu',
            'footer-menu' => 'Footer menu'

        ));
}
