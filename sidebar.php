<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sunshine_behavioral_health
 */

namespace WP_Rig\WP_Rig;

sunshine_behavioral_health()->print_styles('wp-rig-sidebar');


if (!sunshine_behavioral_health()->is_primary_sidebar_active()) {
	return;
}

sunshine_behavioral_health()->print_styles('sunshine_behavioral_health-sidebar', 'sunshine_behavioral_health-widgets');

?>


<aside id="secondary" class="primary-sidebar widget-area sidebar_margin_top">
	<?php
	get_template_part('template-parts/content/authorMedicalReviewSidebar');
	sunshine_behavioral_health()->display_primary_sidebar();
	?>
</aside><!-- #secondary -->