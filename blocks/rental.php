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


<!-- you can do this instead of writing echo -->
<div <?= $wrapper_attributes ?>>

	<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?>">
		<p class="fun"><?php the_field('title'); ?></p>
		</br>
		<p class="yellow text-transform"><?php the_field('description'); ?></p>

		</br>
		<?php the_field('price'); ?>
		</br>
		<?php the_field('extras'); ?>
	</div>

</div>