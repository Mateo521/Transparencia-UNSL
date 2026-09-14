<?php

/**
 * Template Name: Inicio Transparencia
 */
get_header();
?>
<section class="bg-navy-900 py-20 relative h-screen sm:py-28">
    <img class="absolute size-full left-0 object-cover  object-center top-0 z-0" src="http://192.168.103.3/wp-content/themes/Carreras-UNSL/imagenes/carreras.jpg" alt="">
    <div class="bg-gradient-to-r from-[#11153B] to-[#003D54]/50 absolute z-1 size-full left-0 top-0"></div>

    <h1 class="   max-w-7xl top-[40%] px-6 mx-auto text-4xl md:text-7xl  bg-gradient-to-r from-cyan-50 to-blue-300 bg-clip-text text-transparent  z-10 relative  font-bold mb-8">
        PORTAL <br> DE TRANSPARENCIA
    </h1>
</section>
<div class="max-w-7xl mx-auto relative text-black z-10 px-6 sm:px-10 lg:px-12">
    <!--div class="w-14 h-[3px] bg-navy-400 mb-8 rounded-full"></div-->
    <div class="font-sans py-12 text-base sm:text-lg text-justify space-y-5 max-w-7xl">
        <p>
            La Universidad Nacional de San Luis (UNSL) pone a disposición de la comunidad su Portal de Transparencia, en el marco de lo establecido por la
            <a href="https://www.argentina.gob.ar/normativa/nacional/ley-27275-265949" target="_blank" rel="noopener noreferrer" class="text-navy-300 underline underline-offset-2 decoration-navy-500 hover:text-slate-900 hover:decoration-navy-300 transition-colors">
                Ley Nº 27.275 de Acceso a la Información Pública
            </a>,
            cuyo objetivo es garantizar el derecho de acceso a la información pública, promover la participación ciudadana y fortalecer la transparencia en la gestión pública.
        </p>
        <p>
            Este Portal ofrece un acceso claro, estructurado y comprensible a la información institucional, eliminando barreras que dificulten su consulta y reutilización por parte de la ciudadanía.
        </p>
        <p>
            Asimismo, la iniciativa se enmarca en los principios de Gobierno Abierto, promoviendo la rendición de cuentas y el vínculo entre la universidad y la sociedad. A tal fin, el portal se organiza en torno a ejes como la transparencia activa, la transparencia proactiva, los datos abiertos y el acceso a la información pública, consolidándose como un espacio que facilita el conocimiento de las acciones y políticas llevadas adelante por la institución.
        </p>
    </div>
