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
					<?php if (get_field('page_subheadline_paragraph')) : ?>
						<p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
					<?php endif; ?>
				</div>
			</div>
			<div class="hide_on_mobile show_on_tablet page_headlines_desktop">
				<h1><?php echo get_field('page_headline') ?></h1>
				<?php if (get_field('page_subheadline_paragraph')) : ?>
					<p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<!-- Covid Notice -->
		<?php get_template_part('template-parts/content/mobileCovidNotice'); ?>


		<section class="page_content list_styling ipad_width_restriction">
			<?php echo get_field('content') ?>
			<div class="author_container">
				<h3>Authors</h3>
				<?php

				$authorArgs = array(
					'role'    => 'add_author+',
					'orderby' => 'user_nicename',
					'order'   => 'ASC'
				);




				$users = get_users($authorArgs);

				echo '<ul>';
				foreach ($users as $user) {
					$userdata = get_user_meta($user->ID);
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
							<?php if ($authorTitle) : ?>
								<p class="author_title"><?php echo $authorTitle ?></p>
							<?php endif; ?>
							<p><?php echo $userdata['description'][0]; ?></p>
							<div class="author_posts_wrapper">
								<h6>Articles by the Author</h6>
								<?php $the_user_id = get_post_meta($post->ID, 'user-id', true); ?>
								<?php query_posts("author=$user->ID&posts_per_page=3"); ?>
								<ul>
									<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
											<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
									<?php endwhile;
									endif; ?>
								</ul>
								<?php wp_reset_query(); ?>

							</div>
						</div>

					</li>
					<div class="contributor_spacer"></div>
				<? }
				?>
			</div>

			<div class="medical_reviewer_container">
				<h3>Medical Reviewers</h3>
				<?php

				$medicalReviewerArgs = array(
					'role'    => 'add_medical_reviewer+',
					'orderby' => 'user_nicename',
					'order'   => 'ASC'
				);


				$users = get_users($medicalReviewerArgs);
				echo '<ul>';
				foreach ($users as $user) {
					$userdata = get_user_meta($user->ID);
					$medicalReviewerAvater = get_field('tsm_local_avatar', 'user_' . $user->ID);
					$medicalReviewerTitle = get_field('professional_title', 'user_' . $user->ID);

					// print_r($medicalReviewerAvater)
				?>
					<li class="medical_reviewer_element">
						<span id="<?php echo esc_html($user->first_name) . '_' .  esc_html($user->last_name) ?>"></span>
						<div class="medical_reviewer_image_wrapper">
							<img src="<?php echo $medicalReviewerAvater['url'] ?>" loading="lazy">
						</div>
						<div class="medical_reviewer_content_wrapper">
							<h5><?php echo esc_html($user->display_name) ?></h5>
							<?php if ($medicalReviewerTitle) : ?>
								<p class="medical_review_title"><?php echo $medicalReviewerTitle ?></p>
							<?php endif; ?>
							<p><?php echo $userdata['description'][0]; ?></p>
						</div>
					</li>
					<div class="contributor_spacer"></div>
				<? }
				?>
			</div>
		</section>


		<?php get_template_part('template-parts/content/pageDisclaimer'); ?>

		<?php get_template_part('template-parts/content/phoneTreatmentCta'); ?>



	</div>
</main>

<?php
get_footer();
