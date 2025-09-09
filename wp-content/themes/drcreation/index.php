<?php
defined('ABSPATH') or die('Acces non autorisé.');
/***
 * Theme Name: Drcreation
 * Template Name: Index /pages des articles
 * Version: 1.0
 * Description: Pages des articles du thème Drcreation
 * Index du thème
 */
get_header(); ?>
<section class="dr-slider-post container-fluid">
  <div class="slider-Drc-post container-fluid">
    <!------mettre le slider ici------>
    <?php echo do_shortcode('[metaslider id="131"]'); ?>
  </div>
</section>
<section class="DrPostTitle container-fluid">
  <div class="DrPost-title container-fluid">
    <h1 class="titleDrc"><?php the_title(); ?></h1>
  </div>
</section>
<section class="Dr-post-affichage container-fluid">
  ici mettre les differents post du blog
  voir peut être pour rajouter un filtre par categorie ?
  ajout d"un champ ACF image, Description, temps de fabrication, materiaux utilisés (voir si on les utilise ou pas)
  <?php
  $args_creat = array(
    'post_type' => 'creation',
    'posts_per_page' => -1, // Afficher tous les articles
    'post_status' => 'publish',
    'orderby' => 'date', // Trier par date
    'order' => 'DESC' // Ordre décroissant
  );

  $query_creat = new WP_Query($args_creat);
  if ($query_creat->have_posts()) {
    while ($query_creat->have_posts()) {
      $query_creat->the_post();
      // Afficher le contenu de chaque article
    }
    wp_reset_postdata();
  }
  ?>

</section>


<?php get_footer(); ?>