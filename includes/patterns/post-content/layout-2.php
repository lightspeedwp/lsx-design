<?php
/**
 * Post Content Layout 2
 *
 * @package lsx-design
 */

$cover_2_col          = include get_template_directory() . '/includes/patterns/featured/cover-2-col.php';
$testimonial_2_column = include get_template_directory() . '/includes/patterns/testimonials/testimonial-2-column.php';
$content              = $cover_2_col['content'] . $testimonial_2_column['content'];

return array(
	'title'      => __( 'Layout 2', 'lsx-design' ),
	'blockTypes' => array( 'core/post-content' ),
	'content'    => $content,
);
