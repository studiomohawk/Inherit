<section>
<div class="section_inner">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article id="post-<?php the_ID() ?>" <?php post_class('mod'); ?>>
<div class="inner">
	<header>
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<div class="the_meta">
			<?php /* If this is a category archive */ if (is_category()) { ?>
				<?php if (get_the_tags()) the_tags('',', ',' '); ?>
			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<span>for </span> <span class="category"><?php if (the_category(','))  the_category(''); ?></span>
			<?php } ?>
			<br />
			<span class="date"><?php echo date('l, F jS, Y', strtotime($post->post_date)); ?></span>
		</div>
	</header>
	<div class="bd the_excerpt"><?php the_excerpt(); ?></div>
</div><!-- class="inner" -->
</article><!-- class="mod" -->
<?php endwhile; endif; ?>
</div><!-- section_inner -->
</section>