</div>
<section class="bg-stone-50 py-12 botones    border-t border-stone-200">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            <a href="<?php echo home_url('/transparencia-activa'); ?>" class="card-item group bg-white border border-stone-200 rounded-lg overflow-hidden hover:border-navy-400 hover:shadow-md transition-all duration-200 flex flex-col">
                <!--div class="h-1 w-full bg-navy-700 group-hover:bg-navy-500 transition-colors duration-200"></div-->
                <div class="flex flex-col flex-1">
                    <div class="bg-[#353F67]">
                        <div class="flex items-center gap-2.5 p-5">
                            <svg class="w-10 h-10 shrink-0 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6.5A2.5 2.5 0 0 1 6.5 4H20v15H6.5A2.5 2.5 0 0 0 4 21.5v-15Z" />
                                <path stroke-linecap="round" d="M4 6.5v15M8 8h8m-8 4h8" />
                            </svg>
                            <h3 class="font-ui text-base font-semibold text-white leading-snug">
                                Transparencia Activa
                            </h3>
                        </div>
                        <p class="bg-[#EAF5FB] font-sans text-sm text-stone-500 px-5 py-3 flex-1 h-full">
                            Información puesta a disposición de la comunidad en cumplimiento del Artículo 32 de la Ley 27.275
                        </p>
                    </div>
                </div>
            </a>
            <a href="<?php echo home_url('/transparencia-proactiva'); ?>" class="js-modal-wip card-item group bg-white border border-stone-200 rounded-lg overflow-hidden hover:border-navy-400 hover:shadow-md transition-all duration-200 flex flex-col">
                <div class="flex flex-col flex-1">
                    <div class="bg-[#353F67]">
                        <div class="flex items-center gap-2.5 p-5">
                            <svg class="w-10 h-10 shrink-0 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.5 21h13M12 21V7m0 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm2-1.8c3.073.661 2.467 2.8 5 2.8M5 8c3.359 0 2.192-2.115 5.012-2.793M7 9.556V7.75m0 1.806-1.95 4.393a.773.773 0 0 0 .37.962.785.785 0 0 0 .362.089h2.436a.785.785 0 0 0 .643-.335.776.776 0 0 0 .09-.716L7 9.556Zm10 0V7.313m0 2.243-1.95 4.393a.773.773 0 0 0 .37.962.786.786 0 0 0 .362.089h2.436a.785.785 0 0 0 .643-.335.775.775 0 0 0 .09-.716L17 9.556Z" />
                            </svg>

                            <h3 class="font-ui text-base font-semibold text-white leading-snug">
                                Transparencia Proactiva
                            </h3>
                        </div>
                        <p class="bg-[#EAF5FB] font-sans text-sm text-stone-500 px-5 py-3 flex-1 h-full">
                            Información relevante relacionada a la gestión institucional no comprendida en el Artículo 32 de la Ley 27.275
                        </p>
                    </div>
                </div>
            </a>
            <a href="https://datosabiertos.unsl.edu.ar/organization/universidad-nacional-de-san-luis" target="_blank" rel="noopener noreferrer" class="js-modal-wip card-item group bg-white border border-stone-200 rounded-lg overflow-hidden hover:border-navy-400 hover:shadow-md transition-all duration-200 flex flex-col">
                <div class="flex flex-col flex-1">
                    <div class="bg-[#353F67]">
                        <div class="flex items-center gap-2.5 p-5">
                            <svg class="w-10 h-10 shrink-0 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                                <circle cx="12" cy="12" r="8.5" />
                                <path stroke-linecap="round" d="M3.5 12h17M12 3.5c2.1 2.3 3.2 5.1 3.2 8.5s-1.1 6.2-3.2 8.5c-2.1-2.3-3.2-5.1-3.2-8.5S9.9 5.8 12 3.5Z" />
                            </svg>
                            <h3 class="font-ui text-base font-semibold text-white leading-snug">
                                Portal de Datos Abiertos
                            </h3>
                        </div>
                        <p class="bg-[#EAF5FB] font-sans text-sm text-stone-500 px-5 py-3 flex-1 h-full">
                            Conjuntos de datos publicados en formato abierto y reutilizables para ser usados por la comunidad para diferentes objetivos.
                        </p>
                    </div>
                </div>
            </a>
            <a href="<?php echo home_url('/solicitud-de-informacion'); ?>" class="card-item group bg-white border border-stone-200 rounded-lg overflow-hidden hover:border-navy-400 hover:shadow-md transition-all duration-200 flex flex-col">
                <!--div class="h-1 w-full bg-navy-700 group-hover:bg-navy-500 transition-colors duration-200"></div-->
                <div class=" flex flex-col flex-1">
                    <div class="bg-[#353F67]">
                        <div class="flex items-center gap-2.5 p-5">
                            <svg class="w-10 h-10 shrink-0 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 7h1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h11.5M7 14h6m-6 3h6m0-10h.5m-.5 3h.5M7 7h3v3H7V7Z" />
                            </svg>

                            <h3 class="font-ui text-base font-semibold text-white leading-snug">
                                Solicitud de Información
                            </h3>
                        </div>
                        <p class="bg-[#EAF5FB] font-sans text-sm text-stone-500 px-5 py-3 flex-1 h-full">
                            Consultas de la comunidad respecto de la Información Pública aún no abierta en las otras secciones.
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<section class="bg-white py-20 sm:py-24 border-t border-stone-200">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 lg:gap-16 items-start">
            <div>
                <p class="font-ui text-stone-500 text-base font-semibold uppercase  mb-4">
                    Contacto institucional
                </p>
                <h2 class="font-display text-[1.65rem]  font-bold text-navy-900 leading-tight">
                    Responsables de acceso a la Información Pública en la UNSL
                </h2>
                <!--p class="font-sans text-stone-500 text-sm mt-4 ">
                    En caso de alguna duda respecto de la información aquí publicada podés contactarte:
                </p-->
            </div>
            <div class="lg:col-span-2">
                <dl class="divide-y divide-stone-100">
                    <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-6">
                        <dt class="font-ui text-base font-semibold uppercase tracking-wide text-stone-400">Nombre y apellido</dt>
                        <dd class="mt-1 sm:mt-0 sm:col-span-2">
                            <p class="font-sans text-navy-900 font-medium">Eduardo Enrique Muruzeta Vilar</p>
                            <p class="font-sans text-stone-400 text-base mt-0.5">(Designación por <a href="https://transparencia.unsl.edu.ar/wp-content/uploads/2026/07/RR933-2026.pdf" target="_blank" rel="noopener noreferrer" class="text-stone-400 underline hover:text-stone-600">Resolución Rectoral N.º 933/2026</a> – 21/07/2026)</p>
                        </dd>
                    </div>
                    <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-6">
                        <dt class="font-ui text-base font-semibold uppercase tracking-wide text-stone-400">Nombre y apellido</dt>
                        <dd class="mt-1 sm:mt-0 sm:col-span-2">
                            <p class="font-sans text-navy-900 font-medium">Antonella Di Gennaro</p>
                            <p class="font-sans text-stone-400 text-base mt-0.5">(Designación por <a href="https://transparencia.unsl.edu.ar/wp-content/uploads/2026/07/RR933-2026.pdf" target="_blank" rel="noopener noreferrer" class="text-stone-400 underline hover:text-stone-600">Resolución Rectoral N.º 933/2026</a> – 21/07/2026)</p>
                        </dd>
                    </div>
                    <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-6">
                        <dt class="font-ui text-base font-semibold uppercase tracking-wide text-stone-400">Correo electrónico</dt>
                        <dd class="mt-1 sm:mt-0 sm:col-span-2">
                            <a href="mailto:transparencia@email.unsl.edu.ar" class="font-sans text-navy-600 underline underline-offset-2 decoration-navy-300 hover:text-navy-900 hover:decoration-navy-600 transition-colors">
                                transparencia@email.unsl.edu.ar
                            </a>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</section>
