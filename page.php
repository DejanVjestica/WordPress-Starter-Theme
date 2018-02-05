<?php get_header(); ?>

<section id="page" class="wrapper">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_title(); ?>
      <?php the_content(); ?>
    <?php endwhile; else: ?>
    <?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
<?php endif; ?>
</section>

<?php get_footer(); ?>
