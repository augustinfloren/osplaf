<?php 

// Barre de contrôle WP
function osplaf_support () {
    add_theme_support('title-tag');
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

// ========== INCLUDES ==========
// Page d'administration
require_once get_template_directory() . '/includes-functions/administration-page.php';

// ========== ACTIONS ==========
// Barre WP
add_action('after_setup_theme', 'osplaf_support');

// Enregistrement paramètres d'administration
add_action('admin_init', 'osplaf_settings_register');

// Ajout page administration
add_action('admin_menu', 'osplaf_add_admin_pages');

// Enregistrement scripts ou styles
add_action('wp_enqueue_scripts', 'osplaf_register_assets', 999);