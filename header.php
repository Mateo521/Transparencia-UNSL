<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>

    <style type="text/tailwindcss">
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap');
        @import "tailwindcss";

        @theme {
            --font-sans: "PT Sans", sans-serif;
            --font-display:   "PT Sans", sans-serif;
            --font-ui:     "PT Sans", sans-serif;

            --color-navy-950: #060d1f;
            --color-navy-900: #0d1b38;
            --color-navy-800: #162447;
            --color-navy-700: #1d3461;
            --color-navy-600: #254b8e;
            --color-navy-500: #2e5eb0;
            --color-navy-400: #4c7acc;
            --color-navy-300: #7da3dd;
            --color-navy-200: #b3c9ed;
            --color-navy-100: #dce8f6;
            --color-navy-50: #f0f5fb;

            --color-stone-950: #0c0b09;
            --color-stone-900: #1c1a16;
            --color-stone-700: #44403a;
            --color-stone-500: #79756c;
            --color-stone-300: #c0bdb6;
            --color-stone-200: #dddad4;
            --color-stone-100: #edebe6;
            --color-stone-50: #f8f7f4;
        }

        .font-display { font-family: var(--font-display); }
        .font-ui { font-family: var(--font-ui); }

        #site-header {
            transition: background-color 0.4s ease, border-color 0.4s ease, box-shadow 0.4s ease;
        }
    
        @media (min-width: 768px) {
            #site-header.is-transparent {
                background-color: transparent;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }
            #site-header.is-transparent #primary-menu > li > a { color: var(--color-navy-100); }
            #site-header.is-transparent #primary-menu > li > a:hover { color: #ffffff; }
            #site-header.is-transparent .logo-blanco { opacity: 1; }
            #site-header.is-transparent .logo-color { opacity: 0; }
        }

        #site-header.is-scrolled,
        @media (max-width: 767px) {
            #site-header {
                background-color: #ffffff;
                border-bottom: 1px solid var(--color-stone-200);
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            }
            #site-header #primary-menu > li > a { color: var(--color-stone-700); }
            #site-header #primary-menu > li > a:hover { color: var(--color-navy-700); }
            #site-header .mobile-menu-btn { color: var(--color-stone-500); }
            #site-header .logo-blanco { opacity: 0; }
            #site-header .logo-color { opacity: 1; }
        }

        .logo-img { transition: opacity 0.4s ease; }

    
        @media (min-width: 768px) {
            .group:hover > a > .dropdown-icon { transform: rotate(180deg); }
            .group\/sub:hover > a > .dropdown-icon { transform: rotate(0deg); }  
        }
    
        .mobile-menu-item.is-open > a > .dropdown-icon { transform: rotate(180deg); }
    
        #mobile-menu-container {
            transition: max-height 0.4s ease, opacity 0.4s ease;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
        }
        #mobile-menu-container.is-open {
            max-height: 100vh; 
            opacity: 1;
            overflow-y: auto;
        }
        
        
        @media (max-width: 767px) {
            .mobile-submenu {
                position: static !important;
                visibility: visible !important;
                opacity: 1 !important;
                box-shadow: none !important;
                border: none !important;
                padding: 0 !important;
                margin: 0 !important;
                width: 100% !important;
                display: none;  
                background-color: var(--color-stone-50);
            }
            .mobile-menu-item.is-open > .mobile-submenu {
                display: block;
            }
        }

    </style>
</head>

<body <?php body_class('bg-stone-50 text-stone-800 font-sans antialiased'); ?>>

    <header id="site-header" class="fixed w-full top-0 left-0 z-50 is-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 bg-white md:bg-transparent">
            <div class="flex justify-between items-center h-20">


                <div class="flex-shrink-0 flex items-center h-full">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="relative flex items-center h-full">
                        <img class="logo-img logo-blanco hidden md:block h-18 w-auto py-1"
                            src="<?php echo get_template_directory_uri() ?>/logo-unsl-n.png"
                            alt="UNSL Transparencia">
                        <img class="logo-img logo-color absolute left-0 top-1/2 -translate-y-1/2 h-18 w-auto py-1"
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

            const checkScroll = () => {
                if (!header) return;



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


            window.addEventListener('scroll', () => {
                window.requestAnimationFrame(checkScroll);
            });


            if (mobileMenuBtn && mobileMenuContainer) {
                mobileMenuBtn.addEventListener('click', () => {
                    mobileMenuContainer.classList.toggle('is-open');
                    if (iconMenu && iconClose) {
                        iconMenu.classList.toggle('hidden');
                        iconClose.classList.toggle('hidden');
                    }
                    if (window.scrollY <= 20) {
                        if (mobileMenuContainer.classList.contains('is-open')) {
                            header.classList.remove('is-transparent');
                            header.classList.add('is-scrolled');
                        } else {
                            header.classList.add('is-transparent');
                            header.classList.remove('is-scrolled');
                        }
                    }
                });
            }


            const mobileDropdownLinks = document.querySelectorAll('#mobile-primary-menu li.menu-item-has-children > a');
            if (mobileDropdownLinks.length > 0) {
                mobileDropdownLinks.forEach(link => {
                    link.addEventListener('click', (e) => {
                        e.preventDefault();
                        const parentLi = link.closest('.mobile-menu-item');
                        if (parentLi) {
                            parentLi.classList.toggle('is-open');
                        }
                    });
                });
            }
        });
    </script>

    <main>