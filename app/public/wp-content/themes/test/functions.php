<?php
  function custom_theme_setup() {
    add_theme_support( 'title-tag' );

    add_theme_support( 'responsive-embeds' );
  }

  function testsite_stylesheets() {
    wp_enqueue_style(
      'reset-style',
      get_template_directory_uri() . '/reset.css',
      array(),
      '1.0',
      'all'
    );

    wp_enqueue_style(
      'base-style',
      get_stylesheet_uri(),
      array(),
      '1.0',
      'all'
    );

    wp_enqueue_script(
      'js',
      get_template_directory_uri() . '/js/menu.js',
      array(),
      '1.0',
      true
    );
  }

  add_action( 'after_setup_theme', 'custom_theme_setup' );
  add_action( 'wp_enqueue_scripts', 'testsite_stylesheets' );