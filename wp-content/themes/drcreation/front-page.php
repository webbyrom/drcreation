<?php
defined('ABSPATH') or die('Acces non autorisé.');
/****
 * Theme Name: Drcreation
 * Template Name: Front page/ page accueil
 * Version: 1.0
 * Description: Page d'accueil du thème Drcreation  
 * Author: Romain
 * Author URI: https://www.danielcreation.fr  
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: drcreation
 * Domain Path: /languages
 * Tags: drcreation, wordpress, theme, html5, css3, responsive, bootstrap
 * 
 */
get_header(); ?>
<section class="Drc-slider container-fluid">
  <div class="slider-Drc container-fluid">
    <!------mettre le slider ici------>
    <?php echo do_shortcode('[metaslider id="65"]'); ?>
  </div>
</section>
<section class="Drc-title-homPage container-fluid">
  <div class="DrcPAge-title container-fluid">
    <h1 class="titleDrc"><?php the_title(); ?></h1>
  </div>
</section>
<section class="Drc-presentationAc container-fluid">
  <div class="Drc-contentPrez container-fluid">
    <div class="Drc-prezTitle container-fluid">
      <?php
      $textprez = get_field('texte_presentation');
      if (!empty($textprez)) {
        echo wp_kses_post($textprez);
      }
      ?>
    </div>
    <div class="Drc-prezImage container-fluid">
      <?php
      // Récupère la valeur du champ ACF
      $image_data = get_field('image_presentation');

      // Prépare une variable pour l'ID de l'image à afficher
      $image_to_display_id = 0;

      // Vérifie si le champ ACF a retourné quelque chose
      if (!empty($image_data)) {
        // Si c'est un tableau, on récupère l'ID
        if (is_array($image_data) && isset($image_data['ID'])) {
          $image_to_display_id = $image_data['ID'];
        }
        // Sinon, on assume que c'est l'ID directement
        else {
          $image_to_display_id = $image_data;
        }
      }

      // Prépare le HTML de l'image par défaut
      $default_image_html = '<img width="50%" height="250" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mN8c/CJCwAICQLXkCArnAAAAABJRU5ErkJggg==" alt="Image manquante">'; // Raccourci pour l'exemple

      // Affiche l'image
      if ($image_to_display_id) {
        // Si un ID est valide, on utilise wp_get_attachment_image()
        echo wp_get_attachment_image($image_to_display_id, 'full', false, array('class' => 'img-fluid'));
      } else {
        // Sinon, on affiche le code HTML de l'image par défaut
        echo $default_image_html;
      }
      ?>
    </div>
  </div>

</section>
<div class="test container-fluid">

</div>
<?php get_footer(); ?>