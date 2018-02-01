<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
  <?php wp_head(); ?>
</head>
<body>
  <header class="wrapper">
    <article class="menubar">
      <a id="logo" href="<?php bloginfo('url'); ?>"><h3><?php echo bloginfo(); ?></h3></a>
      <nav></nav>
    </article>

  </header>
  <!-- banner should display only on front page -->
  <section id="banner" class="" style="background-image: url(<?php echo get_background_image();?>);">
    <div class="wrapper">
      <h1>Front-end Web Developer</h1></h1>
      <p>If you want to get in touch whit me, please write me a email at dvjestica@gmail.com. <br>
        I’m locking for a full time emploiment in Berlin, Deutscland
      </p>
      <button type="button" name="button">Contact me</button>
    </div>
  </section>
