<?php

/**
 * Simulador Salarial UNSL — registro de assets, shortcode y render.
 *
 * Los montos NO se editan acá: viven en inc/data/salarios-unsl.php
 *
 * Dos formas de usarlo:
 *   1. Desde un template PHP:  <?php echo unsl_simulador_render(); ?>
 *   2. Desde el editor:        [simulador_salarial]
 *
 * @package Transparencia_UNSL
 */

defined('ABSPATH') || exit;

/**
 * Templates de página que muestran el simulador sin usar el shortcode.
 * Si se agrega el simulador a otro template, sumarlo a esta lista para que
 * el CSS se cargue en el <head> y no en el footer.
 */
function unsl_simulador_templates()
{
    return apply_filters('unsl_simulador_templates', ['page-mision-y-vision.php']);
}

/**
 * Devuelve la configuración de montos. Se lee del disco una sola vez por request.
 *
 * @return array
 */
function unsl_simulador_config()
{
    static $config = null;

    if (null === $config) {
        $config = require get_template_directory() . '/inc/data/salarios-unsl.php';
    }

    return $config;
}

/**
 * Registra CSS y JS. No los encola: eso lo decide unsl_simulador_enqueue().
 */
function unsl_simulador_register_assets()
{
    $dir = get_template_directory();
    $uri = get_template_directory_uri();

    $css = '/assets/css/simulador-salarial.css';
    $js  = '/assets/js/simulador-salarial.js';

    wp_register_style(
        'unsl-simulador',
        $uri . $css,
        ['tailwind-style'],
        file_exists($dir . $css) ? filemtime($dir . $css) : null
    );

    wp_register_script(
        'unsl-simulador',
        $uri . $js,
        [],
        file_exists($dir . $js) ? filemtime($dir . $js) : null,
        true
    );
}

/**
 * Encola los assets y adjunta la configuración de montos.
 *
 * Es idempotente: se puede llamar varias veces sin duplicar nada.
 */
function unsl_simulador_enqueue()
{
    if (wp_script_is('unsl-simulador', 'enqueued')) {
        return;
    }

    wp_enqueue_style('unsl-simulador');
    wp_enqueue_script('unsl-simulador');

    /*
     * IMPORTANTE: no usar wp_localize_script() acá.
     * Esa función convierte TODOS los valores a string, y el JS suma importes
     * con reduce(): con strings concatenaría en lugar de sumar y los totales
     * saldrían mal. wp_json_encode() preserva los tipos numéricos.
     */
    wp_add_inline_script(
        'unsl-simulador',
        'window.UNSL_SIMULADOR = ' . wp_json_encode(unsl_simulador_config()) . ';',
        'before'
    );
}

/**
 * Encola los assets temprano cuando la página los va a necesitar, para que el
 * CSS salga por el <head> y no haya un flash de contenido sin estilo.
 */
function unsl_simulador_maybe_enqueue()
{
    unsl_simulador_register_assets();

    if (! is_singular()) {
        return;
    }

    $post = get_post();

    // Vía A: un template lo renderiza directo.
    // Vía B: el shortcode está escrito en el contenido de la página.
    if (is_page_template(unsl_simulador_templates())
        || ($post && has_shortcode($post->post_content, 'simulador_salarial'))
    ) {
        unsl_simulador_enqueue();
    }
}
// Prioridad 20: 'tailwind-style' se registra en unsl_transparencia_scripts() con la
// prioridad 10 por defecto, y el CSS del simulador depende de ese handle.
add_action('wp_enqueue_scripts', 'unsl_simulador_maybe_enqueue', 20);

/**
 * Devuelve el HTML del simulador.
 *
 * @return string
 */
function unsl_simulador_render()
{
    // Fallback: cubre widgets u otros templates no listados en
    // unsl_simulador_templates(). Si ya se encoló, no hace nada.
    unsl_simulador_enqueue();

    ob_start();
    get_template_part('template-parts/simulador-salarial');

    return ob_get_clean();
}
add_shortcode('simulador_salarial', 'unsl_simulador_render');
