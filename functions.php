<?php

    function init_template(){

        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        register_nav_menus( array('top_menu' => 'Descripción del menu principal') );

    }
add_action('after_setup_theme','init_template');

function AssetsJavaScript(){
    wp_enqueue_style( "LocalStyles", get_stylesheet_directory_uri() . "/style.css", "", "1.0", "all");
    wp_enqueue_script("LocalJS", get_stylesheet_directory_uri() . "/main.js" ,"","1.0","all");
};
add_action("wp_enqueue_scripts","AssetsJavaScript");

function futuros(){ //header function
    ?>
    <ul>
        <li><a href="#">Tablas Completas</a></li>
        <li><a href="#">Ruedas</a></li>
        <li><a href="#">Lijas</a></li>
        <li><a href="#">Pernos</a></li>
        <li><a href="#">Tablas</a></li>
        <li><a href="#">Trucks</a></li>
        <li><a href="#">Rodamientos</a></li>
        <li><a href="#">Equipos de Protección</a></li>
    </ul>
    <?php
}
add_action("futurosPost","futuros");

function MyFooter(){
    ?>
        <footer>
            <h1>This is my footer</h1>
            <p>Somos una Luz que los caminos ocultos de tu mente aclaran</p>
        </footer>
    <?php
}
add_action( "wp_footer","MyFooter",100);