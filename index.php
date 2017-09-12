<?php get_header(); ?>

	<div id="content" role="main">
	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php sib_page_nav( 'page-nav' ); ?>
	<?php else : ?>

			<article id="post-0" class="post">
			还没有任何日志
			</article>

	<?php endif; ?>
	</div>

<?php get_footer(); ?>
