<?php

/**
 * Template Name: Transparencia Activa
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
                        <svg class="w-4 h-4 text-navy-100 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3  gap-6">
            <?php
            $config_categorias = [
                'mision-y-vision' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 21a9 9 0 100-18 9 9 0 000 18zm0-14v5l3 2m-3-9h.01" /></svg>',
                    'descripcion' => 'Misión y Visión de la UNSL según el Estatuto de la institución'
                ],
                'servicios-institucionales' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 21h18M5 21V5l7-3 7 3v16M8 8h1m-1 4h1m6-4h1m-1 4h1M9 21v-4h6v4" /></svg>',
                    'descripcion' => 'Detalles de los servicios brindados a la sociedad'
                ],
                'autoridades-y-designaciones' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 13a4 4 0 100-8 4 4 0 000 8zm-7 8a7 7 0 0114 0M19 8v4m-2-2h4" /></svg>',
                    'descripcion' => 'Nómina de autoridades y actos administrativos de designación'
                ],
                'declaraciones-juradas' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 3h8l4 4v14H7a2 2 0 01-2-2V5a2 2 0 012-2zm8 0v5h4M8 13h8m-8 4h6" /></svg>',
                    'descripcion' => 'Declaraciones juradas de las autoridades y personal de la UNSL'
                ],
                'organigrama-y-personal' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3v4m0 0H6v5m6-5h6v5M6 12v5m0 0H3m3 0h3m9-5v5m0 0h-3m3 0h3" /></svg>',
                    'descripcion' => 'Organigrama institucional y nómina de personal'
                ],
                'escalas-salariales' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 19V5m0 14h16M7 16v-4m5 4V8m5 8V5" /></svg>',
                    'descripcion' => 'Escalas salariales del personal docente, nodocente y autoridades de la UNSL'
                ],
                'presupuesto' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>',
                    'descripcion' => 'Información presupuestaria de la UNSL y su ejecución'
                ],
                'compras-y-contrataciones' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>',
                    'descripcion' => 'La UNSL publica las compras de bienes y servicios que realiza a través del Portal de Compras Públicas'
                ],
                'transferencia-de-fondos' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" /></svg>',
                    'descripcion' => 'Información sobre transferencias de fondos asociadas a políticas institucionales'
                ],
                'actos-administrativos' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>',
                    'descripcion' => 'Actos administrativos de la UNSL'
                ],
                'participacion-y-colaboracion' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 10h4.757c1.246 0 2.257 1.01 2.257 2.257V20H5v-7.743C5 11.01 6.01 10 7.243 10H12v-2a2 2 0 114 0v2z" /></svg>',
                    'descripcion' => 'Mecanismos de participación y de vinculación con el medio.'
                ],
                'auditorias-y-evaluaciones' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 3v4a1 1 0 0 1-1 1H5m8 7.5 2.5 2.5M19 4v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Zm-5 9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
</svg>
',
                    'descripcion' => 'Auditorías y Procesos de Autoevaluación y Evaluación Institucional'
                ],
                'gestion-de-la-informacion' => [
                    'color' => 'bg-[#353F67]',
                    'icon' => '<svg     xmlns="http://www.w3.org/2000/svg"   fill="none" viewBox="0 0 24 24">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13v-2a1 1 0 0 0-1-1h-.757l-.707-1.707.535-.536a1 1 0 0 0 0-1.414l-1.414-1.414a1 1 0 0 0-1.414 0l-.536.535L14 4.757V4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v.757l-1.707.707-.536-.535a1 1 0 0 0-1.414 0L4.929 6.343a1 1 0 0 0 0 1.414l.536.536L4.757 10H4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h.757l.707 1.707-.535.536a1 1 0 0 0 0 1.414l1.414 1.414a1 1 0 0 0 1.414 0l.536-.535 1.707.707V20a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-.757l1.707-.708.536.536a1 1 0 0 0 1.414 0l1.414-1.414a1 1 0 0 0 0-1.414l-.535-.536.707-1.707H20a1 1 0 0 0 1-1Z"/>
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
</svg>',
                    'descripcion' => 'Sistemas que optimizan los procesos de gestión institucional'
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
                                echo $config['descripcion'];
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