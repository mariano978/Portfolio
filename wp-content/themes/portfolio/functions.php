<?php

function portfolio_setup()
{
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
}
add_action("after_setup_theme", "portfolio_setup");

function portfolio_menus()
{
    register_nav_menus([
        "menu-principal" => __("Menu principal", "portfolio"),

    ]);
}
add_action("init", "portfolio_menus");

function portfolio_scripts_styles()
{   //css
    wp_enqueue_style("normalize", "https://necolas.github.io/normalize.css/8.0.1/normalize.css", [], "8.0.1");
    wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css", [], "1.0.0");
    wp_enqueue_style("style", get_stylesheet_uri(), ["normalize"], "1.0.0");

    //js
    wp_enqueue_script("index", get_template_directory_uri() . '/js/index.min.js', [], "1.0.0", true);
}
add_action("wp_enqueue_scripts", "portfolio_scripts_styles");
