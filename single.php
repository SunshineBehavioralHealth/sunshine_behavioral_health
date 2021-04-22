<?php

/**
 * Template Name: Single Blog Post W/ Sidebar
 *
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
			<div class="toc_and_content_container">
				<!-- Medical Review -->
				<section class="editor_and_review_section hide_on_desktop">
					<?php get_template_part('template-parts/content/mobile_author_and_medical_review'); ?>
				</section>

				<section class="page_content">
					<?php get_template_part('template-parts/content/googleTranslate'); ?>

					<?php the_content(); ?>
				</section>

				<!-- Sources -->
				<?php get_template_part('template-parts/content/sources'); ?>
			</div>


		<?php }
		?>

		<section class="page_disclosure_section">
			<?php get_template_part('template-parts/content/pageDisclaimer'); ?>
		</section>

		<?php get_template_part('template-parts/content/phoneTreatmentCta'); ?>
	</div>
	<?php get_sidebar(); ?>
</main>
<?php

get_footer();
