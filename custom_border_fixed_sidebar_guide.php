<?php

/**
 * Template Name: Custom Border Fixed Sidebar (Guide)
 * Template Post Type: Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sunshine_behavioral_health
 */

namespace WP_Rig\WP_Rig;

get_header();

sunshine_behavioral_health()->print_styles('sunshine_behavioral_health-content');

get_template_part('template-parts/javascript/tableOfContents');
get_template_part('template-parts/javascript/navigationJs');
get_template_part('template-parts/javascript/fixedSidebarJs');

?>

<main id="primary" class="site-main has_sidebar_border">
	<div class="page_wrapper">
		<div class="page_image">
			<img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_field('desktop_image')['url']; ?>">
			<img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_field('mobile_image')['url']; ?>">
			<div class="page_mobile_image_text_and_cta_container">
				<h1><?php echo get_field('page_headline') ?></h1>
				<p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
			</div>
		</div>
		<div class="hide_on_mobile show_on_tablet page_headlines_desktop">
			<h1><?php echo get_field('page_headline') ?></h1>
			<p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
		</div>

		<!-- Covid Notice -->
		<?php get_template_part('template-parts/content/mobileCovidNotice'); ?>

		<!-- Medical Review -->
		<section class="editor_and_review_section hide_on_desktop">
			<?php get_template_part('template-parts/content/mobile_author_and_medical_review'); ?>
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

		<?php get_template_part('template-parts/content/phoneTreatmentCta'); ?>
	</div>
	<?php get_sidebar('dynamic_fixed'); ?>
</main>
<?php
get_footer();
