<?php

// Page d'aministration 
function osplaf_add_admin_pages() {
    add_menu_page(__('Paramètres du thème osplaf', 'osplaf'), __('osplaf', 'osplaf'), 'manage_options', 'osplaf-settings', 'osplaf_theme_settings', 'dashicons-admin-settings', 60); 
}

// Structure page d'administration
function osplaf_theme_settings() {
    echo '<h1>' . get_admin_page_title() . '</h1>';

    echo '<form action="options.php" method="post" name="osplaf_settings">';

    echo '<div>';

    settings_fields('osplaf_settings_fields');

    do_settings_sections('osplaf_settings_section');

    submit_button();

    echo '</div>';

    echo '</form>';
}

// Paramètres page d'administration

// Enregistrement en bdd
function osplaf_settings_register() {
    register_setting('osplaf_settings_fields', 'osplaf_settings_fields', 'osplaf_settings_fields_validate');
    add_settings_section('osplaf_settings_section', __('Paramètres', 'osplaf'), 'osplaf_settings_section_introduction', 'osplaf_settings_section');
    add_settings_field('osplaf_settings_field_introduction', __('Introduction', 'osplaf'), 'osplaf_settings_field_introduction_output', 'osplaf_settings_section', 'osplaf_settings_section');
  }

// Label du champ introduction
function osplaf_settings_section_introduction() {
    echo __('Paramètrez les options de votre thème.', 'osplaf');
}

// Validation avant enregistrement
function osplaf_settings_fields_validate($inputs) {  
    if(isset($_POST) && !empty($_POST)) { 
      if(isset($_POST['osplaf_settings_field_introduction']) && !empty($_POST['osplaf_settings_field_introduction'])) {
        update_option('osplaf_settings_field_introduction', $_POST['osplaf_settings_field_introduction']);
      }
    }

    return $inputs;
  }

// Affichage du texte du champ dans la page administration
function osplaf_settings_field_introduction_output() {
    $value = get_option('osplaf_settings_field_introduction');
    
    echo '<input name="osplaf_settings_field_introduction" type="text" value="'.$value.'" />';
}