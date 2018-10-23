<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<header id="header">
  <div class="header-top">
    <div class="container">
      <?php wp_nav_menu(array(
				'theme_location' => 'top-menu',
				'menu_class'     => 'nav',
				'container'      => '',
				'link_before'		 => '<span>',
				'link_after'		 => '</span>',
				//'walker' 				 => new hh_walker_nav
			)); ?>
      <div class="work-time">
        <span class="im im-time"></span>
        <span>Пон. - Нед. 6:00 - 23:00</span>
      </div>
    </div>
  </div>
	<div class="header-main">
		<div class="container">
			<div class="site-logo">
				<a href="<?php echo site_url(); ?>" class="custom-logo-link" rel="home" itemprop="url">
          <img src="<?php echo get_template_directory_uri(); ?>/img/header_one.png" class="custom-logo" alt="Satelit" itemprop="logo"></a>
			</div>
			<?php wp_nav_menu(array(
				'theme_location' => 'main-menu',
				'menu_class'     => 'nav',
				'container'      => '',
				'link_before'		 => '<span>',
				'link_after'		 => '</span>',
				//'walker' 				 => new hh_walker_nav
			)); ?>
		</div>
	</div>
</header>
