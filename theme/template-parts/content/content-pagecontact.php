<?php

/**
 * Template part for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Strategic_services
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php
		if (!is_front_page()) {
			the_title('<h1 class=" text-theme-navy text-3xl text-center font-bold mb-5">', '</h1>');
		} else {
			the_title('<h2 class="entry-title text-theme-navy">', '</h2>');
		}
		?>
	</header><!-- .entry-header -->

	<?php strategic_services_post_thumbnail(); ?>

	<div <?php strategic_services_content_class('entry-contentx'); ?>>
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div>' . __('Pages:', 'strategic-services'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if (get_edit_post_link()) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers. */
						__('Edit <span class="sr-only">%s</span>', 'strategic-services'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->