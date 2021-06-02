<?php

/**
 * Template Name: Staff
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sunshine_behavioral_health
 */

namespace WP_Rig\WP_Rig;

get_header();

sunshine_behavioral_health()->print_styles('sunshine_behavioral_health-content');

// Read Bio Function

get_template_part('template-parts/javascript/readBio');
get_template_part('template-parts/javascript/navigationJs');


?>


<main id="primary" class="maxWidth">

	<div class="custom_page_noSideBar_wrapper">
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
		<div class="hide_on_mobile">
			<h1><?php echo get_field('page_headline') ?></h1>
			<?php if (get_field('page_subheadline_paragraph')) : ?>
				<p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
			<?php endif; ?>
		</div>
		<section class="staff_page_content">
			<?php echo get_field('page_content'); ?>
		</section>
		<section class="staff_page_staff">
			<?php
			if (have_rows('staff_repeater')) :
				while (have_rows('staff_repeater')) : the_row();
			?>
					<div class="staff_card">
						<div class="staff_card_wrapper">
							<img src="<?php echo get_sub_field('staff_image')['url'] ?>" alt="">
							<p class="staff_name"><?php echo get_sub_field('staff_name'); ?></p>
							<p><?php echo get_sub_field('staff_title'); ?></p>
							<?php if (get_sub_field('staff_bio')) : ?>
								<button class="read_more_button" type="button" data-toggle="collapse" data-target="#staff_bio<?php echo get_sub_field('card_number') ?>" aria-expanded="false" aria-controls="staff_bio<?php echo get_sub_field('card_number') ?>">Read Bio</button>
							<?php endif; ?>
							<div class="bio collapse multi-collapse 
							<?php if (get_sub_field('staff_bio')) {
								echo 'hide_bio';
							} ?> " id="staff_bio<?php echo get_sub_field('card_number') ?>">
								<p><?php echo get_sub_field('staff_bio'); ?></p>
							</div>
						</div>
					</div>
			<?php
				endwhile;
			endif;
			?>

		</section>

		<?php get_template_part('template-parts/content/pageDisclaimer'); ?>
	</div>
</main>

<?php echo get_sub_field(''); ?>




<?php
get_footer();
/* 










