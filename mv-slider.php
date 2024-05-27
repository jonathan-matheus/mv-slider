<?php

/**
 * Plugin Name: MV Slider
 * Description: Um simples plugin de slider para WordPress
 * Version: 1.0.0
 * Requires at least: 5.6
 * Author: Jonathan Matheus
 * Author URI: https://github.com/jonathan-matheus
 * License: GPLv2
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: mv-slider
 * Domain Path: /languages
 */

/*
MV Slider is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

MV Slider is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with MV Slider. If not, see http://www.gnu.org/licenses/gpl-2.0.html
*/

// Caso o código esteja sendo executado diretamente, aborte a execução
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Classe principal do plugin com seu construtor
 */
if (!class_exists('MV_Slider')) {
    class MV_Slider
    {
        function __construct()
        {
            // Define as constantes para o plugin
            $this->define_constants();
        }

        public function define_constants()
        {
            // Constante para o caminho absoluto do plugin
            define('MV_SLIDER_PATH', plugin_dir_path(__FILE__));

            // Constante para o caminho absoluto do URL do plugin
            define('MV_SLIDER_URL', plugin_dir_url(__FILE__));

            // Constante que define a versão do plugin
            define('MV_SLIDER_VERSION', '1.0.0');
        }
    }
}

/**
 * Instancie a classe MV Slider
 */
if (class_exists('MV_Slider')) {
    $mv_slider = new MV_Slider();
}
