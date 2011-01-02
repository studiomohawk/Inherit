<?php
$tags = get_tags();
foreach ($tags as $tag){
	$tag_allcount = $tag_allcount + $tag->count;
}
$html = "<nav class='post_tags'><ul class='all{$tag_allcount}'>";
foreach ($tags as $tag){
	$tag_link = get_tag_link($tag->term_id);
	$tag_percentage = round(($tag->count * 100) / $tag_allcount);
	$html .= "<li class='t{$tag_percentage}'><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
	$html .= "<div>{$tag->name}<span>{$tag->count}</span></div></a></li>";
}
$html .= "</ul></nav>";
echo $html;
?>
