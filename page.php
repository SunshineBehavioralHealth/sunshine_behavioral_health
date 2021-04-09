<?php

/**
 * The template for displaying all pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sunshine_behavioral_health
 */

namespace WP_Rig\WP_Rig;

get_header();

sunshine_behavioral_health()->print_styles('sunshine_behavioral_health-content');

//TOC
get_template_part('template-parts/javascript/tableOfContents');
get_template_part('template-parts/javascript/navigationJs');

?>




<main id="primary" class="">
	<div class="hero_banner_container">
		<img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_field('mobile_image')['url']; ?>">
		<div class="hero_banner_headlines_container">
			<h1><?php echo get_field('page_headline') ?></h1>
			<p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
		</div>

	</div>
	<div class="page_grid">
		<div class="page_wrapper">
			<!-- Covid Notice -->
			<?php get_template_part('template-parts/content/mobileCovidNotice'); ?>


			<!-- Medical Review -->
			<section class="editor_and_review_section hide_on_desktop">
				<?php get_template_part('template-parts/content/medicalReview'); ?>
			</section>

			<!-- Page Content -->
			<section class="page_content list_styling ipad_width_restriction">
				<?php get_template_part('template-parts/content/googleTranslate'); ?>
				<?php echo get_field('content') ?>
			</section>

			<!-- Sources -->
			<?php get_template_part('template-parts/content/sources'); ?>

			<!-- Disclosure -->
			<section class="page_disclosure_section">
				<?php get_template_part('template-parts/content/pageDisclaimer'); ?>
			</section>

			<section class="page_treatment_cta ">
				<h4>Talk with one of our Treatment Specialists!</h4>
				<p>Call 24/7: <a class="invocaNumber bottomPagePhone" href="tel:949-276-2886"> 949-276-2886</a></p>
			</section>
		</div>
		<?php get_sidebar(); ?>
	</div>
</main><!-- #primary -->

<?php
get_footer();
