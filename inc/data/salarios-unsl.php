<?php

/**
 * Simulador Salarial UNSL — Montos y porcentajes.
 *
 * ============================================================
 *  ACTUALIZAR CADA MES. Este es el ÚNICO archivo que hay que
 *  tocar para poner al día la calculadora. No hace falta
 *  modificar PHP, CSS ni JavaScript.
 * ============================================================
 *
 * Fuente: Instructivo de Liquidación Docentes y No Docentes.
 *
 * Los importes van sin separador de miles y con punto decimal.
 * Correcto:   1948581.14
 * Incorrecto: 1.948.581,14
 *
 * @package Transparencia_UNSL
 */

defined('ABSPATH') || exit;

return [

    /* Se muestra en el encabezado del recibo simulado. */
    'periodo' => 'Junio 2026',

    /* ------------------------------------------------------------------
     * DOCENTES UNIVERSITARIOS
     * ------------------------------------------------------------------ */
    'docentes' => [

        /* Sueldo básico (cod. 1) por dedicación y categoría — Punto 1.a */
        'basicos' => [
            'Exclusiva' => [
                'Profesor Titular'           => 1948581.14,
                'Profesor Asociado'          => 1733955.09,
                'Profesor Adjunto'           => 1520087.32,
                'Jefe de Trabajos Prácticos' => 1305455.41,
                'Ayudante de 1ra.'           => 1090603.69,
            ],
            'Semiexclusiva' => [
                'Profesor Titular'           => 974292.19,
                'Profesor Asociado'          => 866976.21,
                'Profesor Adjunto'           => 760036.95,
                'Jefe de Trabajos Prácticos' => 652726.77,
                'Ayudante de 1ra.'           => 545300.21,
            ],
            'Simple' => [
                'Profesor Titular'           => 487144.76,
                'Profesor Asociado'          => 433482.17,
                'Profesor Adjunto'           => 380014.62,
                'Jefe de Trabajos Prácticos' => 326359.56,
                'Ayudante de 1ra.'           => 272645.26,
                'Ayudante de 2da.'           => 218119.70,
            ],
        ],

        /* Ad. por Antigüedad (cod. 6): % sobre el básico. */
        'antiguedad' => [
            ['rango' => '0 a 4 años',    'pct' => 20],
            ['rango' => '5 a 6 años',    'pct' => 30],
            ['rango' => '7 a 9 años',    'pct' => 40],
            ['rango' => '10 a 11 años',  'pct' => 50],
            ['rango' => '12 a 14 años',  'pct' => 60],
            ['rango' => '15 a 16 años',  'pct' => 70],
            ['rango' => '17 a 19 años',  'pct' => 80],
            ['rango' => '20 a 23 años',  'pct' => 100],
            ['rango' => '24 años o más', 'pct' => 120],
        ],

        /* Bonificación por Título (cod. 18): % sobre el básico. */
        'titulo' => [
            ['nombre' => 'Sin posgrado',    'pct' => 0],
            ['nombre' => 'Especialización', 'pct' => 5],
            ['nombre' => 'Maestría',        'pct' => 12.5],
            ['nombre' => 'Doctorado',       'pct' => 20],
        ],

        /* Garantía salarial (remunerativa, no bonificable) — Punto 1.b
         * Se liquida la diferencia entre el piso y (básico + antigüedad + título). */
        'garantia' => [
            'pisos' => [
                'Exclusiva'     => 1497941.97,
                'Semiexclusiva' => 748970.98,
                'Simple'        => 374485.49,
            ],
            'categorias_alcanzadas' => ['Ayudante de 1ra.'],
        ],

        /* Descuentos: % sobre el bruto total. */
        'descuentos' => [
            ['cod' => 55, 'nombre' => 'Jubilación',                     'pct' => 11],
            ['cod' => 56, 'nombre' => 'Régimen especial para docentes',  'pct' => 2],
            ['cod' => 57, 'nombre' => 'Ley 26508',                       'pct' => 2],
            ['cod' => 58, 'nombre' => 'INSSJP',                          'pct' => 3],
            ['cod' => 71, 'nombre' => 'Obra Social',                     'pct' => 3],
        ],
    ],

    /* ------------------------------------------------------------------
     * NODOCENTES (Dto. 366/06)
     * ------------------------------------------------------------------ */
    'nodocentes' => [

        /* Sueldo básico (cod. 1) por categoría — Punto 3.a */
        'basicos' => [
            1 => 2513777.65,
            2 => 2094818.10,
            3 => 1742911.25,
            4 => 1449635.34,
            5 => 1206616.97,
            6 => 1005500.59,
            7 => 837926.01,
        ],

        /* Ad. por Antigüedad (cod. 6): % del básico por cada año. */
        'antiguedad_pct_por_anio' => 2,
        'antiguedad_max_anios'    => 45,

        /* Bonificación por Título (cod. 18): % sobre el básico.
         * ATENCIÓN: valores pendientes de confirmar contra el instructivo. */
        'titulo' => [
            ['nombre' => 'Sin título',                           'pct' => 0],
            ['nombre' => 'Secundario',                           'pct' => 10],
            ['nombre' => 'Tecnicatura en Gestión Universitaria', 'pct' => 20],
            ['nombre' => 'Grado',                                'pct' => 25],
            ['nombre' => 'Posgrado',                             'pct' => 25],
        ],

        /* Permanencia en la categoría (cod. 14) — Art. 64
         * % de la diferencia con la categoría inmediata superior. */
        'permanencia' => [
            ['anios' => 2, 'pct' => 10],
            ['anios' => 4, 'pct' => 25],
            ['anios' => 6, 'pct' => 45],
            ['anios' => 8, 'pct' => 70],
        ],

        /* Garantía salarial: suma fija NO remunerativa por categoría — Punto 3.b */
        'garantia' => [
            4 => 70000,
            5 => 100000,
            6 => 150000,
            7 => 220000,
        ],
        'garantia_lleva_descuentos' => false,

        /* Descuentos: % sobre el bruto total. */
        'descuentos' => [
            ['cod' => 55, 'nombre' => 'Jubilación',  'pct' => 11],
            ['cod' => 57, 'nombre' => 'Ley 26508',   'pct' => 2],
            ['cod' => 58, 'nombre' => 'INSSJP',      'pct' => 3],
            ['cod' => 71, 'nombre' => 'Obra Social', 'pct' => 3],
        ],
    ],
];
