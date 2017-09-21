	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'twentytwelve' ); ?>
		</div>
		<?php endif; ?>
		<header class="entry-header">
			<?php if ( is_single() ) : ?>
			<h1 class="post-title entry-title"><?php the_title(); ?></h1>
			<?php else : ?>
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
			<?php endif; ?>
		</header>

		<footer class="entry-meta">
			<span class="category">分类：<?php the_category('，'); ?></span>
			<?php if (has_tag()) : ?><span class="tags">标签：<?php the_tags($before='', $sep='，', $after=''); ?></span><?php endif; ?>
			<span class="time">日期：<?php the_time('Y/n/j'); ?></span>
		</footer>

		<?php if ( ! is_single() ) : ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>
		<?php else : ?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
		<?php endif; ?>
	</article>
