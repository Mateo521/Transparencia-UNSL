<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php wp_head(); ?>

   

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/a11y-toolbar-master/css/a11y-toolbar.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/a11y-toolbar-master/css/a11y-custom.css">

</head>

<body <?php body_class('bg-stone-50 text-stone-800 font-sans antialiased'); ?>>

    <header id="site-header" class="fixed w-full top-0 left-0 z-50 is-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 bg-white md:bg-transparent">
            <div class="flex justify-between items-center h-20">



                <div class="flex-shrink-0 flex items-center h-full">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="relative flex items-center h-full">


                        <img class="logo-img logo-blanco hidden md:block h-16 w-auto py-1 object-contain"
                            src="<?php echo get_template_directory_uri() ?>/logo-unsl-n.png"
                            alt="UNSL Transparencia">


                        <img class="logo-img logo-color static md:absolute md:left-0 md:top-1/2 md:-translate-y-1/2 h-16 w-auto py-1 object-contain"
                            src="<?php echo get_template_directory_uri() ?>/logo-unsl-color.png"
                            alt="UNSL Transparencia">

                    </a>
                </div>

                <nav class="hidden md:flex space-x-8 items-center h-full">
                    <?php
                    if (has_nav_menu('primary')) {
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container'      => false,
                            'items_wrap'     => '<ul id="primary-menu" class="flex space-x-6 items-center h-full transition-colors duration-300">%3$s</ul>',
                            'fallback_cb'    => false,
                            'walker'         => new Tailwind_Nav_Walker()
                        ));
                    }
                    ?>
                </nav>

                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" type="button" class="mobile-menu-btn text-stone-600 transition-colors duration-300 focus:outline-none p-2" aria-label="Abrir menú">

                        <svg id="icon-menu" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>

                        <svg id="icon-close" class="h-7 w-7 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>


        <div id="mobile-menu-container" class="md:hidden bg-white border-t border-stone-100 shadow-xl">
            <div class="px-4 pt-2 pb-6 space-y-1">
                <?php

                if (has_nav_menu('primary')) {
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'items_wrap'     => '<ul id="mobile-primary-menu" class="flex flex-col w-full">%3$s</ul>',
                        'fallback_cb'    => false,
                        'walker'         => new Tailwind_Nav_Walker()
                    ));
                }
                ?>
            </div>
        </div>
    </header>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const header = document.getElementById('site-header');
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenuContainer = document.getElementById('mobile-menu-container');
            const iconMenu = document.getElementById('icon-menu');
            const iconClose = document.getElementById('icon-close');
            const checkScroll = () => {
                if (window.scrollY > 20) {
                    header.classList.remove('is-transparent');
                    header.classList.add('is-scrolled');
                    header.style.backgroundColor = '#ffffff';
                } else {
                    header.classList.add('is-transparent');
                    header.classList.remove('is-scrolled');
                    header.style.backgroundColor = 'transparent';
                }
            };
            checkScroll();
            window.addEventListener('scroll', checkScroll);
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenuContainer.classList.toggle('is-open');
                iconMenu.classList.toggle('hidden');
                iconClose.classList.toggle('hidden');
            });




            const mobileToggles = document.querySelectorAll('#mobile-primary-menu .mobile-toggle-trigger');

            if (mobileToggles.length > 0) {
                mobileToggles.forEach(toggle => {
                    toggle.addEventListener('click', (e) => {
                        if (window.innerWidth < 768) {
                            e.preventDefault();
                            const parentLi = toggle.closest('.mobile-menu-item');
                            if (parentLi) {
                                parentLi.classList.toggle('is-open');
                            }
                        }
                    });
                });
            }





        });
    </script>

    <main>