<?php

function soma_enqueue_scripts_input(){
  $postfix = ( defined( 'SCRIPT_DEBUG' ) && true === SCRIPT_DEBUG ) ? '' : '.min';
  ?>

  <?php

  $js = array(
    'js_global' => [
      'jquery-3.2.1.min',
      'components/script',
      'components/menu-nav',
      'components/mask',
      'jquery.mask',
    ],
    'js_home' => [
    ],
  );

  //JS
  foreach ($js['js_global'] as $item) {
      wp_enqueue_script( $item, get_template_directory_uri() . "/build/js/" . "$item.js", array(), '' );
  }

  if((is_home())){

    foreach ($js['js_home'] as $item) {
      wp_enqueue_script( $item, get_template_directory_uri() . "/build/js/" . "$item.js", array(), '' );
    }
  }

  //CSS
  wp_enqueue_style( 'global', get_template_directory_uri() . "/build/css/global.css", array(), somadev_VERSION );

  $translation_array = array(
    'siteURL' => get_site_url(),
    'siteUrlTemplate' => get_bloginfo('template_url'),
  );
  wp_localize_script( 'jquery-3.2.1.min', 'somaData', $translation_array );

}

function soma_activate_scripts(){

  echo '<script>';

    //Scripts Aqui

  echo '</script>';

}

add_action('wp_enqueue_scripts', 'soma_enqueue_scripts_input');
add_action('wp_footer', 'soma_activate_scripts');