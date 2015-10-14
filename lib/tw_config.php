<?php

$settings = array(

  'available_scripts'      => array(
    'jquery'               => array('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js','1.11.1'),
    'plugins'              => array('/assets/js/vendor.min.js'),
    'scripts'              => array('/assets/js/app.min.js'),
  ),

  'default_scripts'        => array(
    //'jquery',
    'plugins',
    'scripts',
  ),

  'available_stylesheets'  => array(
    'theme'                => array('/assets/css/site.theme.css'),
    'vendor'               => array('/assets/css/site.plugins.css'),
  ),

  'default_stylesheets'    => array(
    'vendor',
    'theme',
  ),

  'deregister_scripts' => array('jquery','l10n'),

);

Themewrangler::set_defaults( $settings );

 if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 9);
 function my_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", array(), '1.0.0', false);
    wp_enqueue_script('jquery');
 }