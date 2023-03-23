<?php

/**
 * Block template file: rental.php
 *
 * Rental Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// The get_block_wrapper_attributes() is a requirement. Want think about whatnew attributes we might need. 

$wrapper_attributes = get_block_wrapper_attributes(
	[
		'class' => 'rental'
	]
);
?>

then all ACF + HTML template code should be wrapped in this div

<div <?= $wrapper_attributes ?>>



	<?php the_field('title'); ?>

</div>