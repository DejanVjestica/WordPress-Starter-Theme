<?php get_header(); ?>

<section id="single" class="wrapper">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <figure>
          <?php  the_post_thumbnail(); ?>
      </figure>
      <?php the_title(); ?>
      <?php the_content(); ?>
    <?php endwhile; else: ?>
    <?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
<?php endif; ?>
</section>

<?php get_footer(); ?>
