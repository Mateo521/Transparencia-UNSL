<?php

/**
 * Template Name: Transparencia Activa
 */
get_header();
?>

<section class="bg-navy-900 py-24">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">
        <nav class="flex text-sm font-sans text-navy-300 mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-2">
                <li class="inline-flex items-center">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-white transition-colors">Inicio</a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-navy-500 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
                        </svg>
                        <span class="text-white ml-1 font-medium">Transparencia Activa</span>
                    </div>
                </li>
            </ol>
        </nav>

        <h1 class="font-display text-4xl sm:text-5xl font-bold text-white leading-tight mb-6">
            Transparencia Activa
        </h1>
        <!--div class="w-14 h-[3px] bg-navy-400 mb-8 rounded-full"></div-->

        <div class="font-sans text-navy-200 text-base sm:text-lg max-w-7xl  space-y-5 text-justify">
            <p>
                La Transparencia Activa es la información pública de carácter obligatorio que la Universidad Nacional de San Luis pone a disposición de la ciudadanía de forma completa, actualizada y accesible, sin necesidad de solicitud previa, en cumplimiento con lo establecido por el <a href="https://www.argentina.gob.ar/normativa/nacional/ley-27275-265949" target="_blank" rel="noopener noreferrer" class="text-navy-300 underline underline-offset-2 decoration-navy-500 hover:text-white hover:decoration-navy-300 transition-colors">Artículo 32 de la Ley Nacional N° 27.275</a> de Acceso a la Información Pública.
            </p>
            <p>
                En esta sección, la institución cumple con su deber legal de publicar, en formatos abiertos, datos sobre su gestión institucional, estructuras orgánicas y funcionales, presupuestos, nóminas, contrataciones y normativas vigentes, de manera clara, estructurada y entendible, procurando remover toda barrera que obstaculice o dificulte su reutilización por parte de terceros.
            </p>
            <p>
                Su objetivo es garantizar el efectivo ejercicio del derecho de acceso a la información pública, promover la participación ciudadana y fortalecer la transparencia en la gestión, permitiendo a la ciudadanía conocer el funcionamiento de la Universidad de forma sistemática como base para el control y la rendición de cuentas institucional.
            </p>
        </div>
    </div>
</section>

<section class="bg-stone-50 py-16 sm:py-24">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

            <?php

            $config_categorias = [
                'mision-y-vision' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>'
                ],
                'servicios-institucionales' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>'
                ],
                'autoridades-y-designaciones' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>'
                ],
                'declaraciones-juradas' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>'
                ],
                'organigrama-y-personal' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7" /></svg>'
                ],
                'escalas-salariales' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>'
                ],
                'presupuesto' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>'
                ],
                'compras-y-contrataciones' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>'
                ],
                'transferencia-de-fondos' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" /></svg>'
                ],
                'actos-administrativos' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>'
                ],
                'participacion-y-colaboracion' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 10h4.757c1.246 0 2.257 1.01 2.257 2.257V20H5v-7.743C5 11.01 6.01 10 7.243 10H12v-2a2 2 0 114 0v2z" /></svg>'
                ],
                'default' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>'
                ]
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


                        <div class="<?php echo $config['color']; ?> p-5 flex items-center gap-4 text-white">
                            <div class="flex-shrink-0 p-2.5  rounded-lg  ">
                                <div class="w-6 h-6">
                                    <?php echo $config['icon']; ?>
                                </div>
                            </div>
                            <h2 class="font-display font-bold text-[15px] leading-tight pt-1">
                                <?php the_title(); ?>
                            </h2>
                        </div>

                        <div class="p-5 flex-grow flex flex-col bg-[#EAF5FB] justify-between">
                            <!--p class="text-stone-500 text-[14px] leading-relaxed line-clamp-3 mb-4">
                                <?php

                                echo get_the_excerpt() ? get_the_excerpt() : 'Información y normativa detallada sobre ' . mb_strtolower(get_the_title()) . '.';
                                ?>
                            </p-->


                            <!--div class="flex items-center text-[11px] font-bold uppercase tracking-widest text-[#353F67] group-hover:translate-x-1 transition-transform">
                                Ver más
                                <svg class="w-4 h-4 ml-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </div-->
                        </div>
                    </a>
            <?php
                endwhile;
                wp_reset_postdata();
            endif; ?>

        </div>

        <div class="mt-16 border-t border-stone-200 pt-10 text-center">
            <p class="font-sans text-stone-500 text-sm mb-4">¿No encuentra la información que busca en estas categorías?</p>
            <a href="<?php echo esc_url(home_url('/solicitud-de-informacion')); ?>" class="inline-flex items-center gap-2 bg-navy-900 text-white hover:bg-navy-800 font-ui font-semibold text-sm px-6 py-3 rounded shadow transition-colors duration-150">
                Realizar Solicitud de Información
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                </svg>
            </a>
        </div>

    </div>
</section>

<?php get_footer(); ?>