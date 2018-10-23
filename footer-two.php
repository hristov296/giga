<footer id="footer">
  <div class="container">
    <div class="site-logo">
      <a href="<?php echo site_url(); ?>" class="custom-logo-link" rel="home" itemprop="url">
        <img src="<?php echo get_template_directory_uri(); ?>/img/header_one.png" class="custom-logo" alt="Satelit" itemprop="logo">
      </a>
      <p class="foot-slogan">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. </p>
    </div>
    <?php wp_nav_menu('footer-one'); ?>
    <?php wp_nav_menu('footer-two'); ?>
    <?php wp_nav_menu('footer-three'); ?>
  </div>
  <div class="copyright">
    <p>Всички права запазени © <?php echo date("Y"); ?>.</p>
  </div>
</footer>
<?php wp_footer(); ?>
