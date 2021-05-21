<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sunshine_behavioral_health
 */

namespace WP_Rig\WP_Rig;

if (!sunshine_behavioral_health()->is_primary_sidebar_active()) {
	return;
}

sunshine_behavioral_health()->print_styles('sunshine_behavioral_health-sidebar', 'sunshine_behavioral_health-widgets');

?>
<aside id="secondary" class="primary-sidebar widget-area sidebar_z_index sidebar_margin_top">
	<div class="responsive_sidebar_container fixed_sidebar responsive_fixed_sidebar">
		<?php echo get_field('custom_sidebar') ?>
		<?php if (is_page_template('custom_border_fixed_sidebar_guide.php')) : ?>
			<?php if (get_field('include_download_page_content_button')) : ?>
				<?php
				if (have_rows('download_page_buttons')) :
					while (have_rows('download_page_buttons')) : the_row();
				?>
						<a href="<?php echo get_sub_field('link') ?>" class="download_page_content_btn" download><?php echo get_sub_field('text') ?></a>

				<?php
					endwhile;
				endif;
				?>

			<?php endif; ?>

		<?php endif; ?>
	</div>
</aside><!-- #secondary -->