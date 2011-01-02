<?php get_header(); ?>
<header>
	<div class="header_inner container_12">
		<?php get_template_part( 'logo', 'index' ); ?>
	</div>
</header>
<div id="body">
<div class="body_inner container_12">
<?php get_template_part( 'loop', 'single' ); ?>
</div><!-- body_inner -->
</div><!-- body -->
</div><!-- id="bd" -->
<?php get_footer() ?>
