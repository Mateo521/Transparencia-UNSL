<?php

/**
 * Template Name: Transparencia Proactiva
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
            <p>La transparencia proactiva se entiende como una práctica institucional que va más allá de las obligaciones mínimas de publicación establecidas por la normativa. Implica la generación deliberada de información pública, construida en diálogo con actores relevantes de la sociedad, anticipando sus demandas y estructurando los datos en formatos accesibles y comprensibles. <br> En el proyecto Universidad Abierta, se expresa en la conformación de la Red Universidad Abierta, concebida como un espacio multisectorial de cocreación de la política de transparencia, donde participan organizaciones de reconocida trayectoria en acceso a la información y datos abiertos. Este enfoque reconoce que la legitimidad y eficacia de la apertura institucional depende, en gran medida, del diálogo sostenido con los usuarios de la información. Los acuerdos logrados en este espacio generan la disponibilidad de la información compartida en esta sección, que dada su naturaleza, se encuentra en permantente crecimiento.</p>
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