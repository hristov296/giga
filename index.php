<?php get_header($header) ?>
<div id="primary">
  <div class="container">
    <p>BAI HUI</p>
    <?php while (have_posts()) : the_post(); ?>
    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
  	<?php the_content();
    endwhile; ?>
  </div>
</div>
<?php get_footer($footer); ?>
