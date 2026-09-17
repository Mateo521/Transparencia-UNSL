<?php

/**
 * Template Name: Transparencia Proactiva
 */
get_header();
?>

<section class="bg-[#353F67] py-24">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">
        <nav class="flex text-sm font-sans text-navy-300 mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-2">
                <li class="inline-flex items-center">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-white transition-colors">Inicio</a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-navy-500 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <span class="text-white ml-1 font-medium">Transparencia Proactiva</span>
                    </div>
                </li>
            </ol>
        </nav>

        <h1 class="font-display text-4xl sm:text-5xl font-bold text-white leading-tight mb-6">
            Transparencia Proactiva
        </h1>
        <!--div class="w-14 h-[3px] bg-navy-400 mb-8 rounded-full"></div-->

        <div class="font-sans text-navy-200 text-base sm:text-lg max-w-7xl  space-y-5 text-justify">
            <p>La transparencia proactiva se entiende como una práctica institucional que va más allá de las obligaciones mínimas de publicación establecidas por la normativa. Implica la generación deliberada de información pública, construida en diálogo con actores relevantes de la sociedad, anticipando sus demandas y estructurando los datos en formatos accesibles y comprensibles.</p>
        </div>
    </div>
</section>

<section class="bg-stone-50 py-16 sm:py-24">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $config_categorias = [
                'planificacion-y-metas' => [
                    'color' => 'bg-[#353F67]',
                    'description' => 'Plan de Desarrollo Institucional de la UNSL.',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>'
                ],
                'formas-de-gobierno' => [
                    'color' => 'bg-[#353F67]',
                    'description' => 'Detalle de la forma de gobierno de la UNSL.',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>'
                ],
                'politicas-de-integridad' => [
                    'color' => 'bg-[#353F67]',
                    'description' => 'Mecanismos y programas que conforman la política de integridad de la comunidad UNSL.',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>'
                ],
                'normativas-y-actos-administrativos' => [
                    'color' => 'bg-[#353F67]',
                    'description' => 'Normativa sobre Transparencia, textos normativos y actos administrativos de la UNSL.',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>'
                ],
                'informes-de-gestion' => [
                    'color' => 'bg-[#353F67]',
                    'description' => 'Informes de gestiones rectorales.',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7" /></svg>'
                ],
                'produccion-editorial-y-bibliotecas' => [
                    'color' => 'bg-[#353F67]',
                    'description' => 'Difusión de producción académica y científica y red de bibliotecas.',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>'
                ],
            ];

            $apartados = new WP_Query(array(
                'post_type'      => 'page',
                'post_parent'    => get_the_ID(),
                'posts_per_page' => -1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC'
            ));

            if ($apartados->have_posts()) :
                while ($apartados->have_posts()) : $apartados->the_post();
                    $slug = get_post_field('post_name', get_the_ID());
                    $config = isset($config_categorias[$slug]) ? $config_categorias[$slug] : $config_categorias['default'];
            ?>
                    <a href="<?php the_permalink(); ?>" class="group flex flex-col overflow-hidden rounded-t-2xl rounded-b-lg bg-white border border-stone-200 shadow-sm hover:shadow-xl  transition-all duration-300">
                        <div class="<?php echo $config['color']; ?> p-3 flex items-center gap-4 text-white">
                            <div class="flex-shrink-0  rounded-lg  "> <!--- p-2.5 -->
                                <div class="w-8 h-8">
                                    <?php echo $config['icon']; ?>
                                </div>
                            </div>
                            <h2 class="font-display font-bold text-[15px] leading-tight pt-1">
                                <?php the_title(); ?>
                            </h2>
                        </div>
                        <div class="px-15 py-6 flex-grow flex flex-col bg-[#EAF5FB] justify-between">
                            <p class="text-stone-500 text-[14px] leading-relaxed line-clamp-3 mb-4">
                                <?php
                                echo $config['description'];
                                ?>
                            </p>
                        </div>
                    </a>
            <?php
                endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
        <div class="mt-16 border-t border-stone-200 pt-10 text-center">
            <p class="font-sans text-stone-500 text-sm mb-4">¿No encuentra la información que busca en estas categorías?</p>
            <a href="<?php echo esc_url(home_url('/solicitud-de-informacion')); ?>" class="inline-flex items-center gap-2 bg-[#353F67] text-white hover:bg-navy-800 font-ui font-semibold text-sm px-6 py-3 rounded shadow transition-colors duration-150">
                Realizar Solicitud de Información
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
