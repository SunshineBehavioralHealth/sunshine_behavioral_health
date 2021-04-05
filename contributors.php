<?php

/**
 * Template Name: Contributors
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
get_template_part('template-parts/javascript/navigationJs');


?>

<?php get_template_part('template-parts/content/googleTranslate'); ?>

<main id="primary" class="contributors_page">

	<div class="page_wrapper">
		<?php if (get_field('desktop_image')) : ?>

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
		<?php endif; ?>

		<!-- Covid Notice -->
		<section class="covid_section hide_on_desktop">
			<a href="/our-response-to-the-corona-virus-health-concern/">Learn about Our Covid response</a>
		</section>


		<section class="page_content list_styling ipad_width_restriction">
			<?php echo get_field('content') ?>
			<div class="author_container">
			<h3>Authors</h3>
				<?php

				$authorArgs = array(
					'role'    => 'author',
					'orderby' => 'user_nicename',
					'order'   => 'ASC'
				);

				
					
				
				$users = get_users($authorArgs);		
				
				echo '<ul>';
				foreach ($users as $user) {
					$userdata = get_user_meta( $user->ID );
					$authorAvater = get_field('tsm_local_avatar', 'user_' . $user->ID);
					$authorTitle = get_field('professional_title', 'user_' . $user->ID);
					// print_r($userdata)			

					?>
					<li class="author_element">
					<span id="<?php echo esc_html($user->first_name) . '_' .  esc_html($user->last_name) ?>"></span>
						<div class="author_image_wrapper">
							<img src="<?php echo $authorAvater['url'] ?>" alt="" loading="lazy">
						</div>
						<div class="author_content_wrapper">
							<h5>Meet <?php echo esc_html($user->display_name) ?></h5>
							<?php if ($authorTitle ) : ?>
							<p class="author_title"><?php echo $authorTitle ?></p>
							<?php endif; ?>
							<p><?php echo $userdata['description'][0]; ?></p>
							<div class="author_posts_wrapper">
								<h6>Articles by the Author</h6>
							<?php echo get_related_author_posts(); ?>
							</div>
						</div>
						
					</li>
					<div class="contributor_spacer"></div>
				<?}
				?>
			</div>

			<div class="medical_reviewer_container">
			<h3>Medical Reviewers</h3>
				<?php

				$medicalReviewerArgs = array(
					'role'    => 'medical_reviewer',
					'orderby' => 'user_nicename',
					'order'   => 'ASC'
				);
				
				
				$users = get_users($medicalReviewerArgs);		
				echo '<ul>';
				foreach ($users as $user) {
					$userdata = get_user_meta( $user->ID );
					$medicalReviewerAvater = get_field('tsm_local_avatar', 'user_' . $user->ID);
					$medicalReviewerTitle = get_field('professional_title', 'user_' . $user->ID);

					// print_r($medicalReviewerAvater)
					?>
					<li  class="medical_reviewer_element">
					<span id="<?php echo esc_html($user->first_name) . '_' .  esc_html($user->last_name) ?>"></span>
						<div class="medical_reviewer_image_wrapper">
							<img src="<?php echo $medicalReviewerAvater['url'] ?>" loading="lazy">
						</div>
						<div class="medical_reviewer_content_wrapper">
							<h5><?php echo esc_html($user->display_name) ?></h5>
							<?php if ($medicalReviewerTitle ) : ?>
							<p class="medical_review_title"><?php echo $medicalReviewerTitle ?></p>
							<?php endif; ?>
							<p><?php echo $userdata['description'][0]; ?></p>
						</div>
					</li>
					<div class="contributor_spacer"></div>
				<?}
				?>
			</div>
		</section>


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
