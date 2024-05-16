<?php 

// Barre de contrôle WP
function osplaf_support () {
    add_theme_support('title-tag');
    add_theme_support('menus');
    register_nav_menu('header', 'Entête du menu');
    register_nav_menu('footer', 'Pied de page');
}

// ===== Styles et Scripts =====
function osplaf_register_assets () {
    // Enregistrement du style de réinitialisation
    wp_enqueue_style('reset', get_template_directory_uri() . '/public/css/reset.css', array(), '1.0.0', 'all');
    // Enregistrement du style principal
    wp_enqueue_style('style', get_stylesheet_uri(), array('reset'), '1.0.0', 'all');
    // Enregistrement du script principal
    wp_enqueue_script('osplaf', get_template_directory_uri() . '/public/js/osplaf.js', array(), '1.0.0', true);
  }

// Ajout classes au li du menu
function osplaf_menu_class ($classes) {
  $classes[]= 'nav-item';
  return $classes;
}

// ========== Includes ==========
require_once get_template_directory() . '/includes-functions/administration-page.php';

// ========== Actions ==========
add_action('after_setup_theme', 'osplaf_support');
add_action('admin_init', 'osplaf_settings_register');
add_action('admin_menu', 'osplaf_add_admin_pages');
add_action('wp_enqueue_scripts', 'osplaf_register_assets', 999);
add_filter('nav_menu_css_class', 'osplaf_menu_class');