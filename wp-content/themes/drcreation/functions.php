<?php defined ('ABSPATH') or die('No script kiddies please!');
/*****
 * 
 * fichiers pour les fonctions du thème
 * Theme: Drcreation
 * Version: 1.0.0
 * 
 */

 // fichiers requis pour le fonctionnement
//require_once get_template_directory() . '/inc/menus.php';
require_once ('inc/menus.php');
require_once ('inc/assets.php');
 //fonctions Principales du thème

 add_action('after_setup_theme', function (){
    add_theme_support('title-tag', 'Mesreflexesetmoi');
    add_theme_support('menus');
    add_theme_support('html5', [
        'commnet-list', 
        'comment-form',
        'search-form',
        'gallery',
        'caption',
        'style',
        'script',
        'navigation-widgets'
    ]);
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array(
        'aside',
        'gallery',
        'link',
        'quote',
        'audio',
        'video',
        'image',
    ));
    add_theme_support('custom-header');
    add_theme_support('automatic-feed-links');
    add_theme_support('wp-block-styles');
    add_theme_support('custom-logo', array(
        'heigth'    => 100,
        'width' => 400,
        'flex-height'   => true,
        'flex-width'    => true,
        'header-text'   => array('site-title', 'site-description')
    ));
    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    //Add support for full and wide align images
    add_theme_support('align-wide');
 });

 /****
 * fonctions pour les mméta description 
 * 
 * 
 * 
 */
function drcreation_meta_tags() {
    global $post;

    // Détermination de la description
    if ( is_front_page() || is_home() ) {
        $meta_description = get_bloginfo('description');
    } elseif ( get_post_meta( get_the_ID(), 'meta_description', true ) ) {
        $meta_description = get_post_meta( get_the_ID(), 'meta_description', true );
    } else {
        $meta_description = wp_trim_words( get_the_content(), 20, '...' );
    }

    // Détermination de l'image de partage
    $default_image = 'https://danielcréation:7890/wp-content/uploads/2025/02/screenshot.png';
    $meta_image = get_the_post_thumbnail_url(get_the_ID(), 'large') ?: $default_image;

    // Détermination du titre
    $meta_title = get_the_title() . ' | ' . get_bloginfo('name');

    // Détermination du type de contenu pour Open Graph
    $og_type = (is_single() || is_page()) ? 'article' : 'website';

    ?>
    <!-- Meta SEO -->
    <meta name="description" content="<?php echo esc_attr($meta_description); ?>">
    <meta name="author" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <!-- Open Graph (Facebook, LinkedIn, etc.) -->
    <meta property="og:locale" content="fr-FR">
    <meta property="og:title" content="<?php echo esc_attr($meta_title); ?>">
    <meta property="og:type" content="<?php echo esc_attr($og_type); ?>">
    <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
    <meta property="og:image" content="<?php echo esc_url($meta_image); ?>">
    <meta property="og:description" content="<?php echo esc_attr($meta_description); ?>">
    <meta property="og:site_name" content="<?php echo esc_attr(get_bloginfo('name')); ?>">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_attr($meta_title); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr($meta_description); ?>">
    <meta name="twitter:image" content="<?php echo esc_url($meta_image); ?>">
    <meta name="twitter:site" content="@votrecompte">

    <!-- Balises supplémentaires -->
    <meta name="geo.region" content="FR">
    <meta name="geo.placename" content="Auvergne-Rhône-Alpes">
    <meta name="geo.position" content="45.764043;4.835659">
    <meta name="ICBM" content="45.764043, 4.835659">
    <link rel="canonical" href="<?php echo esc_url(get_permalink()); ?>">
    <?php
}
