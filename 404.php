<?php
/**
 * The template for displaying 404 pages (not found)
 */
get_header();
?>

<!-- HERO 404 -->
<section class="relative pt-40 pb-24 sm:pt-48 sm:pb-32 overflow-hidden flex flex-col justify-center min-h-[70vh]">
    
    <div class="absolute inset-0 z-0">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fachada-2.jpg" alt="Fondo UNSL" class="w-full h-full object-cover object-center"  />
        <div class="absolute inset-0 bg-navy-950/90 mix-blend-multiply"></div>

    </div>

    <div class="relative z-10 max-w-3xl mx-auto px-6 sm:px-10 text-center">
        
        <p class="font-ui text-navy-300 text-sm font-bold uppercase tracking-[0.2em] mb-4 drop-shadow">
            Error 404
        </p>
        
        <h1 class="font-display text-5xl sm:text-6xl font-bold text-white leading-tight mb-6 drop-shadow-md">
            Página no encontrada
        </h1>
        
        <p class="font-sans text-navy-200 text-lg leading-relaxed mb-10 max-w-2xl mx-auto drop-shadow-sm">
            Lo sentimos, no pudimos encontrar el documento o la sección que estás buscando. Es posible que el enlace sea incorrecto, que el documento haya sido actualizado, o que haya sido reubicado.
        </p>
        
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-white text-navy-900 hover:bg-stone-100 hover:scale-105 font-ui font-semibold text-sm px-8 py-3.5 rounded transition-all duration-200">
                Volver al inicio
            </a>
            <a href="<?php echo esc_url(home_url('/solicitud-de-informacion')); ?>" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-navy-800 text-white hover:bg-navy-700 border border-navy-700 font-ui font-semibold text-sm px-8 py-3.5 rounded transition-all duration-200">
                Solicitar información
            </a>
        </div>

    </div>
</section>

<section class="bg-stone-50 py-16 border-t border-stone-200">
    <div class="max-w-5xl mx-auto px-6 sm:px-10 text-center">
        
        <h2 class="font-display text-2xl font-bold text-navy-900 mb-8">Enlaces sugeridos</h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            
            <a href="<?php echo esc_url(home_url('/transparencia-activa')); ?>" class="bg-white p-5 rounded border border-stone-200 hover:border-navy-400 hover:shadow-sm transition-all group text-center flex flex-col justify-center min-h-[100px]">
                <h3 class="font-ui font-semibold text-navy-900 text-sm group-hover:text-navy-700 transition-colors uppercase tracking-wide mb-1">Transparencia Activa</h3>
                <p class="font-sans text-xs text-stone-500">Información pública obligatoria</p>
            </a>

            <a href="<?php echo esc_url(home_url('/transparencia-proactiva')); ?>" class="bg-white p-5 rounded border border-stone-200 hover:border-navy-400 hover:shadow-sm transition-all group text-center flex flex-col justify-center min-h-[100px]">
                <h3 class="font-ui font-semibold text-navy-900 text-sm group-hover:text-navy-700 transition-colors uppercase tracking-wide mb-1">Transparencia Proactiva</h3>
                <p class="font-sans text-xs text-stone-500">Gestión institucional</p>
            </a>

            <a href="<?php echo esc_url(home_url('/organigrama-autoridades-y-personal')); ?>" class="bg-white p-5 rounded border border-stone-200 hover:border-navy-400 hover:shadow-sm transition-all group text-center flex flex-col justify-center min-h-[100px]">
                <h3 class="font-ui font-semibold text-navy-900 text-sm group-hover:text-navy-700 transition-colors uppercase tracking-wide mb-1">Autoridades</h3>
                <p class="font-sans text-xs text-stone-500">Organigrama y resoluciones</p>
            </a>

        </div>

        <!--div class="mt-12 text-center">
            <p class="font-sans text-sm text-stone-500">
                Si crees que esto es un error del sistema, puedes contactar al <a href="mailto:soporte@unsl.edu.ar" class="text-navy-600 font-medium hover:underline">soporte técnico</a>.
            </p>
        </div-->

    </div>
</section>

<?php get_footer(); ?>