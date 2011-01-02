<?php
/*
Template Name: Back Number
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'hd', 'index' ); ?>
<div id="body">
<div class="body_inner container_12">
<?php get_template_part( 'loop', 'backnumber' ); ?>
</div><!-- body_inner -->
</div><!-- body -->
<?php get_footer(); ?>