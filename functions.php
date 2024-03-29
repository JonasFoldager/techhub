<?php
function hotelcms_register_css() {
    wp_enqueue_style("theme-css", get_stylesheet_directory_uri() . "/style.css");
    wp_enqueue_style("bootstrap-css", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");
    wp_enqueue_style("lightbox", get_stylesheet_directory_uri() . "/lightbox/css/lightbox.min.css");
    wp_enqueue_script("lightbox", get_stylesheet_directory_uri() . "/lightbox/js/lightbox-plus-jquery.min.js", null, null, true);
    wp_enqueue_script("bootstrap-js", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", null, null, true);
}
add_action("wp_enqueue_scripts", "hotelcms_register_css");

function hotelcms_register_menu() {
    register_nav_menu("techhub_green", "techhub_reen");
}
add_action("after_setup_theme", "hotelcms_register_menu");

function footermenu_register_menu() {
    register_nav_menu("footermenu", "footermenu");
}
add_action("after_setup_theme", "footermenu_register_menu");



