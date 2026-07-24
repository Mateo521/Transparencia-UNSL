<?php

/**
 * Template Name: En construcción (Implementación)
 */
get_header();
?>


<section class="bg-navy-900 py-16 sm:py-24">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12 text-center">
        <h1 class="font-display text-3xl sm:text-5xl font-bold text-white leading-tight">
            <?php echo get_the_title(); ?>
        </h1>
    </div>
</section>


<section class="bg-stone-50 py-16 sm:py-24 min-h-[60vh] flex items-center justify-center">
    <div class="max-w-7xl mx-auto px-6 sm:px-10">

        <div class="bg-white rounded shadow-sm border border-stone-200 p-8 sm:p-12 text-center">


            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-navy-50 text-navy-600 mb-6">
                <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>

            <h2 class="font-display text-2xl font-bold text-navy-900 mb-6">Implementación progresiva</h2>


            <div class="font-sans text-stone-600 space-y-5 text-[16px] leading-relaxed mb-10 text-justify">
                <p>
                    En esta primera etapa de implementación, se pone a disposición la información actualmente disponible en el portal. Las secciones incorporadas reflejan la estructura prevista para la publicación progresiva de contenidos, los cuales serán ampliados y actualizados de manera gradual.
                </p>
                <p>
                    La <strong>Universidad Nacional de San Luis</strong> continuará trabajando en la carga, organización y mejora de la información, con el objetivo de fortalecer el acceso público, la transparencia activa y la disponibilidad de datos institucionales.
                </p>
            </div>


            <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center gap-2 bg-navy-900 hover:bg-navy-800 text-white font-ui font-semibold text-sm px-8 py-3 rounded transition-colors duration-200">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Volver al inicio
            </a>

        </div>

    </div>
</section>

<?php get_footer(); ?>