<?php

/**
 * Template part for displaying the header branding
 *
 * @package sunshine_behavioral_health
 */

namespace WP_Rig\WP_Rig;

?>

<?php if (!is_page_template('page.php')) : ?>
	<!-- <div class="site-branding">
		<?php the_custom_logo(); ?>

		<?php
		if (is_front_page() && is_home()) {
		?>
			<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
		<?php
		}

		?>
	</div>.site-branding -->

<?php endif; ?>
