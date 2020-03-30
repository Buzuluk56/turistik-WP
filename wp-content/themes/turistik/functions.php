<?php

    add_action( 'wp_enqueue_scripts', 'turistikFun');

    function turistikFun()
    {
        // подключаем css и js
        wp_enqueue_style('libs', get_stylesheet_directory_uri() . '/css/libs.min.css', array(), null);
        wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', array(), time());
        wp_enqueue_style('media', get_stylesheet_directory_uri() . '/css/media.css',array(),null);

        wp_enqueue_script('jquery123', 'https://code.jquery.com/jquery-2.2.4.min.js',array(), '2.2.4', true);
        wp_enqueue_style('mailJS', get_stylesheet_directory_uri() . '/js/main.js',array('jquery123'),time(),true);
    }

    register_nav_menus(
        array(
            'topmenu' => 'Верхнее меню',
            'botmenu' => 'Нижнее меню в футере сайта',
        )
    );

    add_theme_support('post-thumbnails');


