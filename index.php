<?php
/**
 * Fallback index template.
 *
 * @package Greenline_Projects
 */

get_header();
?>

<section class="section section-page">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class( 'blog-post' ); ?>>
					<h2 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="page-body"><?php the_excerpt(); ?></div>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<p><?php esc_html_e( 'No content found.', 'greenline-projects' ); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
