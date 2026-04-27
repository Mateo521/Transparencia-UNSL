</main>
<section class="spikes"></section>
<footer class="bg-navy-950 border-t border-navy-900 pt-16 pb-8 mt-auto">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">

            <div class="md:col-span-1">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="block mb-6">
                    <span class="block font-ui text-[10px] font-bold tracking-[0.2em] text-navy-400 uppercase mb-1">Universidad Nacional de San Luis</span>
                    <span class="block font-display text-2xl font-bold text-white">Portal de Transparencia</span>
                </a>
                <p class="font-sans text-sm text-navy-300  mb-6">
                    Garantizando el derecho de acceso a la información pública, promoviendo la participación ciudadana y fortaleciendo la rendición de cuentas.
                </p>
            </div>

            <div class="md:col-span-1">
                <h3 class="font-ui text-sm font-semibold uppercase tracking-wider text-white mb-6">Enlaces Rápidos</h3>
                <ul class="space-y-3 font-sans text-sm text-navy-300">
                    <li><a href="<?php echo esc_url(home_url('/transparencia-activa')); ?>" class="hover:text-white transition-colors">Transparencia Activa</a></li>
                    <li><a href="<?php echo esc_url(home_url('/transparencia-proactiva')); ?>" class="hover:text-white transition-colors">Transparencia Proactiva</a></li>
                    <li><a href="<?php echo esc_url(home_url('/portal-de-datos-abiertos')); ?>" class="hover:text-white transition-colors">Portal de Datos Abiertos</a></li>
                    <li><a href="<?php echo esc_url(home_url('/solicitud-de-informacion')); ?>" class="hover:text-white transition-colors">Solicitud de Información</a></li>
                </ul>
            </div>

            <div class="md:col-span-1">
                <h3 class="font-ui text-sm font-semibold uppercase tracking-wider text-white mb-6">Universidad Nacional de San Luis</h3>
                <ul class="space-y-4 font-sans text-sm text-navy-300">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-navy-500 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Ejército de los Andes 950<br />San Luis, Argentina</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-navy-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                        <a href="https://www.unsl.edu.ar/" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">www.unsl.edu.ar</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-navy-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="https://www.unsl.edu.ar/index.php/menu/institucional/contacto" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">Contacto Institucional</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="pt-8 border-t border-navy-800 flex flex-col md:flex-row justify-between items-center gap-4 text-xs font-sans text-navy-400">
            <div>
                &copy; <?php echo date('Y'); ?> Universidad Nacional de San Luis. Todos los derechos reservados.
            </div>
            <div class="flex space-x-6">
                <a href="https://www.argentina.gob.ar/normativa/nacional/ley-27275-265949" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">Ley Nº 27.275</a>
                <a href="https://www.argentina.gob.ar/aaip" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">Agencia de Acceso a la Información</a>
            </div>
        </div>

    </div>
</footer>
<style>
    .spikes {
        position: relative;
        background: #f8f7f4;
        height: 30px;
    }

    .spikes::after {
        content: '';
        position: absolute;
        right: 0;
        left: -0%;
        top: 100%;
        z-index: 10;
        display: block;
        height: 40px;
        background-size: 40px 100%;
        background-image: linear-gradient(135deg, #f8f7f4 25%, transparent 25%), linear-gradient(225deg, #f8f7f4 25%, transparent 25%);
        background-position: 0 0;
    }
</style>
<?php wp_footer(); ?>
</body>

</html>