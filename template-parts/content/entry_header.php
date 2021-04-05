<?php
/**
 * Template part for displaying a post's header
 *
 * @package sunshine_behavioral_health
 */

namespace WP_Rig\WP_Rig;

?>

<header class="entry-header">
	<?php
	get_template_part( 'template-parts/content/entry_title', get_post_type() );

	get_template_part( 'template-parts/content/entry_meta', get_post_type() );

	?>
</header><!-- .entry-header -->
