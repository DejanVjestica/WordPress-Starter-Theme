<?php get_header(); ?>

<div id="front-page" class="wrapper">
  <?php
  $args = array('cat' => 3);
  $category_posts = new WP_Query($args);
  if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post();?>
  <article class="showcase">
    <figure>
        <?php  the_post_thumbnail(); ?>
    </figure>

    <aside class="showcase-desc">
      <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
      <p><?php the_content(); ?></p>
      <?php
      $tag_list = get_the_tag_list( '<ul><li>', '</li><li>', '</li></ul>' );
      if ( $tag_list && ! is_wp_error( $tag_list ) ) {
        echo $tag_list;
      }?>
    </aside>

  </article>


<?php endwhile; else: ?>
  <?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
<?php endif; ?>
</div>
<?php get_sidebar("contact"); ?>
<?php get_footer(); ?>
