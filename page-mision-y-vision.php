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
                Misión y Visión
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
                        b) Desarrollar el conocimiento científico y técnico con vistas a aumentar la comprensión del Universo y la ubicación del la persona en el mismo.<br><br>
                        c) Difundir el conocimiento y todo tipo de cultura y participar activamente en la comunidad propendiendo a la formación de una opinión pública esclarecida y comprometida con el sistema de vida republicano y democrático."
                    </p>
                </div>

                <p>La Universidad Nacional de San Luis se proyecta como una institución innovadora, inclusiva, que alienta el pensamiento libre y el espíritu crítico de su comunidad, con presencia activa y transformadora en su contexto. Una organización capaz de dialogar con su entorno, permeable a las demandas del medio, que construye colectivamente respuestas posibles y favorece procesos sostenibles de transformación social. Reafirma sus principios como universidad reformista, autónoma, cogobernada, democrática y valora la pluralidad de pensamiento y acción. La Universidad aspira a consolidarse como una reconocida institución del Siglo XXI, sin fronteras geográficas, comprometida firmemente con la educación pública de calidad y en la convicción de que el conocimiento es bien social y derecho humano.</p>

                <div class="pt-2">
                    <a href="https://transparencia.unsl.edu.ar/wp-content/uploads/2026/04/Estatuto-Universidad-Nacional-de-San-Luis-2018.pdf" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 font-ui text-sm font-semibold text-navy-700 hover:text-navy-900 transition-colors uppercase tracking-wide">
                        Consultar Estatuto completo
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
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


<?php endwhile; ?>

<?php get_footer(); ?>