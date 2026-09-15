<?php



function mi_script_header()
{

    wp_enqueue_script(
        'mi-script-a11y',
        get_template_directory_uri() . '/assets/a11y-toolbar-master/js/a11y-custom.js',
        array(),
        null,
        true
    );


    wp_localize_script('mi-script-a11y', 'miThemeData', array(
        'imgAccesibilidad' => get_template_directory_uri() . '/assets/a11y-toolbar-master/img/accesibilidad-blanco.png'
    ));
}
add_action('wp_enqueue_scripts', 'mi_script_header');
add_action('wp_enqueue_scripts', 'mi_script_header');

function unsl_transparencia_setup()
{

    add_theme_support('title-tag');


    register_nav_menus(array(
        'primary' => __('Menú Principal', 'unsl-transparencia'),
    ));
}
add_action('after_setup_theme', 'unsl_transparencia_setup');

function unsl_transparencia_scripts()
{

    wp_enqueue_style('main-style', get_stylesheet_uri());

    wp_enqueue_style(
        'tailwind-style',
        get_template_directory_uri() . '/assets/css/output.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/output.css')
    );
}
add_action('wp_enqueue_scripts', 'unsl_transparencia_scripts');


class Tailwind_Nav_Walker extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $classes = 'absolute left-0 top-full mt-2 w-64 bg-white border border-stone-200 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 translate-y-2 transition-all duration-300 z-50 md:block hidden mobile-submenu';

        if ($depth >= 1) {
            $classes = 'absolute left-full top-0 ml-1 w-64 bg-white border border-stone-200 rounded-md shadow-lg opacity-0 invisible group-hover/sub:opacity-100 group-hover/sub:visible group-hover/sub:translate-x-0 -translate-x-2 transition-all duration-300 z-50 md:block hidden mobile-submenu';
        }

        $output .= "\n$indent<ul class=\"$classes py-2\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes);

        $li_classes = 'relative mobile-menu-item';
        if ($depth == 0) {
            $li_classes .= ' group';
        } else {
            $li_classes .= ' group/sub';
        }

        $output .= $indent . '<li class="' . $li_classes . '">';

        $atts = array();
        $atts['title']  = ! empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = ! empty($item->target)     ? $item->target     : '';
        $atts['rel']    = ! empty($item->xfn)        ? $item->xfn        : '';
        $atts['href']   = ! empty($item->url)        ? $item->url        : '';

        $a_classes = 'flex items-center justify-between transition-colors duration-200 w-full';
        if ($depth == 0) {
            $a_classes .= ' py-3 md:py-2 font-sans font-semibold text-base md:text-sm border-b md:border-none border-stone-100 mobile-main-link';
        } else {
            $a_classes .= ' px-4 py-3 md:py-2 font-sans text-sm md:text-sm text-stone-600 hover:text-navy-600 md:hover:bg-stone-50 border-b md:border-none border-stone-100 pl-8 md:pl-4';
        }

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (! empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);

        $item_output = $args->before;
        $item_output .= '<a class="' . $a_classes . '"' . $attributes . '>';


        $item_output .= '<span class="flex-1">' . $args->link_before . $title . $args->link_after . '</span>';

        if ($has_children) {

            if ($depth == 0) {
                $item_output .= '<span class="mobile-toggle-trigger p-3 -mr-3 md:p-0 md:mr-0 ml-1 cursor-pointer md:cursor-auto flex items-center justify-center">';
                $item_output .= '<svg class="dropdown-icon w-4 h-4 opacity-70 transition-transform duration-300 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>';
                $item_output .= '</span>';
            } else {
                $item_output .= '<span class="mobile-toggle-trigger p-3 -mr-3 md:p-0 md:mr-0 ml-1 cursor-pointer md:cursor-auto flex items-center justify-center">';
                $item_output .= '<svg class="dropdown-icon w-4 h-4 opacity-70 transition-transform duration-300 transform md:-rotate-90" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>';
                $item_output .= '</span>';
            }
        }

        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}




function shortcode_grafico_presupuesto()
{
    ob_start(); ?>

    <div class="max-w-3xl  my-12 bg-white p-6 rounded-lg shadow-sm border border-stone-200">
        <h3 class="text-xl font-bold text-slate-800 mb-4 text-justify">Ejecución del Gasto por Fuente y por Inciso (1° Semestre 2026)</h3>
        <canvas id="graficoPresupuesto"></canvas>
        <p class="text-xs text-stone-500 mt-4">* Fuente SIU Pilagá - Ejecución Presupuestaria del Devengado al 30-06-2026</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const ctx = document.getElementById('graficoPresupuesto').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Inciso 1', 'Inciso 2', 'Inciso 3', 'Inciso 4', 'Inciso 5'],
                    datasets: [{
                            label: 'Fuente 11',
                            data: [47135434084.87, 74808779.56, 844669877.21, 21454729.83, 85870146.44],
                            backgroundColor: 'rgba(53, 63, 103, 0.8)'
                        },
                        {
                            label: 'Fuente 12',
                            data: [0, 435717889.58, 306777168.93, 241077582.57, 332336913.67],
                            backgroundColor: 'rgba(37, 99, 235, 0.8)'
                        },
                        {
                            label: 'Fuente 15',
                            data: [0, 0, 15582.62, 0, 0],
                            backgroundColor: 'rgba(16, 185, 129, 0.8)'
                        },
                        {
                            label: 'Fuente 16',
                            data: [5412347.71, 182238706.29, 277599597.10, 637311263.69, 319343645.79],
                            backgroundColor: 'rgba(245, 158, 11, 0.8)'
                        }
                    ]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            stacked: true
                        },
                        y: {
                            stacked: true,
                            ticks: {
                                callback: function(value) {
                                    return '$' + (value / 1000000).toLocaleString('es-AR') + ' M';
                                }
                            }
                        }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.dataset.label + ': ' + new Intl.NumberFormat('es-AR', {
                                        style: 'currency',
                                        currency: 'ARS'
                                    }).format(context.raw);
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>

<?php
    return ob_get_clean();
}
add_shortcode('grafico_presupuesto', 'shortcode_grafico_presupuesto');
 