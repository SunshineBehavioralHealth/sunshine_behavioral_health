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



<main id="primary" class="careers_template">
	<?php get_template_part('template-parts/heros/desktop_and_mobile_hero_full_width'); ?>

	<div class="content_container">
		<div class="page_wrapper">
			<!-- Page Content -->
			<section class="page_content list_styling ipad_width_restriction">
				<?php get_template_part('template-parts/content/googleTranslate'); ?>
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
	</div>
</main>
<?php get_footer();
