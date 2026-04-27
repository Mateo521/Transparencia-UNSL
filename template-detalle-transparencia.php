<?php

/**
 * Template Name: Detalle de Categoría (Transparencia)
 * Template Post Type: page
 */
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section class="relative pt-32 pb-16 sm:pt-40 sm:pb-20 overflow-hidden">

            <div class="absolute inset-0 z-0">
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover object-center" />
                <?php else : ?>
                    <img src="http://192.168.103.3/wp-content/themes/Carreras-UNSL/imagenes/carreras.jpg" alt="Fachada UNSL" class="w-full h-full object-cover object-center" />
                <?php endif; ?>

                <div class="absolute inset-0 bg-navy-950/80 mix-blend-multiply"></div>




            </div>

            <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">

                <nav class="flex text-sm font-sans text-navy-300 mb-6 drop-shadow-sm" aria-label="Breadcrumb">
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
                                <span class="text-white ml-1 font-medium" aria-current="page"><?php the_title(); ?></span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <h1 class="font-display text-4xl sm:text-5xl font-bold text-white leading-tight drop-shadow-md">
                    <?php the_title(); ?>
                </h1>

            </div>
        </section>

        <section class=" py-12 bg-stone-50 sm:py-10 min-h-[50vh]">
            <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">

                <style>
                    .contenido-dinamico h2 {
                        font-family: 'Inter', sans-serif;
                        font-size: 1.5rem;
                        font-weight: 700;
                        color: #0f172a;
                        /* text-slate-900 */
                        margin-top: 2.5rem;
                        margin-bottom: 1.25rem;
                        padding-bottom: 0.5rem;
                        border-bottom: 1px solid #e2e8f0;
                    }

                    .contenido-dinamico h3 {
                        font-size: 1.25rem;
                        font-weight: 600;
                        color: #1e293b;
                        margin-top: 2rem;
                        margin-bottom: 1rem;
                    }


                    .contenido-dinamico ul {
                        list-style: none;
                        padding: 0;
                        margin: 2rem 0;
                        display: grid;
                        /*    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));*/
                        gap: 1rem;
                    }

                    .contenido-dinamico ul li {
                        margin: 0;
                    }

                    .contenido-dinamico ul li a {
                        display: flex;
                        align-items: center;
                        padding: 1rem 1.25rem;
                        background-color: #ffffff;
                        border: 1px solid #e2e8f0;
                        border-radius: 0.5rem;
                        color: #1e293b;
                        font-weight: 600;
                        font-size: 0.875rem;
                        text-decoration: none;
                        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
                        transition: all 0.2s ease;
                    }

                    .contenido-dinamico ul li a:hover {
                        border-color: #94a3b8;
                        background-color: #f8fafc;
                        color: #000000;
                        transform: translateY(-2px);
                        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
                    }


                    .contenido-dinamico ul li a::before {
                        content: '';
                        display: inline-block;
                        width: 1.25rem;
                        height: 1.25rem;
                        margin-right: 0.75rem;
                        flex-shrink: 0;
                        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%234b5563'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z'/%3E%3C/svg%3E");
                        background-size: cover;
                    }


                    .contenido-dinamico blockquote {
                        background-color: #f1f5f9;
                        /* slate-100 */
                        border-left: 4px solid #475569;
                        /* slate-600 */
                        padding: 1rem 1.5rem;
                        margin: 2rem 0;
                        border-radius: 0 0.5rem 0.5rem 0;
                        font-size: 0.875rem;
                        color: #475569;
                        font-style: normal;
                    }


                    .contenido-dinamico p a {
                        color: #2563eb;
                        text-decoration: underline;
                        text-underline-offset: 4px;
                        font-weight: 500;
                    }

                    .contenido-dinamico p a:hover {
                        color: #1d4ed8;
                    }
                </style>

                <div class="contenido-dinamico max-w-none font-sans text-stone-600 text-justify  space-y-4">
                    <?php the_content(); ?>
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

<?php endwhile;
endif; ?>

<?php get_footer(); ?>