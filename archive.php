<?php get_header(); ?>
<?php get_template_part( 'hd', 'index' ); ?>
<div id="body">
<div class="body_inner container_12">
<?php /* If this is a category archive */ if (is_category()) { ?>
<aside>
	<h3>Category</h3>
	<h1><?php single_cat_title(); ?></h1>
</aside>
<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
<aside>
	<h3>Tag</h3>
	<h1><?php single_tag_title(); ?></h1>
</aside>
<?php } ?>

<?php get_template_part( 'loop', 'archive' ); ?>
</div><!-- body_inner -->
</div><!-- body -->
<?php get_footer(); ?>
