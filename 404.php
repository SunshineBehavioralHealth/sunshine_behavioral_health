<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package sunshine_behavioral_health
 */

namespace WP_Rig\WP_Rig;

get_header();

sunshine_behavioral_health()->print_styles('sunshine_behavioral_health-content');

?>
<?php get_template_part('template-parts/content/googleTranslate'); ?>
<main id="primary" class="site-main page_404">
	<?php get_template_part('template-parts/content/error', '404'); ?>
	<?php get_sidebar(); ?>
</main>
<?php
get_footer();
