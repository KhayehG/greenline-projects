<?php
/**
 * Default page template.
 *
 * @package Greenline_Projects
 */

get_header();
?>

<section class="page-section">
	<div class="page-inner">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<h1 class="page-heading"><?php the_title(); ?></h1>
			<div class="page-body">
				<?php the_content(); ?>
			</div>
			<?php
		endwhile;
		?>
	</div>
</section>

<?php
get_footer();
