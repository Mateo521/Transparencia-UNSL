<?php

/**
 * Template Name: Organigrama y Autoridades
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

                            <a href="<?php echo esc_url(home_url('/transparencia-activa')); ?>" class="hover:text-white transition-colors">Transparencia Activa</a>

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

                Organigrama y Personal

            </h1>

        </div>

    </section>


    <section class="bg-stone-50 py-16 sm:py-20 min-h-[50vh]">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">

            <h2 class="font-display text-2xl font-bold text-navy-900 mb-8 border-b border-stone-200 pb-4">Organigrama</h2>



            <div class="mb-20">
                <div class="bg-white border border-stone-200 rounded-xl p-8 shadow-sm overflow-x-auto">

                    <div class="mb-6 flex justify-start sm:ml-8">
                        <div class="bg-[#353F67] text-white font-display font-bold text-lg px-8 py-3 rounded-lg shadow-sm">
                            Rector
                        </div>
                    </div>


                    <div class="pl-8 sm:pl-16 border-l-2 border-stone-200 space-y-10 ml-6 sm:ml-14">


                        <div class="relative">
                            <div class="absolute -left-8 sm:-left-16 top-4 w-8 sm:w-16 h-0.5 bg-stone-200"></div>
                            <h3 class="font-ui font-bold text-navy-800 uppercase tracking-widest text-sm mb-5 bg-stone-100 border border-stone-200 inline-block px-5 py-2 rounded-full">
                                Unidad de gestión de funciones sustantivas
                            </h3>
                            <ul class="space-y-4 pl-2 sm:pl-6">
                                <li class="font-sans text-stone-800 text-base">
                                    <span class="font-bold mr-1">1.</span> Secretaría Académica, de Innovación Educativa y Posgrado
                                    <ul class="pl-6 mt-3 space-y-2 border-l border-stone-200 ml-2">
                                        <li class="font-sans text-stone-600 text-sm flex items-start sm:items-center before:content-[''] before:w-4 before:h-px before:bg-stone-300 before:mr-3 before:mt-2.5 sm:before:mt-0">
                                            <span class="font-bold mr-1">1.1.</span> Subsecretaría de Formación Preuniversitaria
                                        </li>
                                        <li class="font-sans text-stone-600 text-sm flex items-start sm:items-center before:content-[''] before:w-4 before:h-px before:bg-stone-300 before:mr-3 before:mt-2.5 sm:before:mt-0">
                                            <span class="font-bold mr-1">1.2.</span> Subsecretaría de Formación de Posgrado
                                        </li>
                                    </ul>
                                </li>
                                <li class="font-sans text-stone-800 text-base">
                                    <span class="font-bold mr-1">2.</span> Secretaría de Investigación, Desarrollo e Innovación
                                    <ul class="pl-6 mt-3 space-y-2 border-l border-stone-200 ml-2">
                                        <li class="font-sans text-stone-600 text-sm flex items-start sm:items-center before:content-[''] before:w-4 before:h-px before:bg-stone-300 before:mr-3 before:mt-2.5 sm:before:mt-0">
                                            <span class="font-bold mr-1">2.1.</span> Subsecretaría de Vinculación Territorial
                                        </li>
                                    </ul>
                                </li>
                                <li class="font-sans text-stone-800 text-base">
                                    <span class="font-bold mr-1">3.</span> Secretaría de Extensión Universitaria
                                </li>
                            </ul>
                        </div>


                        <div class="relative">
                            <div class="absolute -left-8 sm:-left-16 top-4 w-8 sm:w-16 h-0.5 bg-stone-200"></div>
                            <h3 class="font-ui font-bold text-navy-800 uppercase tracking-widest text-sm mb-5 bg-stone-100 border border-stone-200 inline-block px-5 py-2 rounded-full">
                                Unidad de gestión política
                            </h3>
                            <ul class="space-y-4 pl-2 sm:pl-6">
                                <li class="font-sans text-stone-800 text-base">
                                    <span class="font-bold mr-1">4.</span> Secretaría General
                                    <ul class="pl-6 mt-3 space-y-2 border-l border-stone-200 ml-2">
                                        <li class="font-sans text-stone-600 text-sm flex items-start sm:items-center before:content-[''] before:w-4 before:h-px before:bg-stone-300 before:mr-3 before:mt-2.5 sm:before:mt-0">
                                            <span class="font-bold mr-1">4.1.</span> Subsecretaría Legal y Técnica
                                        </li>
                                    </ul>
                                </li>
                                <li class="font-sans text-stone-800 text-base">
                                    <span class="font-bold mr-1">5.</span> Secretaría de Relaciones Interinstitucionales
                                </li>
                            </ul>
                        </div>


                        <div class="relative">
                            <div class="absolute -left-8 sm:-left-16 top-4 w-8 sm:w-16 h-0.5 bg-stone-200"></div>
                            <h3 class="font-ui font-bold text-navy-800 uppercase tracking-widest text-sm mb-5 bg-stone-100 border border-stone-200 inline-block px-5 py-2 rounded-full">
                                Unidad de gestión administrativa
                            </h3>
                            <ul class="space-y-4 pl-2 sm:pl-6">
                                <li class="font-sans text-stone-800 text-base">
                                    <span class="font-bold mr-1">6.</span> Secretaría de Asuntos Estudiantiles y Bienestar Universitario
                                    <ul class="pl-6 mt-3 space-y-2 border-l border-stone-200 ml-2">
                                        <li class="font-sans text-stone-600 text-sm flex items-start sm:items-center before:content-[''] before:w-4 before:h-px before:bg-stone-300 before:mr-3 before:mt-2.5 sm:before:mt-0">
                                            <span class="font-bold mr-1">6.1.</span> Subsecretaría de Asuntos Estudiantiles y Bienestar Universitario
                                        </li>
                                    </ul>
                                </li>
                                <li class="font-sans text-stone-800 text-base">
                                    <span class="font-bold mr-1">7.</span> Secretaría de Hacienda, Administración e Infraestructura
                                </li>
                            </ul>
                        </div>


                        <div class="relative">
                            <div class="absolute -left-8 sm:-left-16 top-4 w-8 sm:w-16 h-0.5 bg-stone-200"></div>
                            <h3 class="font-ui font-bold text-navy-800 uppercase tracking-widest text-sm mb-5 bg-stone-100 border border-stone-200 inline-block px-5 py-2 rounded-full">
                                Unidad de gestión operativa
                            </h3>
                            <ul class="space-y-4 pl-2 sm:pl-6">
                                <li class="font-sans text-stone-800 text-base">
                                    <span class="font-bold mr-1">8.</span> Secretaría Privada del Rector
                                </li>
                                <li class="font-sans text-stone-800 text-base">
                                    <span class="font-bold mr-1">9.</span> Secretaría de Logística
                                </li>
                                <li class="font-sans text-stone-800 text-base">
                                    <span class="font-bold mr-1">10.</span> Secretaría de Imagen y Comunicación Institucional
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>


            <div class="mb-20">

                <p class="text-stone-700 py-3">Las ordenanzas y antecedentes que dan sustento normativo a la estructura organizacional de
                    gestión actual son las siguientes:</p>

                <div>

                    <div class="space-y-4">

                        <a href="https://transparencia.unsl.edu.ar/wp-content/uploads/2026/04/OCS27-25-Estructurta-de-Gestion.pdf" target="_blank" class="flex items-center gap-4 p-4 bg-white border border-stone-200 rounded-lg hover:border-red-400 hover:shadow-sm transition-all group">

                            <div class="flex-1">
                                <h3 class="font-ui font-semibold text-navy-900 text-sm group-hover:text-red-700 transition-colors">Estructura de Gestión OCS 27-2025</h3>
                                <p class="font-sans text-xs text-stone-500 mt-0.5">Período 2025-2028</p>
                            </div>
                            <svg class="w-5 h-5 text-stone-300 group-hover:text-red-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                        </a>

                        <a href="https://transparencia.unsl.edu.ar/wp-content/uploads/2026/09/OCS41-2022-Estructura-de-Gestion-de-Rectorado.pdf" target="_blank" class="flex items-center gap-4 p-4 bg-white border border-stone-200 rounded-lg hover:border-red-400 hover:shadow-sm transition-all group">

                            <div class="flex-1">
                                <h3 class="font-ui font-semibold text-navy-900 text-sm group-hover:text-red-700 transition-colors">Estructura de Gestión OCS 41-2022</h3>
                                <p class="font-sans text-xs text-stone-500 mt-0.5">Período 2022-2025</p>
                            </div>
                            <svg class="w-5 h-5 text-stone-300 group-hover:text-red-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                        </a>

                        <a href="https://transparencia.unsl.edu.ar/wp-content/uploads/2026/09/OCS39-2019-Estructura-de-Gestion-de-Rectorado.pdf" target="_blank" class="flex items-center gap-4 p-4 bg-white border border-stone-200 rounded-lg hover:border-red-400 hover:shadow-sm transition-all group">

                            <div class="flex-1">
                                <h3 class="font-ui font-semibold text-navy-900 text-sm group-hover:text-red-700 transition-colors">Estructura de Gestión OCS 39-2019</h3>
                                <p class="font-sans text-xs text-stone-500 mt-0.5">Período 2019-2022</p>
                            </div>
                            <svg class="w-5 h-5 text-stone-300 group-hover:text-red-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                        </a>

                    </div>
                </div>


            </div>


            <div class="mb-20">
                <h2 class="font-display text-2xl font-bold text-navy-900 mb-8 border-b border-stone-200 pb-4">Listado de Personal</h2>

                <div class="space-y-4">

                    <a href="https://transparencia.unsl.edu.ar/wp-content/uploads/2026/04/OCS27-25-Estructurta-de-Gestion.pdf" target="_blank" class="flex items-center gap-4 p-4 bg-white border border-stone-200 rounded-lg hover:border-red-400 hover:shadow-sm transition-all group">

                        <div class="flex-1">
                            <h3 class="font-ui font-semibold text-navy-900 text-sm group-hover:text-red-700 transition-colors">Nómina de Personal</h3>
                            <p class="font-sans text-xs text-stone-500 mt-0.5">Documento PDF</p>
                        </div>
                        <svg class="w-5 h-5 text-stone-300 group-hover:text-red-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                    </a>



                </div>


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