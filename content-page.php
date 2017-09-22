
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="page-title entry-title"><?php the_title(); ?></h1>
		</header>

		<div class="entry-content">
			<?php the_content(); ?>
			<?php if (is_page('achieves')) : ?>
				<div id="achieve-search-form">
				<?php get_search_form(); ?>
				</div>
				<?php get_sidebar('achieves'); ?>
			<?php endif; ?>
		</div>
	</article>
