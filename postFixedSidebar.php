<?php

/**
 * Template Name: Standard post, Fixed Sidebar
 * Template Post Type: post
 * p
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sunshine_behavioral_health
 */

namespace WP_Rig\WP_Rig;

get_header();
get_template_part('template-parts/javascript/navigationJs');

sunshine_behavioral_health()->print_styles('sunshine_behavioral_health-content');

//TOC
get_template_part('template-parts/javascript/tableOfContents');

?>



<main id="primary" class="site-main single_post_main">


	<div class="page_wrapper">
		<?php

		while (have_posts()) {
			the_post(); ?>
			<div class="post_image">
				<?php
				if (!is_search()) {
					get_template_part('template-parts/content/entry_thumbnail', get_post_type());
				} ?>
			</div>
			<!-- <div class="table_of_contents"></div> -->

			<!-- Medical Review -->
			<section class="editor_and_review_section hide_on_desktop">
				<?php get_template_part('template-parts/content/mobile_author_and_medical_review'); ?>
			</section>


			<section class="page_content list_styling ipad_width_restriction">
				<?php get_template_part('template-parts/content/googleTranslate'); ?>
				<?php the_content(); ?>
			</section>

			<!-- Sources -->
			<?php get_template_part('template-parts/content/sources'); ?>


		<?php }
		?>
		<?php get_template_part('template-parts/content/phoneTreatmentCta'); ?>
	</div>
	<?php get_sidebar('fixed'); ?>
</main>
<?php

get_footer();
