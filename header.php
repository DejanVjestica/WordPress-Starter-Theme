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
  <header>
    <a id="logo" class="" href="<?php bloginfo('url'); ?>">
      <?php echo bloginfo(); ?>
    </a>
    <nav>

    </nav>
  </header>
  <!-- banner should display only on front page -->
  <section id="banner" class="" style="background-image: url(<?php echo get_background_image();?>);">
    <div class="wrapper">
      <h1>Front-end Web Developer</h1></h1>
      <p>If you want to get in touch whit me, please write me a email at dvjestica@gmail.com or simply use a contact form below.
        I’m locking for a full time emploiment in Berlin, Deutscland
      </p>
    </div>
  </section>
