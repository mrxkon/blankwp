<?php

// Navigation.
add_action(
	'init',
	function() {
		$locations = array(
			'primary' => __( 'Primary', 'blankwp' ),
		);

		register_nav_menus( $locations );
	}
);

// Theme support.
add_action(
	'after_setup_theme',
	function() {
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'title-tag' );

		load_theme_textdomain( 'blankwp' );

		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'f5efe0',
			)
		);

		add_theme_support(
			'custom-logo',
			array(
				'height'      => '90',
				'width'       => '120',
				'flex-height' => true,
				'flex-width'  => true,
			)
		);

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);
	}
);
