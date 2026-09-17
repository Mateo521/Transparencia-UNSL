<?php

/**
 * Template Name: Misión y Visión
 * Template Post Type: page
 */
get_header();
?>

<?php while (have_posts()) : the_post(); ?>

    <section class="relative pt-32 pb-16 sm:pt-40 sm:pb-20 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover object-center" />
            <?php else : ?>
                <img src="http://192.168.103.3/wp-content/themes/Carreras-UNSL/imagenes/carreras.jpg" alt="Fachada UNSL" class="w-full h-full object-cover object-center" onerror="this.src='https://images.unsplash.com/photo-1541339907198-e08756dedf3f?q=80&w=2000&auto=format&fit=crop';" />
            <?php endif; ?>

            <div class="absolute size-full inset-0 bg-[#353F67]/80 mix-blend-multiply"></div>

        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">
            <nav class="flex text-sm font-sans text-navy-300 mb-6 drop-shadow-sm" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-2">
                    <li class="inline-flex items-center">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-white transition-colors">Inicio</a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-navy-100 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            <a href="<?php echo esc_url(home_url('/transparencia-proactiva')); ?>" class="hover:text-white transition-colors">Transparencia Proactiva</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-navy-100 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            <span class="text-white ml-1 font-medium" aria-current="page"><?php the_title(); ?></span>
                        </div>
                    </li>
                </ol>
            </nav>

            <h1 class="font-display text-4xl sm:text-5xl font-bold text-white leading-tight drop-shadow-md">
                Políticas de Integridad
            </h1>
        </div>
    </section>



    <section class="py-12 bg-stone-50 sm:py-10">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">

            <div class="prose prose-stone max-w-none font-sans text-stone-600 text-justify leading-relaxed space-y-5">
                <p>
                    Las políticas de integridad de nuestra institución trascienden la faz estrictamente administrativa: comprenden también el compromiso indeclinable con los derechos humanos, la convivencia democrática y el cuidado integral de las personas.
                </p>
                <p>En este sentido, el conjunto de programas, equipos técnicos y centros que se detallan a continuación constituyen herramientas clave de la gestión ética. Su propósito fundamental es transversalizar la perspectiva de derechos, garantizando un entorno laboral y académico inclusivo, equitativo y libre de todo tipo de violencias, promoviendo el bienestar, la accesibilidad y el desarrollo pleno de cada integrante de nuestra comunidad.
                </p>


            </div>

            <div class="space-y-4 mt-6">

                <a target="_blank" href="https://universidadydiscapacidad.unsl.edu.ar/" class="group flex items-center justify-between bg-[#353F67] text-white rounded-full px-4 py-2 hover:bg-[#232c77] transition-colors shadow-sm w-fit">
                    <span class="font-bold text-base">Programa Universidad y Discapacidad</span>
                    <svg class="w-6 h-6 text-white group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </a>



                <a target="_blank" href="https://pitsa.unsl.edu.ar/" class="group flex items-center justify-between bg-[#353F67] text-white rounded-full px-4 py-2 hover:bg-[#232c77] transition-colors shadow-sm w-fit">
                    <span class="font-bold text-base">Programa Institucional Transdisciplinario Socioambiental (PITSA)</span>
                    <svg class="w-6 h-6 text-white group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </a>



                <a target="_blank" href="http://www.prevencionenadicciones.unsl.edu.ar/" class="group flex items-center justify-between bg-[#353F67] text-white rounded-full px-4 py-2 hover:bg-[#232c77] transition-colors shadow-sm w-fit">
                    <span class="font-bold text-base">Programa Universitario de Prevención de Consumos Problemáticos y Adicciones</span>
                    <svg class="w-6 h-6 text-white group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </a>


                <a target="_blank" href="https://www.unsl.edu.ar/index.php/menu/eti#gsc.tab=0/" class="group flex items-center justify-between bg-[#353F67] text-white rounded-full px-4 py-2 hover:bg-[#232c77] transition-colors shadow-sm w-fit">
                    <span class="font-bold text-base">Equipo Técnico Interdisciplinario</span>
                    <svg class="w-6 h-6 text-white group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </a>


                <a target="_blank" href="https://www.unsl.edu.ar/index.php/menu/institucional/cepev#gsc.tab=0" class="group flex items-center justify-between bg-[#353F67] text-white rounded-full px-4 py-2 hover:bg-[#232c77] transition-colors shadow-sm w-fit">
                    <span class="font-bold text-base">Centro de Prevención y Erradicación de Violencia Laboral</span>
                    <svg class="w-6 h-6 text-white group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>




            <div class="mt-16 py-4 px-3  flex items-center gap-3 text-stone-500 bg-stone-100 ">
                <svg class="w-5 h-5 text-stone-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="font-ui text-sm">
                    Información actualizada a <strong><?php echo get_the_modified_date('F \d\e Y'); ?></strong>.
                </p>
            </div>


        </div>
    </section>


<?php endwhile; ?>

<?php get_footer(); ?>