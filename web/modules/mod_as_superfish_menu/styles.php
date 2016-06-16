<?php

/***************************************************************************************/
/*
/*		Designed by 'AS Designing'
/*		Web: http://www.asdesigning.com
/*		Web: http://www.astemplates.com
/*		License: GNU/GPL
/*
/**************************************************************************************/

$sf_font_family = '';
if($params->get('sf_font_family'))
	$sf_font_family   = $params->get('sf_font_family');

$sf_font_arr			= array('fontlink'=>false, 'fontfamily'=>false);
$sf_font_arr			= modFontChooser($sf_font_family);
$sf_font_family 		= $sf_font_arr['fontfamily'];

echo $sf_font_arr['fontlink'];

$sf_fontsize = '';
if($params->get('sf_fontsize'))
	$sf_fontsize = 'font-size:' . $params->get('sf_fontsize') . 'px;';

$sf_fontcolor = '';
if($params->get('sf_fontcolor'))
	$sf_fontcolor = 'color: #' . $params->get('sf_fontcolor') . ';';

$sf_active_fontcolor = '';
if($params->get('sf_active_fontcolor'))
	$sf_active_fontcolor = 'color: #' . $params->get('sf_active_fontcolor') . ';';

$sf_hover_fontcolor = '';
if($params->get('sf_hover_fontcolor'))
	$sf_hover_fontcolor = 'color: #' . $params->get('sf_hover_fontcolor') . ';';

$sf_sub_fontsize = '';
if($params->get('sf_sub_fontsize'))
	$sf_sub_fontsize = 'font-size:' . $params->get('sf_sub_fontsize') . 'px;';

$sf_sub_fontcolor = '';
if($params->get('sf_sub_fontcolor'))
	$sf_sub_fontcolor = 'color: #' . $params->get('sf_sub_fontcolor') . ';';

$sf_sub_active_fontcolor = '';
if($params->get('sf_sub_active_fontcolor'))
	$sf_sub_active_fontcolor = 'color: #' . $params->get('sf_sub_active_fontcolor') . ';';

$sf_sub_hover_fontcolor = '';
if($params->get('sf_sub_hover_fontcolor'))
	$sf_sub_hover_fontcolor = 'color: #' . $params->get('sf_sub_hover_fontcolor') . ';';

$sf_sub_menu_bgcolor = '';
if($params->get('sf_sub_menu_bgcolor'))
	$sf_sub_menu_bgcolor = 'background-color: #' . $params->get('sf_sub_menu_bgcolor') . ';';

?>

<style type="text/css">

ul.sf-menu
{
	<?php echo $sf_font_family; ?>
}

ul.sf-menu > li > a, 
ul.sf-menu > li > span 
{
    <?php echo $sf_fontcolor; ?>
	<?php echo $sf_fontsize; ?>
}

ul.sf-menu > li.active > a, 
ul.sf-menu > li.current > a, 
ul.sf-menu > li.active > span, 
ul.sf-menu > li.current > span 
{
    <?php echo $sf_active_fontcolor; ?>
}

ul.sf-menu > li > a:hover, 
ul.sf-menu > li > span:hover
{
	<?php echo $sf_hover_fontcolor; ?>
}

ul.sf-menu ul 
{
	<?php echo $sf_sub_menu_bgcolor; ?>
}

ul.sf-menu ul li a, 
ul.sf-menu ul li span
{
    <?php echo $sf_sub_fontcolor; ?>
	<?php echo $sf_sub_fontsize; ?>
}

ul.sf-menu ul li.active > a, 
ul.sf-menu ul li.active > span
{
    <?php echo $sf_sub_active_fontcolor; ?>
}

ul.sf-menu ul li a:hover, 
ul.sf-menu ul li span:hover
{
    <?php echo $sf_sub_hover_fontcolor; ?>
}

</style>