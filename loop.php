<section class="content container_12">
<div class="section_inner grid_10 prefix_1 suffix_1">
<?php get_template_part( 'logo', 'index' ); ?>
<?php query_posts('showposts=10'); 
if (have_posts()): while (have_posts()): the_post(); ?>
<article id="post-<?php the_ID() ?>" <?php post_class('mod'); ?>>
<div class="inner">
	<header>
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<div class="the_meta">
			<p><span class="tag"><?php if (get_the_tags()) the_tags('',', ',' '); ?></span>for <span class="category"><?php if (the_category(','))  the_category(''); ?></span></p>
		</div>
	</header>
	<div class="bd">
		<div class="the_excerpt"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>" rel="bookmark"><?php the_excerpt(); ?></a></div>
	</div>
</div><!-- class="inner" -->
</article><!-- class="mod" -->
<?php endwhile;endif; wp_reset_query(); ?>
<div class="more-link"><a href="<?php bloginfo('siteurl'); ?>/backnumber/">Back Number &raquo;</a></div>
</div><!-- section_inner -->
</section>
