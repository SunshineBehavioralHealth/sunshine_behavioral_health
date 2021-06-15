<?php

/**
 * Template Name: Link Builder Guides
 * Description: Template to display all Guide pages in one place automatically.
 * 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sunshine_behavioral_health
 */

namespace WP_Rig\WP_Rig;

get_header();
get_template_part('template-parts/javascript/navigationJs');


sunshine_behavioral_health()->print_styles('sunshine_behavioral_health-content');

?>


<main id="primary" class="maxWidth">
	<div class="">
		<h1><?php echo get_field('page_headline') ?></h1>
		<?php if (get_field('page_subheadline_paragraph')) : ?>
			<p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
		<?php endif; ?>
		<section class="guide_cards_section">
			<h2>Guide Pages</h2>
			<div class="guide_cards_container">
				<?php
				$guidePagesArgs = array(
					'post_type'      => 'any',
					'posts_per_page' => -1,
					'order'          => 'ASC',
					'orderby'        => 'title',
					'meta_key' => '_wp_page_template ',
					'meta_value' => 'custom_border_fixed_sidebar_guide.php'
				);
				$guidePages = new \WP_Query($guidePagesArgs);
				if ($guidePages->have_posts()) : ?>
					<?php while ($guidePages->have_posts()) : $guidePages->the_post(); ?>
						<h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
					<?php endwhile; ?>
				<?php endif;
				wp_reset_postdata(); ?>
			</div>
		</section>

		<section class="other_guides_section">
			<h2>Other Guides</h2>
			<div class="other_guides_container">
				<?php
				if (have_rows('other_guides_repeater')) :
					while (have_rows('other_guides_repeater')) : the_row();
				?>
						<h5><a href="<?php echo get_sub_field('link') ?>"><?php echo get_sub_field('text') ?></a></h5>
				<?php
					endwhile;
				endif;
				?>
			</div>
		</section>
		<section class="page_content list_styling">
			<?php echo get_field('link_builder_guide_page_content') ?>
		</section>

		<?php get_template_part('template-parts/content/sources'); ?>

		<?php get_template_part('template-parts/content/pageDisclaimer'); ?>

		<?php get_template_part('template-parts/content/phoneTreatmentCta'); ?>
	</div>
</main>
<?php
get_footer();
