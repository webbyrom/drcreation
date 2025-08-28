<?php
defined( 'ABSPATH' ) or die( 'Acces non autorisé.');
/******
 * Gestion des différents menus du thème( footer, main , sidebar)
 * Theme: drcreation
 * Version: 1.0.0
 * 
 * 
 */

 //Menu Principal et footer 
 if (!function_exists('drcreation_register_menu')) {
    function drcreation_register_menu() {

        register_nav_menus([
            'primary' => esc_html__('Primary menu', 'drcreation'),
            'footer' => esc_html__('Footer menu', 'drcreation'),
            
        ]);
    }
    add_action('init', 'drcreation_register_menu');
}

if (!function_exists('drcreation_primary_nav')) {
    function drcreation_primary_nav() {
        wp_nav_menu([
            'theme_location' => 'primary',
            'sort_column' => 'menu_order',
            'container' => 'div',
            'container_class' =>'Drc-collapse',
            'container_id' => 'Drc_collapse',
            'container_aria_label' => 'Drc_m_active',
            'menu_class' => 'Drc-primary-menu-nav nav-menu',
            'menu_id' => 'Drc_primary_menu_nav nav_menu',
            'echo' =>true,
            'before' => '',
            'after' => '',
            'link_before' => '<span>',
            'link_after' => '</span>',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'item_spacing' => 'preserve',
            'depth' => 0,
            'walker' => '',
        ]);
    }
}

/****
 * sidebar pour le footer
 * 
 * 
 * 
 */
add_action('widgets_init', function () {
    register_sidebar([
        'id' => 'Drc_footer_nav',
        'name' => __('Footer sidebar menu', 'drcreation'),
        'class' => 'Drc-footer-nav container-fluid',
        'before_title' => '<div class="Drc-footer-title">',
        'after_title' =>'</div>',
        'before_widget' => '<div class="Drc-footer-widget">',
        'after_widget' => '</div>',
    ]);
});

