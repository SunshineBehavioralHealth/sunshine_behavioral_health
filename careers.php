<?php

/**
 * Template Name: Careers Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sunshine_behavioral_health
 */

namespace WP_Rig\WP_Rig;

get_header();

sunshine_behavioral_health()->print_styles('sunshine_behavioral_health-content');

//Tab Logic
get_template_part('template-parts/javascript/careersTab');
get_template_part('template-parts/javascript/navigationJs');
?>


<?php get_template_part('template-parts/content/googleTranslate'); ?>

<main id="primary" class="maxWidth">
	<div class="custom_page_noSideBar_wrapper">
		<div class="page_image">
			<img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_field('desktop_image')['url']; ?>">
			<img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_field('mobile_image')['url']; ?>">
			<div class="page_mobile_image_text_and_cta_container">
				<h1><?php echo get_field('page_headline') ?></h1>
				<p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
			</div>
		</div>
		<div class="hide_on_mobile">
			<h1><?php echo get_field('page_headline') ?></h1>
			<p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
		</div>
		<section class="page_content list_styling ipad_width_restriction">
			<?php echo get_field('content') ?>
		</section>
		<section class="career_section">
			<?php if (get_field('career_headline')) : ?>
				<h2><?php echo get_field('career_headline') ?></h2>
			<?php else : ?>
				<h2>Career Opportunities</h2>
			<?php endif; ?>
			<div class="urgent_hire">*Urgently Hiring</div>
			<div class="tab_container">
				<div class="tab">
					<?php
					if (have_rows('job_tabs')) :
						while (have_rows('job_tabs')) : the_row();
					?>
							<button class="tablinks" onclick="careerTabs(event, '<?php echo get_sub_field('job_id'); ?>')"><?php if (get_sub_field('urgent')) : ?>
									<span class="urgent_hire">*</span>
									<?php endif; ?><?php echo get_sub_field('job_name'); ?></button>
					<?php
						endwhile;
					endif;
					?>
				</div>
				<?php
				if (have_rows('job_tabs')) :
					while (have_rows('job_tabs')) : the_row();
				?>
						<div id="<?php echo get_sub_field('job_id'); ?>" class="tabcontent">
							<h2><?php echo get_sub_field('job_name'); ?></h2>
							<p class="position_summary">Position Summary:</p>
							<p><?php echo get_sub_field('job_content'); ?></p>
							<div class="job_apply_now">
								<a href="<?php echo get_sub_field('apply_link') ?>">Apply with Sunshine Behavioral Health</a>
							</div>

						</div>
				<?php
					endwhile;
				endif;
				?>
			</div>
		</section>
	</div>
</main><!-- #primary -->

<?php echo get_sub_field(''); ?>

<?php
if (have_rows('job_tabs')) :
	while (have_rows('job_tabs')) : the_row();
?>

<?php
	endwhile;
endif;
?>


<?php
get_footer();
