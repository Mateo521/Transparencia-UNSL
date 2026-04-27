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
        
       
        #site-header.is-transparent {
            background-color: transparent;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        #site-header.is-transparent .brand-sub { color: var(--color-navy-200); }
        #site-header.is-transparent .brand-title { color: #ffffff; }
        #site-header.is-transparent #primary-menu a { color: var(--color-navy-100); }
        #site-header.is-transparent #primary-menu a:hover { color: #ffffff; }
        #site-header.is-transparent .mobile-menu-btn { color: #ffffff; }

 
        #site-header.is-scrolled {
            background-color: #ffffff;
            border-bottom: 1px solid var(--color-stone-200);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        #site-header.is-scrolled .brand-sub { color: var(--color-stone-500); }
        #site-header.is-scrolled .brand-title { color: #1e293b; }
        #site-header.is-scrolled #primary-menu a { color: var(--color-stone-700); }
        #site-header.is-scrolled #primary-menu a:hover { color: var(--color-navy-700); }
        #site-header.is-scrolled .mobile-menu-btn { color: var(--color-stone-500); }

    
        @keyframes fadein {
            from { opacity: 0; transform: translateY(14px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .card-item { animation: fadein 0.5s ease both; }
        .card-item:nth-child(1) { animation-delay: 0.05s; }
        .card-item:nth-child(2) { animation-delay: 0.12s; }
        .card-item:nth-child(3) { animation-delay: 0.19s; }
        .card-item:nth-child(4) { animation-delay: 0.26s; }
    </style>
</head>

<body <?php body_class('bg-stone-50 text-stone-800 font-sans antialiased'); ?>>

    <header id="site-header" class="fixed w-full top-0 left-0 z-50 is-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
            <div class="flex justify-between items-center h-20">

                <div class="flex-shrink-0 flex items-center">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex flex-col transition-colors duration-300">
                        <img class="h-14 w-auto" src="<?php echo get_template_directory_uri() ?>/logo-unsl-negativo2.svg" alt="">
                    </a>
                </div>

                <nav class="hidden md:flex space-x-8">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container'      => false,

                        'items_wrap'     => '<ul id="primary-menu" class="flex space-x-6 text-sm font-sans font-semibold transition-colors duration-300">%3$s</ul>',
                        'fallback_cb'    => false,
                    ));
                    ?>
                </nav>

                <div class="md:hidden flex items-center">
                    <button type="button" class="mobile-menu-btn transition-colors duration-300 focus:outline-none" aria-label="Abrir menú">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const header = document.getElementById('site-header');


            const checkScroll = () => {
                if (window.scrollY > 20) {
                    header.classList.remove('is-transparent');
                    header.classList.add('is-scrolled');
                } else {
                    header.classList.add('is-transparent');
                    header.classList.remove('is-scrolled');
                }
            };


            checkScroll();


            window.addEventListener('scroll', checkScroll);
        });
    </script>

    <main>