<section class="bg-[#353F67]  py-20 sm:py-24">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 lg:gap-16 items-start">
            <div>
                <p class="font-ui text-navy-100 text-base font-semibold uppercase  mb-4">
                    Mecanismo de reclamo
                </p>
                <h2 class="font-display text-3xl sm:text-4xl font-bold text-white leading-tight">
                    ¿Dónde reclamar?
                </h2>
            </div>
            <div class="lg:col-span-2 space-y-6">
                <div class=" pl-6">
                    <p class="font-sans text-navy-200 text-base text-justify">
                        La Agencia de Acceso a la Información Pública (AAIP) es el órgano garante de las Políticas de Transparencia de los organismos. Para realizar un reclamo por falta de respuesta podés
                        <a href="https://www.argentina.gob.ar/servicio/reclamar-por-incumplimiento-de-una-solicitud-de-acceso-la-informacion-publica" target="_blank" rel="noopener noreferrer" class="text-navy-300 underline underline-offset-2 decoration-navy-600 hover:text-white hover:decoration-navy-400 transition-colors">
                            ingresar aquí
                        </a>.
                    </p>
                </div>
                <div class="bg-navy-900 border border-navy-700 rounded-lg p-5">
                    <p class="font-ui text-base font-semibold uppercase tracking-wide text-navy-400 mb-3">Plazos a considerar</p>
                    <div class="flex gap-3 items-start">
                        <p class="font-sans text-navy-200 text-sm text-justify">
                            Tené en cuenta que para realizar un reclamo es necesario que hayan pasado 15 días hábiles desde que realizaste el pedido sin que te hayan solicitado 15 días más para responderte. Tenés que hacerlo dentro de los 40 días hábiles de la fecha prevista para recibir la respuesta.
                        </p>
                    </div>
                </div>
                <p class="font-sans text-justify text-navy-200 text-sm ">
                    Para profundizar en la temática de la transparencia gubernamental y comprender su importancia, la Agencia de Acceso a la Información Pública, pone a disposición un sitio con información y recursos. Asimismo, permite consultar los resultados del Índice de Transparencia, una herramienta que evalúa el grado de cumplimiento de los compromisos asumidos por los organismos en esta materia.
                </p>
                <div class="pt-4">
                    <a href="https://portal.transparencia.gob.ar/" target="_blank" rel="noopener noreferrer"
                        class="inline-flex items-center gap-2.5 bg-white text-navy-900 font-ui font-semibold text-sm px-6 py-3 rounded hover:bg-navy-100 transition-colors duration-150 group">
                        Ingresá al Portal Nacional de Transparencia
                        <svg class="w-4 h-4 text-navy-100 group-hover:translate-x-0.5 transition-transform" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-16 py-4 px-3  flex items-center gap-3 text-stone-500 bg-stone-100 ">
            <svg class="w-5 h-5 text-stone-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <p class="font-ui text-sm">
                Información actualizada a <strong><?php echo esc_html(get_the_modified_date('F \d\e Y', get_queried_object_id())); ?></strong>.
            </p>
        </div>
    </div>
</section>
<?php get_footer(); ?>