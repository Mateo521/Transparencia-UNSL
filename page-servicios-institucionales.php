<?php



/**

 * Template Name: Servicios Institucionales

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

                Servicios Institucionales

            </h1>

        </div>

    </section>



    <section class="bg-white py-16 sm:py-20">

        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">

            <div class="prose prose-stone max-w-none font-sans text-stone-600 text-justify leading-relaxed space-y-5">

                <p>

                    La Universidad Nacional de San Luis (UNSL) cuenta con una amplia propuesta académica de más de 80 carreras entre títulos de pregrado y grado, complementada por una sólida oferta de posgrados. Sus trayectos formativos cubren diversas áreas del conocimiento —ciencias exactas, naturales, humanas, sociales, de la salud y aplicadas— y se distribuyen en 8 Facultades (además del Instituto Politécnico y sus distintas sedes):

                </p>



            </div>

        </div>

    </section>


    <section class="bg-stone-50 py-20 border-t border-stone-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">


                <div class="lg:col-span-7 xl:col-span-8">
                    <h2 class="font-display text-3xl font-bold text-navy-900 mb-8">Nuestras Facultades</h2>

                    <div class="space-y-8 text-stone-600 font-sans text-sm leading-relaxed">


                        <div>
                            <h3 class="font-bold text-navy-800 mb-2">Sede San Luis</h3>
                            <ul class="list-disc pl-5 space-y-1">
                                <li><div >Facultad de Ciencias Físico Matemáticas y Naturales</div></li>
                                <li><div >Facultad de Química, Bioquímica y Farmacia</div></li>
                                <li><div >Facultad de Psicología</div></li>
                                <li><div >Facultad de Ciencias Humanas</div></li>
                                <li><div >Facultad de Ciencias de la Salud</div></li>
                                <li><div >Instituto Politécnico y Artístico Universitario</div></li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="font-bold text-navy-800 mb-2">Sede Villa Mercedes</h3>
                            <ul class="list-disc pl-5 space-y-1">
                                <li><div >Facultad de Ciencias Económicas, Jurídicas y Sociales</div></li>
                                <li><div >Facultad de Ingeniería y Ciencias Agropecuarias</div></li>
                            </ul>
                        </div>


                        <div>
                            <h3 class="font-bold text-navy-800 mb-2">Sede Villa de Merlo</h3>
                            <ul class="list-disc pl-5 space-y-1">
                                <li><div class="">Facultad de Turismo y Urbanismo</div></li>
                            </ul>
                        </div>

                    </div>
                </div>


                <div class="lg:col-span-5 xl:col-span-4">
                    <h2 class="font-display text-3xl font-bold text-navy-900 mb-8 lg:text-right">Oferta académica</h2>

                    <div class="flex flex-col gap-4">


                        <a target="_blank" href="https://carreras.unsl.edu.ar/carreras/?tipo=grado/" class="group flex items-center justify-between bg-[#353F67] text-white rounded-full px-8 py-5 hover:bg-[#232c77] transition-colors shadow-sm">
                            <span class="font-bold text-lg">Grado</span>
                            <svg class="w-6 h-6 text-white group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>

                        <a target="_blank" href="https://carreras.unsl.edu.ar/carreras/?tipo=pregrado" class="group flex items-center justify-between bg-[#353F67] text-white rounded-full px-8 py-5 hover:bg-[#232c77] transition-colors shadow-sm">
                            <span class="font-bold text-lg">Pregrado</span>
                            <svg class="w-6 h-6 text-white group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>

                        <a target="_blank" href="https://carreras.unsl.edu.ar/carreras/?tipo=posgrado/" class="group flex items-center justify-between bg-[#353F67] text-white rounded-full px-8 py-5 hover:bg-[#232c77] transition-colors shadow-sm">
                            <span class="font-bold text-lg">Posgrado</span>
                            <svg class="w-6 h-6 text-white group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-[#353F67] py-16">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12 text-justify">
            <h2 class="font-display text-2xl font-bold text-white mb-10">La UNSL cuenta dos con escuelas</h2>

            <div class="flex flex-col sm:flex-row justify-start items-center gap-6">
                <a href="http://enjpp.unsl.edu.ar/" target="_blank" class="group flex items-center justify-between bg-white text-navy-900 rounded-full px-8 py-4 min-w-[300px] hover:bg-stone-100 transition-colors">
                    <span class="font-bold">Escuela Normal Juan Pascual Pringles</span>
                    <svg class="w-6 h-6 text-[#353F67] group-hover:translate-x-1 transition-transform ml-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>

                <a href="https://jardinmaternal.unsl.edu.ar/" target="_blank" class="group flex items-center justify-between bg-white text-navy-900 rounded-full px-8 py-4 min-w-[300px] hover:bg-stone-100 transition-colors">
                    <span class="font-bold">Escuela de Primeras Infancias</span>
                    <svg class="w-6 h-6 text-[#353F67] group-hover:translate-x-1 transition-transform ml-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>




    <section class="bg-stone-50 py-20 border-t border-stone-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">
            <h2 class="font-display text-2xl font-bold text-navy-900 mb-10">Servicios</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                <?php
                $areas = [
                    ['t' => 'Centro Cultural', 'l' => 'https://seu.unsl.edu.ar/index.php/menu/gestionCultural'],
                    ['t' => 'Espacios Museológicos', 'l' => ''],
                    
                    //  desplegable de Espacios Museológicos:
                    // ['t' => 'Museo de la Radio y la Comunicación', 'l' => 'https://humanas.unsl.edu.ar/index.php/inicio/institucional/decanato/secretarias/extension/museo-de-la-radio-y-la-comunicacion/'],
                    // ['t' => 'Museo de Farmacia', 'l' => ''],
                    // ['t' => 'Museo de Historia de la Psicología', 'l' => ''],
                    // ['t' => 'Museo Interactivo de Ciencias Contacto', 'l' => ''],
                    # ['t' => 'Auditorio Mauricio López', 'l' => 'https://seu.unsl.edu.ar/index.php/menu/gestionCultural'],
                    #  ['t' => 'Secretaría de Relaciones Interinstitucionales', 'l' => 'https://relint.unsl.edu.ar/'],
                    #  ['t' => 'Secretaría de Asuntos Estudiantiles y Bienestar', 'l' => 'http://saebu.unsl.edu.ar'],
                    #  ['t' => 'Red de Bibliotecas UNSL', 'l' => 'http://biblioteca.unsl.edu.ar'],

                ];
                foreach ($areas as $area) : ?>
                    <?php if (!empty($area['l'])) : ?>
                        <a href="<?php echo $area['l']; ?>" target="_blank" class="group bg-white  rounded p-5 flex flex-col justify-center hover:border-navy-400 hover:shadow-md transition-all duration-200">
                            <div class="flex items-start justify-between">
                                <h4 class="font-ui font-semibold text-navy-900 group-hover:text-navy-700 transition-colors text-[14px] leading-snug pr-4"><?php echo $area['t']; ?></h4>
                                <svg class="w-5 h-5 text-stone-300 group-hover:text-navy-100 group-hover:translate-x-1 transition-all shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                        </a>
                    <?php else : ?>
                        <div class="bg-white rounded p-5 flex flex-col justify-center">
                            <h4 class="font-ui font-semibold text-navy-900 text-[14px] leading-snug"><?php echo $area['t']; ?></h4>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <section class="bg-white py-20 border-t border-stone-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12 text-justify">
            <h2 class="font-display text-2xl font-bold text-navy-900 mb-8">Nuestras sedes</h2>


            <div class="bg-stone-100 rounded-xl overflow-hidden border border-stone-200 shadow-sm relative z-0">
                <div id="unsl-map" class="w-full h-[250px] sm:h-[300px]"></div>
            </div>


            <div class="mt-12 py-6 px-3  flex items-center gap-3 text-stone-500 bg-stone-100  ">
                <svg class="w-5 h-5 text-stone-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="font-ui text-sm">
                    Información actualizada en <strong><?php echo get_the_modified_date('F \d\e Y'); ?></strong>.
                </p>
            </div>

        </div>
    </section>


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const centerView = [-33.2, -65.8];
            const zoomLevel = 7;


            const map = L.map('unsl-map', {
                scrollWheelZoom: false
            }).setView(centerView, zoomLevel);


            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);


            const unslIcon = L.divIcon({
                className: 'custom-leaflet-icon',
                html: `<svg width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C8.13 2 5 5.13 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 5.13 15.87 2 12 2ZM12 11.5C10.62 11.5 9.5 10.38 9.5 9C9.5 7.62 10.62 6.5 12 6.5C13.38 6.5 14.5 7.62 14.5 9C14.5 10.38 13.38 11.5 12 11.5Z" fill="#1d3461"/>
                   </svg>`,
                iconSize: [36, 36],
                iconAnchor: [18, 36],
                popupAnchor: [0, -32]
            });


            const sedes = [{
                    nombre: "Sede San Luis",
                    direccion: "Ejército de los Andes 950",
                    coords: [-33.292114736496266, -66.33961799597792]
                },

                {
                    nombre: "Sede Villa Mercedes",
                    direccion: "Ruta Provincial Nº 55 Extremo norte",
                    coords: [-33.64140161822387, -65.44725681496806]
                },
                {
                    nombre: "Sede Villa de Merlo",
                    direccion: "Av. del Libertador S/N Barranca Colorada (5881) Villa de Merlo San Luis",
                    coords: [-32.334364023704815, -65.00839379036395]
                }
            ];


            sedes.forEach(sede => {
                const marker = L.marker(sede.coords, {
                    icon: unslIcon
                }).addTo(map);


                const popupContent = `
                <div style="font-family: 'PT Sans', sans-serif;">
                    <h3 style="margin: 0 0 4px 0; color: #0d1b38; font-weight: bold; font-size: 14px;">${sede.nombre}</h3>
                    <p style="margin: 0; color: #79756c; font-size: 12px;">${sede.direccion}</p>
                </div>
            `;
                marker.bindPopup(popupContent);
            });


            map.on('focus', function() {
                map.scrollWheelZoom.enable();
            });
            map.on('blur', function() {
                map.scrollWheelZoom.disable();
            });
        });
    </script>

    <style>
        .leaflet-container {
            z-index: 10 !important;
            font-family: var(--font-sans), sans-serif;
        }

        .leaflet-popup-content-wrapper {
            border-radius: 8px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
    </style>

<?php endwhile; ?>




<?php get_footer(); ?>