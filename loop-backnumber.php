<section>
<div class="section_inner">
<?php query_posts('offset=10'); 
if (have_posts()): while (have_posts()): the_post(); ?>
<article id="post-<?php the_ID() ?>" <?php post_class('mod'); ?>>
<div class="inner">
	<header>
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<div class="the_meta">
			<?php if (get_the_tags()) the_tags('',', ',' '); ?>
			<span>for </span> <span class="category"><?php if (the_category(','))  the_category(''); ?></span>
		</div>
	</header>
	<div class="bd the_excerpt"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>" rel="bookmark"><?php the_excerpt(); ?></a></div>
</div><!-- class="inner" -->
</article><!-- class="mod" -->
<?php endwhile;endif; wp_reset_query(); ?>
</div><!-- section_inner -->
</section>
