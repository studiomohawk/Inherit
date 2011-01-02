<section class="content grid_9">
<div class="section_inner prefix_1">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article id="post-<?php the_ID() ?>" <?php post_class('mod'); ?>>
<div class="inner">
	<header>
		<h1><?php the_title(); ?></h1>
		<div class="the_meta">
			<p><span class="tag"><?php if (get_the_tags()) the_tags('',', ',' '); ?></span>	for <span class="category"><?php if (the_category(','))  the_category(''); ?></span></p>
			<p><span class="date"><?php echo date('l, F jS, Y', strtotime($post->post_date)); ?><?php edit_post_link('Edit This Post', '&nbsp;&nbsp;&nbsp;'); ?></span></p>
		</div>
	</header>
	<div class="bd the_content">
		<?php the_content(); ?>
	</div>
	<footer>
		<nav><?php sm_prevnext(); ?></nav>
		<div class="twitter">
		<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="cssradar">Tweet</a>
		<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
		</div>
	</footer>
</div><!-- class="inner" -->
</article><!-- class="mod" -->
<?php endwhile; endif; ?>
</div><!-- section_inner -->
</section>
