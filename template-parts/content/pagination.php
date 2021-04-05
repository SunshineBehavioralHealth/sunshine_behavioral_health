<?php
/**
 * Template part for displaying a pagination
 *
 * @package sunshine_behavioral_health
 */

namespace WP_Rig\WP_Rig;

the_posts_pagination(
	[
		'mid_size'           => 2,
		'prev_text'          => _x( 'Previous', 'previous set of search results', 'sunshine_behavioral_health' ),
		'next_text'          => _x( 'Next', 'next set of search results', 'sunshine_behavioral_health' ),
		'screen_reader_text' => __( 'Page navigation', 'sunshine_behavioral_health' ),
	]
);
