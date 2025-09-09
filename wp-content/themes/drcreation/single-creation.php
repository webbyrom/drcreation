<?php
defined('ABSPATH') or die('Acces non autorisé.');
/****
 * Theme Name: Drcreation
 * Template Name: Archives crochets
 * Version: 1.0
 * Description: Page des archives crochets du thème Drcreation  
 * Author: Romain
 * Author URI: https://www.web-byrom.com
 * 
 * 
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: drcreation
 * Domain Path: /languages
 * Tags: drcreation, wordpress, theme, html5, css3, responsive, bootstrap
 * 
 */
get_header(); ?>
<section class="Drc-slider-archiveCPT container-fluid">
  <div class="slider-Drc-archiveCPT container-fluid">
    <!------mettre le slider ici------>
    <?php echo do_shortcode('[metaslider id="131"]'); ?>
  </div>
</section>
<section class="DR-realTitle container-fluid">
  <div class="DR-real-title container-fluid">
    <h1 class="titleDrc"><?php the_title(); ?></h1>
  </div>
</section>
<section class="Dr$PsotCustom container-fluid">
  <article class="dr-CPT container-fluid">
    <?php
    $creat_desc = get_field('description_');
    if (!empty($creat_desc)) {
      echo '<div class="Dr-CPT-description container-fluid">' . wp_kses_post($creat_desc);
    } else {
      echo '<p>Description non disponible pour cette création.</p>';
    }
    $img_crea = get_field('photo_du_produit');
    if (!empty($img_crea)) {
      echo '<div class="Dr-CPT-image container-fluid">' . wp_get_attachment_image($img_crea, 'full') . '</div>';
    } else {
      echo '<p>Image non disponible pour cette création.</p>';
    }
    ?>


  </article>
</section>