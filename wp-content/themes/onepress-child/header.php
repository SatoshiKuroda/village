<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php bloginfo('name') ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?> </title>

    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <?php do_action( 'onepress_before_site_start' ); ?>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'onepress' ); ?></a>
    <?php
    /**
     * @since 2.0.0
     */
    onepress_header();
    ?>
    <header>
      <nav>
          <?php wp_nav_menu(); ?>
      </nav>
    </header>

