<?php

/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Strategic_services
 */

?>

<style>
	figure {
		text-align: -webkit-center;
	}
</style>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header singlephp">
		<div class="container text-right">
			<?php if (!is_page()) : ?>
				<div class="entry-meta">
					<?php strategic_services_entry_meta(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</div>
		<?php the_title('<h1 class="entry-title text-center">', '</h1>'); ?>
	</header><!-- .entry-header -->

	<?php strategic_services_post_thumbnail(); ?>

	<div <?php strategic_services_content_class('entry-content'); ?>>
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__('Continue reading<span class="sr-only"> "%s"</span>', 'strategic-services'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div>' . __('Pages:', 'strategic-services'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer text-right container">
		<?php strategic_services_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-${ID} -->