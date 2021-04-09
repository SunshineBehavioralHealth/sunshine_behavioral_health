<?php

/**
 * Template Name: Custom Page Nosidebar
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

<?php get_template_part('template-parts/content/googleTranslate'); ?>

<main id="primary" class="maxWidth">
	<div class="custom_page_noSideBar_wrapper">
		<?php if (get_field('desktop_image')) : ?>
			<div class="page_image">
				<img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_field('desktop_image')['url']; ?>">
				<img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_field('mobile_image')['url']; ?>">
				<div class="page_mobile_image_text_and_cta_container">
					<h1><?php echo get_field('page_headline') ?></h1>
					<p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
				</div>
			</div>
		<?php endif; ?>

		<div class="hide_on_mobile">
			<h1><?php echo get_field('page_headline') ?></h1>
			<p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
		</div>

		<!-- Covid Notice -->
		<?php get_template_part('template-parts/content/mobileCovidNotice'); ?>

		<!-- Medical Review -->
		<section class="editor_and_review_section hide_on_desktop">
			<?php get_template_part('template-parts/content/medicalReview'); ?>
		</section>

		<section class="page_content list_styling ipad_width_restriction">
			<?php echo get_field('content') ?>
		</section>

		<!-- Sources -->
		<?php get_template_part('template-parts/content/sources'); ?>

		<section class="page_disclosure_section">
			<?php get_template_part('template-parts/content/pageDisclaimer'); ?>
		</section>

		<?php if (!is_page('Our Response to The Corona Virus Health Concern')) : ?>
			<section class="page_treatment_cta ">
				<h4>Talk with one of our Treatment Specialists!</h4>
				<p>Call 24/7: <a class="invocaNumber bottomPagePhone" href="tel:949-276-2886"> 949-276-2886</a></p>
			</section>
		<?php endif; ?>

	</div>
</main><!-- #primary -->


<?php
get_footer();
