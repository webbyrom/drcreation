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
    <?php echo do_shortcode('[metaslider id="65"]'); ?>
  </div>
</section>
<section class="DrPostTitle container-fluid">
  <div class="DrPost-title container-fluid">
    <h1 class="titleDrc"><?php the_title(); ?></h1>
  </div>
</section>
<section class="Dr-post-affichage container-fluid">

</section>


<?php get_footer(); ?>