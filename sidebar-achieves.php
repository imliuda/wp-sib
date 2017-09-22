<?php
/**
 * The sidebar containing the front page widget areas
 *
 * If no active widgets are in either sidebar, hide them completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

/*
 * The front page widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */
if ( ! is_active_sidebar( 'achieve-bar-1' ) && ! is_active_sidebar( 'achieve-bar-2' ) && ! is_active_sidebar( 'achieve-bar-3' ))
	return;

// If we get this far, we have widgets. Let do this.
?>
<div id="achieve-widgets">
	<?php if ( is_active_sidebar( 'achieve-bar-1' ) ) : ?>
	<div id="achieve-bar-1" class="achieve-bar">
		<?php dynamic_sidebar( 'achieve-bar-1' ); ?>
	</div><!-- .first -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'achieve-bar-2' ) ) : ?>
	<div id="achieve-bar-2" class="achieve-bar">
		<?php dynamic_sidebar( 'achieve-bar-2' ); ?>
	</div><!-- .second -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'achieve-bar-3' ) ) : ?>
	<div id="achieve-bar-3" class="achieve-bar">
		<?php dynamic_sidebar( 'achieve-bar-3' ); ?>
	</div><!-- .second -->
	<?php endif; ?>
</div><!-- #secondary -->
