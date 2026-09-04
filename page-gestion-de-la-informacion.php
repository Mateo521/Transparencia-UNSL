<?php

/**
 * Template Name: Gestión de la Información
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
                Gestión de la Información
            </h1>
        </div>
    </section>

    <section class="bg-white py-16 sm:py-20">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12 text-justify">
            <div class="prose prose-stone max-w-7xl mx-auto font-sans text-stone-600 leading-relaxed">
                <p class="text-lg">
                    La Universidad Nacional de San Luis apoya su administración integral en el Ecosistema SIU, un conjunto de plataformas interconectadas diseñadas para modernizar y transparentar la gestión universitaria. A través de estos módulos, se informatizan y vinculan áreas clave como la trayectoria académica, la contabilidad, las contrataciones, los recursos humanos y la gestión documental, garantizando así un manejo de la información más ágil, seguro y eficiente para toda la comunidad.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-stone-50 py-20 border-t border-stone-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php

                $sistemas_siu = [
                    [
                        'nombre' => 'SIU-ARAÍ',
                        'color'  => 'bg-[#853385]',
                        'logo'   => 'logo-arai-blanco.png',
                        'desc'   => 'Plataforma Integradora de Servicios',
                        'link'   => 'https://www.siu.edu.ar/siu-arai'
                    ],
                    [
                        'nombre' => 'SIU-DIAGUITA',
                        'color'  => 'bg-[#8ed7f7]',
                        'logo'   => 'logo-diaguita-blanco.png',
                        'desc'   => 'Módulo de compras, contrataciones y patrimonio',
                        'link'   => 'https://www.siu.edu.ar/siu-diaguita'
                    ],
                    [
                        'nombre' => 'SIU-GUARANÍ',
                        'color'  => 'bg-[#3399ff]',
                        'logo'   => 'logo-guarani-blanco.png',
                        'desc'   => 'Módulo de gestión académica',
                        'link'   => 'https://www.siu.edu.ar/siu-guarani'
                    ],
                    [
                        'nombre' => 'SIU-MAPUCHE',
                        'color'  => 'bg-[#aa5a23]',
                        'logo'   => 'logo-mapuche-blanco.png',
                        'desc'   => 'Módulo de recursos humanos',
                        'link'   => 'https://www.siu.edu.ar/siu-mapuche'
                    ],
                    [
                        'nombre' => 'SIU-HUARPE PROVEEDORES',
                        'color'  => 'bg-[#ff6633]',
                        'logo'   => 'logo-huarpe-blanco.png',
                        'desc'   => 'Portal de autogestión para proveedores',
                        'link'   => 'https://www.siu.edu.ar/siu-huarpe'
                    ],
                    [
                        'nombre' => 'SUDOCU',
                        'color'  => 'bg-[#1e69af]',
                        'logo'   => 'logo-sudocu-blanco.png',
                        'desc'   => 'Sistema Único Documental',
                        'link'   => 'https://www.siu.edu.ar/sudocu'
                    ],
                    [
                        'nombre' => 'SIU-HUARPE',
                        'color'  => 'bg-[#ff6633]',
                        'logo'   => 'logo-huarpe-blanco.png',
                        'desc'   => 'Portal de autogestión',
                        'link'   => 'https://www.siu.edu.ar/siu-huarpe'
                    ],
                    [
                        'nombre' => 'SIU-PILAGÁ',
                        'color'  => 'bg-[#05789b]',
                        'logo'   => 'logo-pilaga-blanco.png',
                        'desc'   => 'Módulo económico, presupuestario, financiero y contable',
                        'link'   => 'https://www.siu.edu.ar/siu-pilaga'
                    ],
                    [
                        'nombre' => 'SIU-WICHI',
                        'color'  => 'bg-[#16a34a]',
                        'logo'   => 'logo-wichi-blanco.png',
                        'desc'   => 'Módulo de información gerencial',
                        'link'   => 'https://www.siu.edu.ar/siu-wichi'
                    ]
                ];

                foreach ($sistemas_siu as $sistema) : ?>
                    <a href="<?php echo esc_url($sistema['link']); ?>" target="_blank" class="group bg-white rounded-t-xl rounded-b-md border border-stone-200 flex flex-col text-center shadow-sm hover:shadow-xl transition-all duration-300 transform  overflow-hidden min-h-[160px]">


                        <div class="<?php echo $sistema['color']; ?> w-full py-3 px-4 flex items-center justify-center relative">

                            <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-5 transition-opacity duration-300 pointer-events-none"></div>

                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/siu/<?php echo $sistema['logo']; ?>"
                                alt="Logo <?php echo $sistema['nombre']; ?>"
                                class="h-10 sm:h-12 w-auto object-contain opacity-95 group-hover:opacity-100 transition-opacity drop-shadow-sm relative z-10"
                                onerror="this.style.display='none'; this.nextElementSibling.classList.remove('hidden');" />

                            <h3 class="hidden text-white font-display font-bold tracking-wide text-lg relative z-10 drop-shadow-sm">
                                <?php echo esc_html($sistema['nombre']); ?>
                            </h3>
                        </div>


                        <div class="p-6 flex flex-col flex-1 items-center justify-between">

                            <p class="text-stone-600 text-base font-bold  leading-relaxed mb-6">
                                <?php echo esc_html($sistema['desc']); ?>
                            </p>


                            <div class="mt-auto">
                                <span class="inline-flex items-center justify-center px-5 py-1.5 border border-stone-300 rounded-full text-xs font-bold uppercase tracking-wider text-stone-600 group-hover:border-navy-600 group-hover:text-navy-700 group-hover:bg-navy-50/50 transition-all">
                                    Ver más
                                </span>
                            </div>

                        </div>

                    </a>
                <?php endforeach; ?>



            </div>

            <div class="mt-16 py-4 px-4 flex items-center gap-3 text-stone-500 bg-stone-100 rounded-lg border border-stone-200">
                <svg class="w-5 h-5 text-stone-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="font-ui text-sm">
                    Información actualizada al <strong><?php echo get_the_modified_date('j \d\e F \d\e Y'); ?></strong>.
                </p>
            </div>
        </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>