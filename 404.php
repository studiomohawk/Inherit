<?php get_header(); ?>
<?php get_template_part( 'hd', 'index' ); ?>
<div id="body">
<div class="body_inner container_12">
<aside>
	<h1>404 - Not Found</h1>
</aside>
<section>
<div class="section_inner">
<article class="mod">
<div class="inner">
	<div class="bd">
<div id="cse" style="width: 100%;">Loading</div>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript">
  google.load('search', '1', {language : 'ja'});
  google.setOnLoadCallback(function() {
    var customSearchControl = new google.search.CustomSearchControl('003108805029321098597:tfca55laq18');
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    var options = new google.search.DrawOptions();
    options.setAutoComplete(true);
    customSearchControl.draw('cse', options);
  }, true);
</script>
<link rel="stylesheet" href="http://www.google.com/cse/style/look/default.css" type="text/css" />
<style type="text/css">
  .gsc-control-cse {
    font-family: Arial, sans-serif;
    border-color: #2d3335;
    background-color: #2d3335;
    padding: 0;
  }
  form.gsc-search-box {
  font-size:16px;
  }
  input.gsc-input {
    border-color: #454a4c;
    font-size:16px;
  }
  input.gsc-search-button {
    border-color: #666666;
    background-color: #CECECE;
    font-size: 16px;
  }
  .gsc-tabHeader.gsc-tabhInactive {
    border-color: #2d3335;
    background-color: #2d3335;
  }
  .gsc-tabHeader.gsc-tabhActive {
    border-top-color: #2d3335;
    border-left-color: #2d3335;
    border-right-color: #2d3335;
    background-color: #2d3335;
  }
  .gsc-tabsArea {
    border-color: #2d3335;
  }
	.gsc-adBlock {
		background: #2d3335;
		display:block;
		margin-bottom:4px;
		margin-top:6px;
		padding:7px;
		position:relative;
	}
  .gsc-webResult.gsc-result {
    border-color: #2d3335;
    background-color: #2d3335;
  }
  .gsc-webResult.gsc-result:hover {
    border-color: #2d3335;
    background-color: #2d3335;
  }
  .gs-webResult.gs-result a.gs-title:link,
  .gs-webResult.gs-result a.gs-title:link b {
    color: #F2F2F2;
  }
  .gs-webResult.gs-result a.gs-title:visited,
  .gs-webResult.gs-result a.gs-title:visited b {
    color: #999966;
  }
  .gs-webResult.gs-result a.gs-title:hover,
  .gs-webResult.gs-result a.gs-title:hover b {
    color: #fe9d5c;
  }
  .gs-webResult.gs-result a.gs-title:active,
  .gs-webResult.gs-result a.gs-title:active b {
    color: #fe9d5c;
  }
	gs-no-results-result .gs-snippet, .gs-error-result .gs-snippet {
	background-color:#2d3335;
	border:1px solid #414648;
	margin:5px;
	padding:5px;
	}
  .gsc-cursor-page {
    color: #F2F2F2;
  }
  a.gsc-trailing-more-results:link {
    color: #F2F2F2;
  }
  .gs-webResult.gs-result .gs-snippet {
    color: #F2F2F2;
  }
.gs-webResult.gs-no-results-result .gs-snippet {
  color: #1a1a1a;
}
  .gs-webResult.gs-result .gs-visibleUrl {
    color: #fe9d5c;
  }
  .gs-webResult.gs-result .gs-visibleUrl-short {
    color: #fe9d5c;
  }
  .gsc-cursor-box {
    border-color: #2d3335;
  }
  .gsc-results .gsc-cursor-page {
    border-color: #2d3335;
    background-color: #2d3335;
  }
  .gsc-results .gsc-cursor-page.gsc-cursor-current-page {
    border-color: #2d3335;
    background-color: #2d3335;
  }
  .gs-promotion.gs-result {
    border-color: #336699;
    background-color: #FFFFFF;
  }
  .gs-promotion.gs-result a.gs-title:link {
    color: #0000CC;
  }
  .gs-promotion.gs-result a.gs-title:visited {
    color: #0000CC;
  }
  .gs-promotion.gs-result a.gs-title:hover {
    color: #0000CC;
  }
  .gs-promotion.gs-result a.gs-title:active {
    color: #0000CC;
  }
  .gs-promotion.gs-result .gs-snippet {
    color: #000000;
  }
  .gs-promotion.gs-result .gs-visibleUrl,
  .gs-promotion.gs-result .gs-visibleUrl-short {
    color: #008000;
  }
</style>
	</div>
	<div class="otherwise">
	記事のリクエストは<a href="http://twitter.com/cssradar">@cssradar</a>から
	</div>
</div><!-- class="inner" -->
</article><!-- class="mod" -->
</div><!-- section_inner -->
</section>

</div><!-- body_inner -->
</div><!-- body -->
<?php get_footer(); ?>
