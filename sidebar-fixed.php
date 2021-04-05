<?php

/**
 * The Fixed sidebar containing the main widget area
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



<?php

add_filter('template_include', 'var_template_include', 1000);
function var_template_include($t)
{
	$GLOBALS['current_theme_template'] = basename($t);
	return $t;
}

function get_current_template($echo = false)
{
	if (!isset($GLOBALS['current_theme_template']))
		return false;
	if ($echo)
		echo $GLOBALS['current_theme_template'];
	else
		return $GLOBALS['current_theme_template'];
}

?>


<aside id="secondary" class="primary-sidebar widget-area sidebar_margin_top">
	<div class="fixed_sidebar">
		<?php sunshine_behavioral_health()->display_primary_sidebar(); ?>
	</div>

</aside><!-- #secondary -->
