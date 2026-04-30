<?php

/**
 * Template Name: Misión y Servicios
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

            <div class="absolute size-full inset-0 bg-navy-950/80 mix-blend-multiply"></div>

        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">
            <nav class="flex text-sm font-sans text-navy-300 mb-6 drop-shadow-sm" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-2">
                    <li class="inline-flex items-center">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-white transition-colors">Inicio</a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-navy-500 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            <a href="<?php echo esc_url(home_url('/transparencia-activa')); ?>" class="hover:text-white transition-colors">Transparencia Activa</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-navy-500 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            <span class="text-white ml-1 font-medium" aria-current="page"><?php the_title(); ?></span>
                        </div>
                    </li>
                </ol>
            </nav>

            <h1 class="font-display text-4xl sm:text-5xl font-bold text-white leading-tight drop-shadow-md">
                Misión y Servicios a la Ciudadanía
            </h1>
        </div>
    </section>

    <section class="bg-white py-16 sm:py-20">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">
            <div class="prose prose-stone max-w-none font-sans text-stone-600 text-justify leading-relaxed space-y-5">
                <p>
                    La Universidad Nacional de San Luis es una institución de educación superior, pública, gratuita y laica. Desarrolla funciones académicas, de investigación y de extensión; ofrece formación integral, revaloriza su historia y su patrimonio, y garantiza la vigencia de los principios de la Reforma Universitaria de 1918.
                </p>
                <p>
                    Esta institución trabaja en la generación, difusión y transmisión de conocimientos para el desarrollo de una sociedad más justa, inclusiva e igualitaria, comprometida con los derechos humanos, el entorno y sus problemáticas, con la convicción de que el conocimiento es un pilar estratégico para la transformación y el desarrollo social.
                </p>

                <div class="my-10 pl-6  bg-stone-50 py-6 pr-6 rounded-r">
                    <p class="font-ui text-xs font-bold text-navy-800 uppercase tracking-widest mb-4">Estatuto de la UNSL (Art. 1°)</p>
                    <p class="text-stone-700 italic">
                        "a) Formar recursos humanos capacitados para la aplicación del conocimiento en el mejoramiento de las condiciones de vida de la sociedad y consustanciados con la obligación que se adquiere, junto con el saber, para con el Pueblo de su Nación.<br><br>
                        b) Desarrollar el conocimiento científico y técnico con vistas a aumentar la comprensión del Universo y la ubicación del Hombre en el mismo.<br><br>
                        c) Difundir el conocimiento y todo tipo de cultura y participar activamente en la comunidad propendiendo a la formación de una opinión pública esclarecida y comprometida con el sistema de vida republicano y democrático."
                    </p>
                </div>

                <div class="pt-2">
                    <a href="https://transparencia.unsl.edu.ar/wp-content/uploads/2026/04/Estatuto-Universidad-Nacional-de-San-Luis-2018.pdf" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 font-ui text-sm font-semibold text-navy-700 hover:text-navy-900 transition-colors uppercase tracking-wide">
                        Consultar Estatuto Completo
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-stone-50 py-20 border-t border-stone-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">
            <h2 class="font-display text-3xl font-bold text-navy-900 mb-10 text-center">Oferta Académica</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <a href="https://carreras.unsl.edu.ar/carreras/" class="group bg-white border border-stone-200 rounded overflow-hidden hover:border-navy-400 hover:shadow-md transition-all duration-300 flex flex-col">
                    <div class="h-48 overflow-hidden bg-stone-200">
                        <img src="URL_FOTO_PREGRADO.jpg" alt="Carreras de Pregrado" class="w-full h-full object-cover  transition-transform duration-500" />
                    </div>
                    <div class="p-6 flex flex-col flex-1 justify-between">
                        <div>
                            <h3 class="font-display text-xl font-bold text-navy-900 group-hover:text-navy-600 transition-colors mb-2">Pregrado</h3>
                            <p class="font-sans text-sm text-stone-500 leading-relaxed">Tecnicaturas y carreras cortas con rápida inserción laboral.</p>
                        </div>
                        <div class="mt-6 flex items-center justify-between text-navy-700">
                            <span class="font-ui text-xs font-semibold uppercase tracking-wide">Ver carreras</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </div>
                    </div>
                </a>

                <a href="https://carreras.unsl.edu.ar/carreras/" class="group bg-white border border-stone-200 rounded overflow-hidden hover:border-navy-400 hover:shadow-md transition-all duration-300 flex flex-col">
                    <div class="h-48 overflow-hidden bg-stone-200">
                        <img src="URL_FOTO_GRADO.jpg" alt="Carreras de Grado" class="w-full h-full object-cover  transition-transform duration-500" />
                    </div>
                    <div class="p-6 flex flex-col flex-1 justify-between">
                        <div>
                            <h3 class="font-display text-xl font-bold text-navy-900 group-hover:text-navy-600 transition-colors mb-2">Grado</h3>
                            <p class="font-sans text-sm text-stone-500 leading-relaxed">Licenciaturas, Ingenierías y Profesorados de formación integral.</p>
                        </div>
                        <div class="mt-6 flex items-center justify-between text-navy-700">
                            <span class="font-ui text-xs font-semibold uppercase tracking-wide">Ver carreras</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </div>
                    </div>
                </a>

                <a href="https://posgrado.unsl.edu.ar/" class="group bg-white border border-stone-200 rounded overflow-hidden hover:border-navy-400 hover:shadow-md transition-all duration-300 flex flex-col">
                    <div class="h-48 overflow-hidden bg-stone-200">
                        <img src="URL_FOTO_POSGRADO.jpg" alt="Carreras de Posgrado" class="w-full h-full object-cover  transition-transform duration-500" />
                    </div>
                    <div class="p-6 flex flex-col flex-1 justify-between">
                        <div>
                            <h3 class="font-display text-xl font-bold text-navy-900 group-hover:text-navy-600 transition-colors mb-2">Posgrado</h3>
                            <p class="font-sans text-sm text-stone-500 leading-relaxed">Especializaciones, Maestrías y Doctorados para el máximo nivel académico.</p>
                        </div>
                        <div class="mt-6 flex items-center justify-between text-navy-700">
                            <span class="font-ui text-xs font-semibold uppercase tracking-wide">Ver posgrados</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <section class="bg-white py-20 border-t border-stone-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">
            <h2 class="font-display text-2xl font-bold text-navy-900 mb-12">Facultades e Institutos</h2>

            <div class="mb-12">
                <h3 class="font-ui text-stone-500 text-sm font-semibold uppercase tracking-widest mb-6 border-b border-stone-200 pb-2">Sede San Luis</h3>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                    <?php

                    $san_luis = [
                        ['t' => 'Facultad de Ciencias Físico Matemáticas y Naturales', 'l' => 'http://fmn.unsl.edu.ar/', 'img' => 'fcfmyn.png'],
                        ['t' => 'Facultad de Química, Bioquímica y Farmacia', 'l' => 'http://www.fqbf.unsl.edu.ar/', 'img' => 'fqbyf.png'],
                        ['t' => 'Facultad de Psicología', 'l' => 'http://fapsi.unsl.edu.ar/', 'img' => 'fapsi.png'],
                        ['t' => 'Facultad de Ciencias Humanas', 'l' => 'http://humanas.unsl.edu.ar/', 'img' => 'fch.png'],
                        ['t' => 'Facultad de Ciencias de la Salud', 'l' => 'http://www.facultaddesalud.unsl.edu.ar/', 'img' => 'fcs.png'],
                        ['t' => 'Instituto Politécnico y Artístico Universitario', 'l' => 'https://carreras.unsl.edu.ar/facultades/ipau', 'img' => 'ipau.png'],
                        ['t' => 'Escuela Normal Juan Pascual Pringles', 'l' => 'http://enjpp.unsl.edu.ar/', 'img' => 'enjpp.png'],
                        ['t' => 'Escuela de Primeras Infancias', 'l' => 'https://jardinmaternal.unsl.edu.ar/', 'img' => 'epi.png']
                    ];

                    foreach ($san_luis as $item) : ?>
                        <a href="<?php echo $item['l']; ?>" target="_blank" class="group bg-white border border-stone-200 rounded p-5 flex flex-col justify-between hover:border-navy-400 hover:shadow-md transition-all duration-300 min-h-[130px]">

                            <div class="mb-4 h-12 flex items-center justify-start">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/<?php echo $item['img']; ?>"
                                    alt="Logo <?php echo $item['t']; ?>"
                                    class="h-full w-auto object-contain  transition-all duration-300"
                                    onerror="this.style.display='none'">
                            </div>

                            <div class="flex items-start justify-between">
                                <h4 class="font-ui font-semibold text-navy-900 group-hover:text-navy-700 transition-colors text-[14px] leading-snug pr-4">
                                    <?php echo $item['t']; ?>
                                </h4>
                                <svg class="w-5 h-5 text-stone-300 group-hover:text-navy-500 group-hover:translate-x-1 transition-all shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="mb-12">
                <h3 class="font-ui text-stone-500 text-sm font-semibold uppercase tracking-widest mb-6 border-b border-stone-200 pb-2">Sede Villa Mercedes</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                    <?php
                    $villa_mercedes = [
                        ['t' => 'Facultad de Ciencias Económicas, Jurídicas y Sociales', 'l' => 'http://www.fcejs.unsl.edu.ar/', 'img' => 'fcejs.png'],
                        ['t' => 'Facultad de Ingeniería y Ciencias Agropecuarias', 'l' => 'http://www.fica.unsl.edu.ar/', 'img' => 'fica.png']
                    ];

                    foreach ($villa_mercedes as $item) : ?>
                        <a href="<?php echo $item['l']; ?>" target="_blank" class="group bg-white border border-stone-200 rounded p-5 flex flex-col justify-between hover:border-navy-400 hover:shadow-md transition-all duration-300 min-h-[130px]">
                            <div class="mb-4 h-12 flex items-center justify-start">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/<?php echo $item['img']; ?>"
                                    alt="Logo <?php echo $item['t']; ?>"
                                    class="h-full w-auto object-contain  transition-all duration-300"
                                    onerror="this.style.display='none'">
                            </div>
                            <div class="flex items-start justify-between">
                                <h4 class="font-ui font-semibold text-navy-900 group-hover:text-navy-700 transition-colors text-[14px] leading-snug pr-4"><?php echo $item['t']; ?></h4>
                                <svg class="w-5 h-5 text-stone-300 group-hover:text-navy-500 group-hover:translate-x-1 transition-all shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div>
                <h3 class="font-ui text-stone-500 text-sm font-semibold uppercase tracking-widest mb-6 border-b border-stone-200 pb-2">Sede Villa de Merlo</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                    <?php
                    $villa_merlo = [
                        ['t' => 'Facultad de Turismo y Urbanismo', 'l' => 'http://ftu.unsl.edu.ar/', 'img' => 'ftu.png']
                    ];
                    foreach ($villa_merlo as $item) : ?>
                        <a href="<?php echo $item['l']; ?>" target="_blank" class="group bg-white border border-stone-200 rounded p-5 flex flex-col justify-between hover:border-navy-400 hover:shadow-md transition-all duration-300 min-h-[130px]">
                            <div class="mb-4 h-12 flex items-center justify-start">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/<?php echo $item['img']; ?>"
                                    alt="Logo <?php echo $item['t']; ?>"
                                    class="h-full w-auto object-contain  transition-all duration-300"
                                    onerror="this.style.display='none'">
                            </div>
                            <div class="flex items-start justify-between">
                                <h4 class="font-ui font-semibold text-navy-900 group-hover:text-navy-700 transition-colors text-[14px] leading-snug pr-4"><?php echo $item['t']; ?></h4>
                                <svg class="w-5 h-5 text-stone-300 group-hover:text-navy-500 group-hover:translate-x-1 transition-all shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </section>

    <section class="bg-stone-50 py-20 border-t border-stone-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">
            <h2 class="font-display text-2xl font-bold text-navy-900 mb-10">Áreas Institucionales y Servicios</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                <?php
                $areas = [
                    ['t' => 'Secretaría de Investigación, Desarrollo e innovación', 'l' => 'http://scyt.unsl.edu.ar'],
                    ['t' => 'Secretaría de Extensión Universitaria', 'l' => 'https://seu.unsl.edu.ar/'],
                    ['t' => 'Secretaría de Relaciones Interinstitucionales', 'l' => 'https://relint.unsl.edu.ar/'],
                    ['t' => 'Secretaría de Asuntos Estudiantiles y Bienestar', 'l' => 'http://saebu.unsl.edu.ar'],
                    ['t' => 'Red de Bibliotecas UNSL', 'l' => 'http://biblioteca.unsl.edu.ar'],
                    ['t' => 'Nueva Editorial Universitaria (NEU)', 'l' => 'http://www.neu.unsl.edu.ar/'],
                    ['t' => 'Fundación Universidad Nacional de San Luis', 'l' => 'http://fundacion.unsl.edu.ar/'],
                    ['t' => 'Obra Social (DOSPU)', 'l' => 'https://dospu.unsl.edu.ar']
                ];
                foreach ($areas as $area) : ?>
                    <a href="<?php echo $area['l']; ?>" target="_blank" class="group bg-white border border-stone-200 rounded p-5 flex flex-col justify-center hover:border-navy-400 hover:shadow-md transition-all duration-200 min-h-[100px]">
                        <div class="flex items-start justify-between">
                            <h4 class="font-ui font-semibold text-navy-900 group-hover:text-navy-700 transition-colors text-[14px] leading-snug pr-4"><?php echo $area['t']; ?></h4>
                            <svg class="w-5 h-5 text-stone-300 group-hover:text-navy-500 group-hover:translate-x-1 transition-all shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="bg-white py-20 border-t border-stone-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12 text-center">
            <h2 class="font-display text-2xl font-bold text-navy-900 mb-8">Mapa del campus</h2>
            <div class="bg-stone-100 rounded overflow-hidden border border-stone-200">
                <img src="URL_IMAGEN_MAPA.jpg" alt="Mapa del Campus UNSL" class="w-full h-auto" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" />
                <div style="display:none;" class="p-20 text-stone-400 font-sans">
                    [ mapa ]
                </div>
            </div>
        </div>
    </section>

<?php endwhile; ?>
<?php get_footer(); ?>