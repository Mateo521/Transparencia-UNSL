<?php
// Configuración básica del tema
function unsl_transparencia_setup() {
    // Soporte para etiquetas de título
    add_theme_support( 'title-tag' );
    
    // Registrar menú de navegación
    register_nav_menus( array(
        'primary' => __( 'Menú Principal', 'unsl-transparencia' ),
    ) );
}
add_action( 'after_setup_theme', 'unsl_transparencia_setup' );

// Encolar estilos y scripts
function unsl_transparencia_scripts() {
    // Si compilas Tailwind localmente, cambia este enlace al style.css compilado.
    // Para desarrollo y visualización rápida, usamos el CDN de Tailwind.
    wp_enqueue_script( 'tailwindcss', 'https://cdn.tailwindcss.com', array(), null, false );
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'unsl_transparencia_scripts' );
?>