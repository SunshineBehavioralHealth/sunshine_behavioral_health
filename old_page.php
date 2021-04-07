<?php

/**
 * Template Name: Old Page Default
 * Template Post Type: Page
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

<?php get_template_part('template-parts/content/googleTranslate'); ?>

<main id="primary" class="site-main">

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
		<section class="covid_section hide_on_desktop">
			<a href="/our-response-to-the-corona-virus-health-concern/">Our Response to COVID-19</a>
		</section>

		<!-- Medical Review -->
		<section class="editor_and_review_section hide_on_desktop">
			<?php get_template_part('template-parts/content/medicalReview'); ?>
		</section>

		<!-- Page Content -->
		<section class="page_content list_styling ipad_width_restriction">
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
</main><!-- #primary -->

<?php
get_footer();
