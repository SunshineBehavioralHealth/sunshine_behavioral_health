<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sunshine_behavioral_health
 */

namespace WP_Rig\WP_Rig;



?>
<aside id="secondary" class="primary-sidebar widget-area sidebar_margin_top">
	<div class="responsive_sidebar_container">
		<?php get_template_part('template-parts/content/authorMedicalReviewSidebar'); ?>

		<?php echo get_field('custom_sidebar') ?>
	</div>
</aside><!-- #secondary -->