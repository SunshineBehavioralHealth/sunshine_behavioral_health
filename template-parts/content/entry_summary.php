<?php

/**
 * Template part for displaying a post's summary
 *
 * @package sunshine_behavioral_health
 */

namespace WP_Rig\WP_Rig;

?>

<div class="entry-summary">
	<?php the_excerpt(); ?>
	<p><?php the_field('page_subheadline_paragraph', $post->ID, true); ?></p>


</div><!-- .entry-summary -->