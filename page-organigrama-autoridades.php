<?php

/**
 * Template Name: Organigrama y Autoridades
 * Template Post Type: page
 */
get_header();
?>

<?php while (have_posts()) : the_post(); ?>

    <section class="bg-navy-900 py-12 sm:py-16">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">
            <nav class="flex text-sm font-sans text-navy-300 mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-2">
                    <li class="inline-flex items-center">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-white transition-colors">Inicio</a>
                    </li>
                    <?php
                    $parent_id = wp_get_post_parent_id(get_the_ID());
                    if ($parent_id) : ?>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-navy-500 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                <a href="<?php echo esc_url(get_permalink($parent_id)); ?>" class="hover:text-white transition-colors">
                                    <?php echo get_the_title($parent_id); ?>
                                </a>
                            </div>
                        </li>
                    <?php endif; ?>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-navy-500 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            <span class="text-white ml-1 font-medium" aria-current="page">Organigrama, autoridades y personal</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <h1 class="font-display text-3xl sm:text-4xl font-bold text-white leading-tight">
                Organigrama, autoridades y personal
            </h1>
        </div>
    </section>

    <section class="bg-stone-50 py-16 sm:py-20 min-h-[50vh]">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">


            <div class="mb-16">
                <h2 class="font-display text-2xl font-bold text-navy-900 mb-8 border-b border-stone-200 pb-4">Autoridades de la UNSL (Período 2025-2028)</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    <div class="bg-white border border-stone-200  p-6 sm:p-8 flex flex-col sm:flex-row items-center sm:items-start gap-6 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-36 h-36 bg-stone-100 rounded-full flex items-center justify-center border-4 border-white shadow-sm flex-shrink-0 overflow-hidden">
                            <img class="size-full" src="https://transparencia.unsl.edu.ar/wp-content/uploads/2026/04/brusasca.png" alt="">
                        </div>
                        <div class="text-center sm:text-left flex-1">
                            <h3 class="font-display text-xl font-bold text-navy-900">Dr. Raúl Andrés Gil</h3>
                            <p class="font-sans text-stone-500 font-medium mb-4">Rector de la Universidad Nacional de San Luis</p>
                            <a href="https://transparencia.unsl.edu.ar/wp-content/uploads/2026/04/RR1506-2025.pdf" target="_blank" class="inline-flex items-center gap-1.5 text-xs font-ui font-semibold text-navy-600 bg-navy-50 hover:bg-navy-100 px-3 py-1.5 rounded transition-colors uppercase tracking-wide">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                Ver Designación
                            </a>
                        </div>
                    </div>
                    <div class="bg-white border border-stone-200  p-6 sm:p-8 flex flex-col sm:flex-row items-center sm:items-start gap-6 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-36 h-36 bg-stone-100 rounded-full flex items-center justify-center border-4 border-white shadow-sm flex-shrink-0 overflow-hidden">
                            <img class="size-full" src="https://transparencia.unsl.edu.ar/wp-content/uploads/2026/04/gil.png" alt="">
                        </div>
                        <div class="text-center sm:text-left flex-1">
                            <h3 class="font-display text-xl font-bold text-navy-900">Mgtr. María Claudia Brusasca</h3>
                            <p class="font-sans text-stone-500 font-medium mb-4">Vicerrectora de la Universidad Nacional de San Luis</p>
                            <a href="https://transparencia.unsl.edu.ar/wp-content/uploads/2026/04/RR1507-2025.pdf" target="_blank" class="inline-flex items-center gap-1.5 text-xs font-ui font-semibold text-navy-600 bg-navy-50 hover:bg-navy-100 px-3 py-1.5 rounded transition-colors uppercase tracking-wide">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                Ver Designación
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mb-20">
                <h2 class="font-display text-2xl font-bold text-navy-900 mb-8 border-b border-stone-200 pb-4">Organigrama</h2>

                <div class="bg-white border border-stone-200 rounded-xl p-8 shadow-sm overflow-x-auto">

                    <div class="mb-6 flex justify-start sm:ml-8">
                        <div class="bg-navy-900 text-white font-display font-bold text-lg px-8 py-3 rounded-lg shadow-sm">
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


            <div class="mb-16">
                <div class="flex items-center justify-between mb-8 border-b border-stone-200 pb-4">
                    <h2 class="font-display text-2xl font-bold text-navy-900">Secretarías de Rectorado UNSL</h2>
                    <a href="https://www.unsl.edu.ar/index.php/menu/institucional/secretarias#gsc.tab=0" target="_blank" class="hidden sm:inline-flex text-sm text-navy-600 hover:text-navy-800 font-medium transition-colors">
                        Ver página institucional →
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

                    <?php

                    $secretarias = [
                        ['cargo' => 'Secretaría General', 'nombre' => 'Lic. Emiliano Daniel MUCH GHIGLIONE', 'link' => 'https://transparencia.unsl.edu.ar/wp-content/uploads/2026/04/RR1508-2025.pdf'],
                        ['cargo' => 'Subsecretaría Legal y Técnica', 'nombre' => 'Abg. Ivana Romina MUZEVICH', 'link' => 'https://transparencia.unsl.edu.ar/wp-content/uploads/2026/04/RR1517-2025.pdf'],
                        ['cargo' => 'Secretaría Académica, de Innovación Educativa y Posgrado', 'nombre' => 'Dra. Rosa Alejandra LORENZO', 'link' => 'https://transparencia.unsl.edu.ar/wp-content/uploads/2026/04/RR1548-2025.pdf'],
                        ['cargo' => 'Subsecretaría de Formación Preuniversitaria', 'nombre' => 'Mgtr. Guido FERNANDEZ MARINONE', 'link' => 'https://transparencia.unsl.edu.ar/wp-content/uploads/2026/04/RR1519-2025.pdf'],
                        ['cargo' => 'Subsecretaría de Formación de Posgrado', 'nombre' => 'Dra. Marina Beatriz FANTIN', 'link' => 'https://transparencia.unsl.edu.ar/wp-content/uploads/2026/04/RR1523-2025.pdf'],
                        ['cargo' => 'Secretaría de Investigación, Desarrollo e innovación', 'nombre' => 'Dr. Fabricio Damián CID', 'link' => 'https://transparencia.unsl.edu.ar/wp-content/uploads/2026/04/RR1518-2025.pdf'],
                        ['cargo' => 'Subsecretaría de Vinculación Territorial', 'nombre' => 'Dr. César Américo ALMEIDA', 'link' => 'https://transparencia.unsl.edu.ar/wp-content/uploads/2026/04/RR1521-2025.pdf'],
                        ['cargo' => 'Secretaría de Extensión Universitaria', 'nombre' => 'Esp. Oscar Ramón OJEDA', 'link' => 'https://transparencia.unsl.edu.ar/wp-content/uploads/2026/04/RR1516-2025.pdf'],
                        ['cargo' => 'Secretaría de Hacienda, Administración e Infraestructura', 'nombre' => 'C.P.N. María Alejandra ORELLANO', 'link' => 'https://transparencia.unsl.edu.ar/wp-content/uploads/2026/04/RR1514-2025.pdf'],
                        ['cargo' => 'Secretaría Privada del Rector', 'nombre' => 'Esp. René César COVEPERTHWAITE', 'link' => 'https://transparencia.unsl.edu.ar/wp-content/uploads/2026/04/RR1530-2025.pdf'],
                        ['cargo' => 'Secretaría de Asuntos Estudiantiles y Bienestar Universitario', 'nombre' => 'Prof. Rodolfo Nahuel SIRUR FLORES', 'link' => 'https://transparencia.unsl.edu.ar/wp-content/uploads/2026/04/RR1526-2025.pdf'],
                        ['cargo' => 'Subsecretaría de Asuntos Estudiantiles y Bienestar Universitario', 'nombre' => 'Ing. Nicolás Ariel RAMOS', 'link' => 'https://transparencia.unsl.edu.ar/wp-content/uploads/2026/04/RR1529-2025.pdf'],
                        ['cargo' => 'Secretaría de Relaciones Interinstitucionales', 'nombre' => 'Dr. Félix Daniel NIETO QUINTAS', 'link' => 'https://transparencia.unsl.edu.ar/wp-content/uploads/2026/04/RR1524-2025.pdf'],
                        ['cargo' => 'Secretaría de Imagen y Comunicación Institucional', 'nombre' => 'Téc. Ramiro Gabriel REZZANO KLEMENT', 'link' => 'https://transparencia.unsl.edu.ar/wp-content/uploads/2026/04/RR1522-2025.pdf'],
                        ['cargo' => 'Secretaría de Logística', 'nombre' => 'Esp. Luis Ernesto GONZÁLEZ CRISTÓFANO', 'link' => 'https://transparencia.unsl.edu.ar/wp-content/uploads/2026/04/RR1527-2025.pdf'],
                    ];

                    foreach ($secretarias as $sec) :
                    ?>

                        <a href="<?php echo esc_url($sec['link']); ?>" target="_blank" class="group block bg-white p-5 rounded border border-transparent shadow-sm hover:shadow-md hover:border-navy-300 transition-all relative flex flex-col justify-between h-full">
                            <div>
                                <p class="font-ui text-[11px] font-bold text-stone-400 uppercase tracking-wider mb-1.5 leading-tight"><?php echo $sec['cargo']; ?></p>
                                <p class="font-sans text-navy-900 font-medium text-[15px] group-hover:text-navy-700 transition-colors"><?php echo $sec['nombre']; ?></p>
                            </div>

                            <div class="mt-4 flex items-center gap-1.5 text-xs font-ui font-semibold text-navy-500 opacity-0 group-hover:opacity-100 transition-opacity uppercase tracking-wide">
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                Ver Designación
                            </div>
                        </a>
                    <?php endforeach; ?>

                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                <div>
                    <h2 class="font-display text-xl font-bold text-navy-900 mb-6 border-b border-stone-200 pb-3">Estructura y normativa</h2>
                    <div class="space-y-4">

                        <a href="http://www.secgral.unsl.edu.ar/wp-content/uploads/docs/OCS%2027-25%20ESTRUCTURA%20DE%20GESTION.pdf" target="_blank" class="flex items-center gap-4 p-4 bg-white border border-stone-200 rounded-lg hover:border-red-400 hover:shadow-sm transition-all group">

                            <div class="flex-1">
                                <h3 class="font-ui font-semibold text-navy-900 text-sm group-hover:text-red-700 transition-colors">Estructura de Gestión OCS 27-25</h3>
                                <p class="font-sans text-xs text-stone-500 mt-0.5">Documento PDF</p>
                            </div>
                            <svg class="w-5 h-5 text-stone-300 group-hover:text-red-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                        </a>

                        <a href="http://www.secgral.unsl.edu.ar/wp-content/uploads/docs/OR%2017-22%20ESTRUCTURA%20ADMINISTRATIVA.pdf" target="_blank" class="flex items-center gap-4 p-4 bg-white border border-stone-200 rounded-lg hover:border-red-400 hover:shadow-sm transition-all group">

                            <div class="flex-1">
                                <h3 class="font-ui font-semibold text-navy-900 text-sm group-hover:text-red-700 transition-colors">Estructura Administrativa OR 17-22</h3>
                                <p class="font-sans text-xs text-stone-500 mt-0.5">Documento PDF</p>
                            </div>
                            <svg class="w-5 h-5 text-stone-300 group-hover:text-red-500 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                        </a>

                    </div>
                </div>

                <div>
                    <h2 class="font-display text-xl font-bold text-navy-900 mb-6 border-b border-stone-200 pb-3">Sitios relacionados</h2>
                    <div class="space-y-4">

                        <a href="https://www.unsl.edu.ar/index.php/menu/institucional/consejo_superior#gsc.tab=0" target="_blank" class="flex items-center gap-4 p-4 bg-white border border-stone-200 rounded-lg hover:border-navy-400 hover:shadow-sm transition-all group">

                            <div class="flex-1">
                                <h3 class="font-ui font-semibold text-navy-900 text-sm group-hover:text-navy-700 transition-colors">Integrantes del Consejo Superior</h3>
                                <p class="font-sans text-xs text-stone-500 mt-0.5">Período 2025-2028</p>
                            </div>
                            <svg class="w-5 h-5 text-stone-300 group-hover:text-navy-500 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>

                        <a href="https://www.unsl.edu.ar/index.php/menu/institucional/autoridades#gsc.tab=0" target="_blank" class="flex items-center gap-4 p-4 bg-white border border-stone-200 rounded-lg hover:border-navy-400 hover:shadow-sm transition-all group">

                            <div class="flex-1">
                                <h3 class="font-ui font-semibold text-navy-900 text-sm group-hover:text-navy-700 transition-colors">Nómina completa de Autoridades</h3>
                                <p class="font-sans text-xs text-stone-500 mt-0.5">Portal Institucional UNSL</p>
                            </div>
                            <svg class="w-5 h-5 text-stone-300 group-hover:text-navy-500 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>

                    </div>
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