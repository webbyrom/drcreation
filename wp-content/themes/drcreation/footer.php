<?php
defined('ABSPATH') or die('Acces non autorisé.');

?>
</main>
<!---Drc-main---->
</div>
<!----Drc-secondary-content---->

</div>
<!----Drc-primary-content---->

<footer class="Drc-footer container-fluid">
  <section class="Dr-menu container-fluid">
    menu de navigation minimum
  </section>
  <section class="Dr-mentions container-fluid">
    Mentions légales ici et politique de confidentialité
  </section>
  <section class="Dr-copyright container-fluid">
    &copy; <?php echo date('Y'); ?> - Tous droits réservés - <?php echo get_bloginfo('name'); ?>
  </section>

  <?php wp_footer(); ?>

</footer>

</body>

</html>