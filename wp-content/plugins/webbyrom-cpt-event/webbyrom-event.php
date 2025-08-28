<?php
/**
 * Plugin Name: WebbyRom Créations
 * Description: Gère le CPT « création » et les taxonomies associées « tricot » et « crochet ».
 * Version: 1.0.0
 * Author: Romain Fourel
 * Text Domain: webbyrom-cpt
 */
if ( ! defined( 'ABSPATH' ) ) exit;



define( 'WEBBYROM_TEXT_DOMAIN', 'webbyrom-cpt' );

add_action( 'init', 'webbyrom_register_creations_and_taxonomies' );

function webbyrom_generate_labels($type, $singular, $plural, $text_domain) {
    $common = [
        'edit_item'                  => 'Modifier %s',
        'new_item'                   => 'Nouvel(le) %s',
        'view_item'                  => 'Voir %s',
        'view_items'                 => 'Voir les %s',
        'search_items'               => 'Rechercher des %s',
        'not_found'                  => 'Aucun(e) %s trouvé(e)',
        'not_found_in_trash'         => 'Aucun(e) %s trouvé(e) dans la corbeille',
        'all_items'                  => 'Toutes les %s',
        'archives'                   => 'Archives des %s',
        'attributes'                 => 'Attributs de %s',
        'insert_into_item'           => 'Insérer dans %s',
        'uploaded_to_this_item'      => 'Téléversé dans %s',
        'filter_items_list'          => 'Filtrer la liste des %s',
        'items_list_navigation'      => 'Navigation de la liste des %s',
        'items_list'                 => 'Liste des %s',
        'item_published'             => '%s publié(e)',
        'item_updated'               => '%s mis(e) à jour',
        'add_new_item'               => 'Ajouter %s',
        'update_item'                => 'Mettre à jour %s',
        'parent_item'                => '%s parent',
        'parent_item_colon'          => '%s parent :',
        'new_item_name'              => 'Nouveau nom de %s',
        'separate_items_with_commas' => 'Séparer les %s avec des virgules',
        'add_or_remove_items'        => 'Ajouter ou supprimer des %s',
        'choose_from_most_used'      => 'Choisir parmi les %s les plus utilisés',
        'no_terms'                   => 'Aucun terme',
        'most_used'                  => 'Les plus utilisés',
        'back_to_items'              => '&larr; Retour aux %s',
    ];

    $labels = [
        'name'          => _x($plural, ucfirst($type) . ' General Name', $text_domain),
        'singular_name' => _x($singular, ucfirst($type) . ' Singular Name', $text_domain),
    ];

    foreach ($common as $key => $format) {
        $is_plural = str_contains($key, 'items') || str_contains($key, 'archives') || str_contains($key, 'list');
        $labels[$key] = sprintf(__($format, $text_domain), strtolower($is_plural ? $plural : $singular));
    }

    return $labels;
}

function webbyrom_register_creations_and_taxonomies() {
    $creation_labels = webbyrom_generate_labels('post type', 'Création', 'Créations', WEBBYROM_TEXT_DOMAIN);

    register_post_type( 'creation', [
        'label'               => __('Création', WEBBYROM_TEXT_DOMAIN),
        'labels'              => $creation_labels,
        'menu_icon'           => 'dashicons-calendar-alt',
        'public'              => true,
        'hierarchical'        => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'show_in_nav_menu'    => true,
        'show_in_admin_bar'   => true,
        'query_var'           => true,
        'rewrite'             => [ 'slug' => 'creation', 'with_front' => false ],
        'taxonomies'          => ['tricot', 'crochet'],
        'supports'            => ['title', 'editor', 'custom-fields', 'page-attributes', 'comments', 'author', 'excerpt', 'thumbnail'],
        'show_in_rest'        => true,
        'has_archive'         => true,
    ]);

    $tricot_labels = webbyrom_generate_labels('taxonomy', 'Tricot', 'Tricots', WEBBYROM_TEXT_DOMAIN);

    register_taxonomy('tricot', 'creation', [
        'labels'             => $tricot_labels,
        'show_in_rest'       => true,
        'show_ui'            => true,
        'hierarchical'       => true,
        'public'             => true,
        'show_admin_column'  => true,
        'query_var'          => true,
        'rewrite'            => [ 'slug' => 'tricot', 'hierarchical' => true ],
        'show_in_menu'       => true,
        'show_in_nav_menu'   => true,
        'show_in_admin_bar'  => true,
        'exclude_from_search'=> false,
        'show_in_quick_edit' => true,
    ]);

    $crochet_labels = webbyrom_generate_labels('taxonomy', 'Crochet', 'Crochets', WEBBYROM_TEXT_DOMAIN);

    register_taxonomy('crochet', 'creation', [
        'labels'             => $crochet_labels,
        'show_in_rest'       => true,
        'show_ui'            => true,
        'hierarchical'       => true,
        'public'             => true,
        'show_admin_column'  => true,
        'query_var'          => true,
        'rewrite'            => [ 'slug' => 'crochet', 'hierarchical' => true ],
        'show_in_menu'       => true,
        'show_in_nav_menu'   => true,
        'show_in_admin_bar'  => true,
        'exclude_from_search'=> false,
        'show_in_quick_edit' => true,
    ]);
}

register_activation_hook(__FILE__, 'flush_rewrite_rules');
register_deactivation_hook(__FILE__, 'flush_rewrite_rules');

require_once plugin_dir_path(__FILE__) . '/inc/event-images.php';
