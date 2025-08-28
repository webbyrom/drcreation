<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="geo.placename" content="Auvergne-Rhône-Alpes">
    <meta name="robots" content="follow, index, max-image-preview:large, max-video-preview:-1">
    <meta name="googlebot" content="follow, index, max-image-preview:large, max-video-preview:-1">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <?php drcreation_meta_tags(); ?>
    <title><?php the_title(); ?> <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>
    <header id="Drc_header" class="Drc-header">
        <!------ Menu de navigation --------->
        <nav id="Drc_nav_menu" class="Drc-nav-menu container-fluid">
        <?= esc_html(drcreation_primary_nav()); ?>
        </nav>
        
    </header>

    <div id="Drc_primary_content" class="Drc-primary-content">
        <div id="Drc_secondary_content" class="Drc-secondary-content">
            <main id="Drc_main" class="Drc-main">
                