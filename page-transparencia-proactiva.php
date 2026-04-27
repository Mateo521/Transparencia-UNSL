<?php

/**
 * Template Name: Transparencia Proactiva
 */
get_header();
?>

<section class="bg-navy-900 py-16 sm:py-24">
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

        <p class="font-ui text-stone-500 text-xs font-semibold uppercase tracking-[0.16em] mb-8">
            Ejes de Gestión Proactiva
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-6">

            <?php
            // Consultamos todas las páginas que tengan como Padre a "Transparencia Proactiva"
            $apartados = new WP_Query(array(
                'post_type'      => 'page',
                'post_parent'    => get_the_ID(),
                'posts_per_page' => -1,
                'orderby'        => 'title',
                'order'          => 'ASC'
            ));

            if ($apartados->have_posts()) :
                while ($apartados->have_posts()) : $apartados->the_post();
            ?>
                    <a href="<?php the_permalink(); ?>" class="group bg-white border border-stone-200 rounded-lg p-5 flex flex-col justify-between hover:border-navy-400 hover:shadow-md transition-all duration-200 h-full">

                        <div class="flex items-start justify-between mb-4">
                            <div class="bg-stone-100 p-2.5 rounded-md text-navy-700 group-hover:bg-navy-50 group-hover:text-navy-600 transition-colors">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            </div>

                            <svg class="w-5 h-5 text-stone-300 group-hover:text-navy-500 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </div>

                        <h2 class="font-ui font-semibold text-navy-900 group-hover:text-navy-700 transition-colors text-[15px] leading-snug">
                            <?php the_title(); ?>
                        </h2>

                    </a>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p class="text-stone-500 col-span-full">Aún no se han publicado ejes en esta sección.</p>
            <?php endif; ?>

        </div>

        <div class="mt-16 border-t border-stone-200 pt-10 text-center">
            <p class="font-sans text-stone-500 text-sm mb-4">Si desea sugerir la publicación de nuevos conjuntos de datos, puede hacerlo aquí.</p>
            <a href="<?php echo esc_url(home_url('/solicitud-de-informacion')); ?>" class="inline-flex items-center gap-2 bg-navy-900 text-white hover:bg-navy-800 font-ui font-semibold text-sm px-6 py-3 rounded shadow transition-colors duration-150">
                Sugerir Información Pública
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                </svg>
            </a>
        </div>

    </div>
</section>

<?php get_footer(); ?>