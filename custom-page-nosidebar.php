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


<main id="primary" class="maxWidth">
	<div class="custom_page_noSideBar_wrapper">
		<?php if (get_field('desktop_image')) : ?>
			<div class="page_image">
				<img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_field('desktop_image')['url']; ?>">
				<img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_field('mobile_image')['url']; ?>">
				<div class="page_mobile_image_text_and_cta_container">
					<h1><?php echo get_field('page_headline') ?></h1>
					<?php if (get_field('page_subheadline_paragraph')) : ?>
						<p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>

		<div class="hide_on_mobile">
			<h1><?php echo get_field('page_headline') ?></h1>
			<?php if (get_field('page_subheadline_paragraph')) : ?>
				<p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
			<?php endif; ?>
		</div>

		<!-- Covid Notice -->
		<?php get_template_part('template-parts/content/mobileCovidNotice'); ?>

		<!-- Medical Review -->
		<section class="editor_and_review_section hide_on_desktop">
			<?php get_template_part('template-parts/content/mobile_author_and_medical_review'); ?>
		</section>

		<section class="page_content list_styling ipad_width_restriction">
			<?php get_template_part('template-parts/content/googleTranslate'); ?>
			<?php echo get_field('content') ?>
		</section>

		<!-- Sources -->
		<?php get_template_part('template-parts/content/sources'); ?>

		<?php get_template_part('template-parts/content/pageDisclaimer'); ?>

		<?php get_template_part('template-parts/content/phoneTreatmentCta'); ?>

	</div>
</main>


<?php
get_footer();
