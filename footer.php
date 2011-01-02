<footer class="the_footer">
<div class="foot_inner container_12">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('inspiration') ) ?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('instapaper') ) ?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) ?>
</div><!-- foot_inner -->
</footer>
</div><!-- #page -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" /></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.fancybox.js" /></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/common.js"></script>
<script>
    less.env = "development";
    less.watch();
</script>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
<?php wp_footer(); ?>
</body>
</html>
