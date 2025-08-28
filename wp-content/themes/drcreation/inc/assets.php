<?php 
defined('ABSPATH') or die('Acces non autorisé.');
/**
 * Enqueue scripts and styles.
 * Theme Name: Drcreation
 * @package drcreation
 * @since 1.0
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 */

 function drc_scripts() {
  //styles pour le front end
  wp_enqueue_style('theme-styles', get_template_directory_uri() . '/build/style.css', array(), '1.0', 'all');
 }
  add_action('wp_enqueue_scripts', 'drc_scripts');
  