<!doctype html>

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<h1 class="site-title">
		<a href="<?php echo esc_url( get_home_url() ); ?>">
			<?php echo get_bloginfo( 'name' ); ?>
		</a>
	</h1>

	<div class="site-description">
		<?php echo get_bloginfo( 'description' ); ?>
	</div>

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

		<h2>
			<?php the_title(); ?>
		</h2>

		<div class="entry">
			<?php the_content(); ?>
		</div>

		<?php if ( is_single() ) : ?>
			<div class="post-meta">
				<span class="author"><?php the_author(); ?></span> - <span class="categories"><?php the_category( ', ' ); ?></span> - <span class="tags"><?php the_tags( '', ',', '' ); ?></span>
			</div>
		<?php endif; ?>

	<?php endwhile; else : ?>

		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

	<?php endif; ?>

	<?php wp_footer(); ?>
</body>
</html>
