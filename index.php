<!doctype html>

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<?php
	wp_nav_menu(
		array(
			'container'      => '',
			'items_wrap'     => '%3$s',
			'theme_location' => 'primary',
		)
	);
	?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h2><?php the_title(); ?></h2>

	<div class="entry">
		<?php the_content(); ?>
	</div>

	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

	<?php wp_footer(); ?>
</body>
</html>
