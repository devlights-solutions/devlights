<?php

/***************************************************************************************/
/*
/*		Designed by 'AS Designing'
/*		Web: http://www.asdesigning.com
/*		Web: http://www.astemplates.com
/*		License: GNU/GPL
/*
/**************************************************************************************/

include_once ('fonts.php');

function hex2rgb( $colour ) 
{
	if ( $colour[0] == '#' ) 
	{
		$colour = substr( $colour, 1 );
	}
	if ( strlen( $colour ) == 6 ) 
	{
		list( $r, $g, $b ) = array( $colour[0] . $colour[1], $colour[2] . $colour[3], $colour[4] . $colour[5] );
	} 
	elseif ( strlen( $colour ) == 3 ) 
	{
		list( $r, $g, $b ) = array( $colour[0] . $colour[0], $colour[1] . $colour[1], $colour[2] . $colour[2] );
	} 
	else 
	{
		return false;
	}
	$r = hexdec( $r );
	$g = hexdec( $g );
	$b = hexdec( $b );
	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}

$theme_style = $this->params->get('theme_style');
switch ($theme_style) 
{
	case 'blueivy':
		$theme_style = 'templates/'.$this->template.'/css/style.blueivy.css';
		break;
	case 'coffee':
		$theme_style = 'templates/'.$this->template.'/css/style.coffee.css';
		break;
	case 'copper':
		$theme_style = 'templates/'.$this->template.'/css/style.copper.css';
		break;
	case 'coral':
		$theme_style = 'templates/'.$this->template.'/css/style.coral.css';
		break;
	case 'firebrick':
		$theme_style = 'templates/'.$this->template.'/css/style.firebrick.css';
		break;
	case 'iguana':
		$theme_style = 'templates/'.$this->template.'/css/style.iguana.css';
		break;
	case 'jetgray':
		$theme_style = 'templates/'.$this->template.'/css/style.jetgray.css';
		break;
	case 'purple':
		$theme_style = 'templates/'.$this->template.'/css/style.purple.css';
		break;
	case 'teal':
		$theme_style = 'templates/'.$this->template.'/css/style.teal.css';
		break;
	default:
		$theme_style = '';
		break;
}


$header_bgcolor = '';
if($this->params->get('header_bgcolor'))
	$header_bgcolor = 'background-color: #' . $this->params->get('header_bgcolor') . ';';
	
$header_bgimage = '';
if ($this->params->get('header_bgimage'))
	$header_bgimage = 'background-image: url("'.JURI::root() . $this->params->get('header_bgimage').'")' . ';';
	

//--------------------------------------------------------------------------------------------------------------
// Logo


$logo = "";
if ($this->params->get('logo_img'))
{
	$logo = JURI::root() . $this->params->get('logo_img');
}

$slogan = "";
if ($this->params->get('logo_slogan'))
{
	$slogan = $this->params->get('logo_slogan');
}

$footer_logo = "";
if ($this->params->get('footer_logo_img'))
{
	$footer_logo = JURI::root() . $this->params->get('footer_logo_img');
}

$footer_slogan = "";
if ($this->params->get('footer_slogan'))
{
	$footer_slogan = $this->params->get('footer_slogan');
}

$logo_fontcolor = '';
if($this->params->get('logo_fontcolor'))
	$logo_fontcolor = 'color: #' . $this->params->get('logo_fontcolor') . ';';

$slogan_fontcolor = '';
if($this->params->get('slogan_fontcolor'))
	$slogan_fontcolor = 'color: #' . $this->params->get('slogan_fontcolor') . ';';
	
$footer_slogan_fontcolor = '';
if($this->params->get('footer_slogan_fontcolor'))
	$footer_slogan_fontcolor = 'color: #' . $this->params->get('footer_slogan_fontcolor') . ';';	
	
	
//--------------------------------------------------------------------------------------------------------------
// Top Header


$top_header_layout = $this->params->get('top_header_layout');
$top_header_layout_type = '';
$top_header_layout_size = "themeHtml5";

switch ($top_header_layout) 
{
	case '0':
		$top_header_layout_type = 'full';
		$top_header_layout_size = "html5nosize";
		break;
	case '1':
		$top_header_layout_type = 'full';
		$top_header_layout_size = "themeHtml5";
		break;
}

$top_header_fontcolor = '';
if($this->params->get('top_header_fontcolor'))
	$top_header_fontcolor = 'color: #' . $this->params->get('top_header_fontcolor') . ';';

$top_header_bgcolor = '';
if($this->params->get('top_header_bgcolor'))
	$top_header_bgcolor = 'background-color: #' . $this->params->get('top_header_bgcolor') . ';';



//--------------------------------------------------------------------------------------------------------------
// Main Menu

$mainmenu_layout = $this->params->get('mainmenu_layout');
$mainmenu_layout_type = '';

if ($mainmenu_layout == 1) 
{
	$mainmenu_layout_type = 'full';
}

$mainmenu_bgcolor = '';
if($this->params->get('mainmenu_bgcolor'))
	$mainmenu_bgcolor = 'background-color: #' . $this->params->get('mainmenu_bgcolor') . ';';


//--------------------------------------------------------------------------------------------------------------
// Slider

$slider_layout = $this->params->get('slider_layout');
$slider_layout_type = '';
$slider_layout_size = "themeHtml5";

switch ($slider_layout) 
{
	case '0':
		$slider_layout_type = 'full';
		$slider_layout_size = "html5nosize";
		break;
	case '1':
		$slider_layout_type = 'full';
		$slider_layout_size = "themeHtml5";
		break;
}

$slider_bgcolor = '';
if($this->params->get('slider_bgcolor'))
	$slider_bgcolor = 'background-color: #' . $this->params->get('slider_bgcolor') . ';';
	

//--------------------------------------------------------------------------------------------------------------
// Breadcrumbs

$breadcrumbs_layout = $this->params->get('breadcrumbs_layout');
$breadcrumbs_layout_type = '';
$breadcrumbs_layout_size = "themeHtml5";

switch ($breadcrumbs_layout) 
{
	case '0':
		$breadcrumbs_layout_type = 'full';
		$breadcrumbs_layout_size = "html5nosize";
		break;
	case '1':
		$breadcrumbs_layout_type = 'full';
		$breadcrumbs_layout_size = "themeHtml5";
		break;
}

$breadcrumbs_fontcolor = '';
$breadcrumbs_divider = '';
if($this->params->get('breadcrumbs_fontcolor'))
{
	$breadcrumbs_fontcolor = 'color: #' . $this->params->get('breadcrumbs_fontcolor') . ';';
	$breadcrumbs_divider = 'border-right: 1px solid #' . $this->params->get('breadcrumbs_fontcolor') . ';';
}

$breadcrumbs_hfontcolor = '';
if($this->params->get('breadcrumbs_hfontcolor'))
	$breadcrumbs_hfontcolor = 'color: #' . $this->params->get('breadcrumbs_hfontcolor') . ';';

$breadcrumbs_bgcolor = '';
if($this->params->get('breadcrumbs_bgcolor'))
	$breadcrumbs_bgcolor = 'background-color: #' . $this->params->get('breadcrumbs_bgcolor') . ';';
	
$breadcrumbs_bgimage = '';
if ($this->params->get('breadcrumbs_bgimage'))
	$breadcrumbs_bgimage = 'background-image: url("'.JURI::root() . $this->params->get('breadcrumbs_bgimage').'")' . ';';

$breadcrumbs_border_top = '';
if ($this->params->get('breadcrumbs_border_top'))
	$breadcrumbs_border_top = 'border-top: solid ' . $this->params->get('breadcrumbs_border_top') . 'px;';

$breadcrumbs_border_bottom = '';
if ($this->params->get('breadcrumbs_border_bottom'))
	$breadcrumbs_border_bottom = 'border-bottom: solid ' . $this->params->get('breadcrumbs_border_bottom') . 'px;';

$breadcrumbs_border_color = '';
if($this->params->get('breadcrumbs_border_color'))
	$breadcrumbs_border_color = 'border-color: #' . $this->params->get('breadcrumbs_border_color') . ';';


//--------------------------------------------------------------------------------------------------------------
// Bottom Header 

$bottom_header_layout = $this->params->get('bottom_header_layout');
$bottom_header_layout_type = '';
$bottom_header_layout_size = "themeHtml5";

switch ($bottom_header_layout) 
{
	case '0':
		$bottom_header_layout_type = 'full';
		$bottom_header_layout_size = "html5nosize";
		break;
	case '1':
		$bottom_header_layout_type = 'full';
		$bottom_header_layout_size = "themeHtml5";
		break;
}

$bottom_header_fontcolor = '';
if($this->params->get('bottom_header_fontcolor'))
	$bottom_header_fontcolor = 'color: #' . $this->params->get('bottom_header_fontcolor') . ';';

$bottom_header_link_fontcolor = '';
if($this->params->get('bottom_header_link_fontcolor'))
	$bottom_header_link_fontcolor = 'color: #' . $this->params->get('bottom_header_link_fontcolor') . ';';

$bottom_header_hlink_fontcolor = '';
if($this->params->get('bottom_header_hlink_fontcolor'))
	$bottom_header_hlink_fontcolor = 'color: #' . $this->params->get('bottom_header_hlink_fontcolor') . ';';

$bottom_header_h1_fontcolor = '';
if($this->params->get('bottom_header_h1_fontcolor'))
	$bottom_header_h1_fontcolor = 'color: #' . $this->params->get('bottom_header_h1_fontcolor') . ';';

$bottom_header_h2_fontcolor = '';
if($this->params->get('bottom_header_h2_fontcolor'))
	$bottom_header_h2_fontcolor = 'color: #' . $this->params->get('bottom_header_h2_fontcolor') . ';';

$bottom_header_h3_fontcolor = '';
if($this->params->get('bottom_header_h3_fontcolor'))
	$bottom_header_h3_fontcolor = 'color: #' . $this->params->get('bottom_header_h3_fontcolor') . ';';

$bottom_header_h4_fontcolor = '';
if($this->params->get('bottom_header_h4_fontcolor'))
	$bottom_header_h4_fontcolor = 'color: #' . $this->params->get('bottom_header_h4_fontcolor') . ';';
	
$bottom_header_bgcolor = '';
if($this->params->get('bottom_header_bgcolor'))
	$bottom_header_bgcolor = 'background-color: #' . $this->params->get('bottom_header_bgcolor') . ';';
	
$bottom_header_bgimage = '';
if ($this->params->get('bottom_header_bgimage'))
	$bottom_header_bgimage = 'background-image: url("'.JURI::root() . $this->params->get('bottom_header_bgimage').'")' . ';';


//--------------------------------------------------------------------------------------------------------------
// Content 1 

$content1_layout = $this->params->get('content1_layout');
$content1_layout_type = '';
$content1_layout_size = "themeHtml5";

switch ($content1_layout) 
{
	case '0':
		$content1_layout_type = 'full';
		$content1_layout_size = "html5nosize";
		break;
	case '1':
		$content1_layout_type = 'full';
		$content1_layout_size = "themeHtml5";
		break;
}

$content1_fontcolor = '';
if($this->params->get('content1_fontcolor'))
	$content1_fontcolor = 'color: #' . $this->params->get('content1_fontcolor') . ';';

$content1_link_fontcolor = '';
if($this->params->get('content1_link_fontcolor'))
	$content1_link_fontcolor = 'color: #' . $this->params->get('content1_link_fontcolor') . ';';

$content1_hlink_fontcolor = '';
if($this->params->get('content1_hlink_fontcolor'))
	$content1_hlink_fontcolor = 'color: #' . $this->params->get('content1_hlink_fontcolor') . ';';

$content1_h1_fontcolor = '';
if($this->params->get('content1_h1_fontcolor'))
	$content1_h1_fontcolor = 'color: #' . $this->params->get('content1_h1_fontcolor') . ';';

$content1_h2_fontcolor = '';
if($this->params->get('content1_h2_fontcolor'))
	$content1_h2_fontcolor = 'color: #' . $this->params->get('content1_h2_fontcolor') . ';';

$content1_h3_fontcolor = '';
if($this->params->get('content1_h3_fontcolor'))
	$content1_h3_fontcolor = 'color: #' . $this->params->get('content1_h3_fontcolor') . ';';

$content1_h4_fontcolor = '';
if($this->params->get('content1_h4_fontcolor'))
	$content1_h4_fontcolor = 'color: #' . $this->params->get('content1_h4_fontcolor') . ';';

$content1_bgimage = '';
if ($this->params->get('content1_bgimage'))
	$content1_bgimage = 'background-image: url("'.JURI::root() . $this->params->get('content1_bgimage').'")' . ';';

$content1_padding_top = '';
if ($this->params->get('content1_padding_top'))
	$content1_padding_top = 'padding-top: ' . $this->params->get('content1_padding_top') . 'px;';

$content1_padding_bottom = '';
if ($this->params->get('content1_padding_bottom'))
	$content1_padding_bottom = 'padding-bottom: ' . $this->params->get('content1_padding_bottom') . 'px;';

$content1_margin_top = '';
if ($this->params->get('content1_margin_top'))
	$content1_margin_top = 'margin-top: ' . $this->params->get('content1_margin_top') . 'px;';

$content1_margin_bottom = '';
if ($this->params->get('content1_margin_bottom'))
	$content1_margin_bottom = 'margin-bottom: ' . $this->params->get('content1_margin_bottom') . 'px;';

$content1_left_bgcolor = '';
if($this->params->get('content1_left_bgcolor'))
	$content1_left_bgcolor = 'background-color: #' . $this->params->get('content1_left_bgcolor') . ';';
	
$content1_left_bgimage = '';
if ($this->params->get('content1_left_bgimage'))
	$content1_left_bgimage = 'background-image: url("'.JURI::root() . $this->params->get('content1_left_bgimage').'")' . ';';


//--------------------------------------------------------------------------------------------------------------
// Content 2 

$content2_layout = $this->params->get('content2_layout');
$content2_layout_type = '';
$content2_layout_size = "themeHtml5";

switch ($content2_layout) 
{
	case '0':
		$content2_layout_type = 'full';
		$content2_layout_size = "html5nosize";
		break;
	case '1':
		$content2_layout_type = 'full';
		$content2_layout_size = "themeHtml5";
		break;
}

$content2_fontcolor = '';
if($this->params->get('content2_fontcolor'))
	$content2_fontcolor = 'color: #' . $this->params->get('content2_fontcolor') . ';';

$content2_link_fontcolor = '';
if($this->params->get('content2_link_fontcolor'))
	$content2_link_fontcolor = 'color: #' . $this->params->get('content2_link_fontcolor') . ';';

$content2_hlink_fontcolor = '';
if($this->params->get('content2_hlink_fontcolor'))
	$content2_hlink_fontcolor = 'color: #' . $this->params->get('content2_hlink_fontcolor') . ';';

$content2_h1_fontcolor = '';
if($this->params->get('content2_h1_fontcolor'))
	$content2_h1_fontcolor = 'color: #' . $this->params->get('content2_h1_fontcolor') . ';';

$content2_h2_fontcolor = '';
if($this->params->get('content2_h2_fontcolor'))
	$content2_h2_fontcolor = 'color: #' . $this->params->get('content2_h2_fontcolor') . ';';

$content2_h3_fontcolor = '';
if($this->params->get('content2_h3_fontcolor'))
	$content2_h3_fontcolor = 'color: #' . $this->params->get('content2_h3_fontcolor') . ';';

$content2_h4_fontcolor = '';
if($this->params->get('content2_h4_fontcolor'))
	$content2_h4_fontcolor = 'color: #' . $this->params->get('content2_h4_fontcolor') . ';';

$content2_bgcolor = '';
if($this->params->get('content2_bgcolor'))
	$content2_bgcolor = 'background-color: #' . $this->params->get('content2_bgcolor') . ';';

$content2_bgimage = '';
if ($this->params->get('content2_bgimage'))
	$content2_bgimage = 'background-image: url("'.JURI::root() . $this->params->get('content2_bgimage').'")' . ';';

$content2_padding_top = '';
if ($this->params->get('content2_padding_top'))
	$content2_padding_top = 'padding-top: ' . $this->params->get('content2_padding_top') . 'px;';

$content2_padding_bottom = '';
if ($this->params->get('content2_padding_bottom'))
	$content2_padding_bottom = 'padding-bottom: ' . $this->params->get('content2_padding_bottom') . 'px;';

$content2_margin_top = '';
if ($this->params->get('content2_margin_top'))
	$content2_margin_top = 'margin-top: ' . $this->params->get('content2_margin_top') . 'px;';

$content2_margin_bottom = '';
if ($this->params->get('content2_margin_bottom'))
	$content2_margin_bottom = 'margin-bottom: ' . $this->params->get('content2_margin_bottom') . 'px;';


//--------------------------------------------------------------------------------------------------------------
// Content 3 

$content3_layout = $this->params->get('content3_layout');
$content3_layout_type = '';
$content3_layout_size = "themeHtml5";

switch ($content3_layout) 
{
	case '0':
		$content3_layout_type = 'full';
		$content3_layout_size = "html5nosize";
		break;
	case '1':
		$content3_layout_type = 'full';
		$content3_layout_size = "themeHtml5";
		break;
}

$content3_fontcolor = '';
if($this->params->get('content3_fontcolor'))
	$content3_fontcolor = 'color: #' . $this->params->get('content3_fontcolor') . ';';

$content3_link_fontcolor = '';
if($this->params->get('content3_link_fontcolor'))
	$content3_link_fontcolor = 'color: #' . $this->params->get('content3_link_fontcolor') . ';';

$content3_hlink_fontcolor = '';
if($this->params->get('content3_hlink_fontcolor'))
	$content3_hlink_fontcolor = 'color: #' . $this->params->get('content3_hlink_fontcolor') . ';';

$content3_h1_fontcolor = '';
if($this->params->get('content3_h1_fontcolor'))
	$content3_h1_fontcolor = 'color: #' . $this->params->get('content3_h1_fontcolor') . ';';

$content3_h2_fontcolor = '';
if($this->params->get('content3_h2_fontcolor'))
	$content3_h2_fontcolor = 'color: #' . $this->params->get('content3_h2_fontcolor') . ';';

$content3_h3_fontcolor = '';
if($this->params->get('content3_h3_fontcolor'))
	$content3_h3_fontcolor = 'color: #' . $this->params->get('content3_h3_fontcolor') . ';';

$content3_h4_fontcolor = '';
if($this->params->get('content3_h4_fontcolor'))
	$content3_h4_fontcolor = 'color: #' . $this->params->get('content3_h4_fontcolor') . ';';

$content3_bgcolor = '';
if($this->params->get('content3_bgcolor'))
	$content3_bgcolor = 'background-color: #' . $this->params->get('content3_bgcolor') . ';';

$content3_bgimage = '';
if ($this->params->get('content3_bgimage'))
	$content3_bgimage = 'background-image: url("'.JURI::root() . $this->params->get('content3_bgimage').'")' . ';';

$content3_padding_top = '';
if ($this->params->get('content3_padding_top'))
	$content3_padding_top = 'padding-top: ' . $this->params->get('content3_padding_top') . 'px;';

$content3_padding_bottom = '';
if ($this->params->get('content3_padding_bottom'))
	$content3_padding_bottom = 'padding-bottom: ' . $this->params->get('content3_padding_bottom') . 'px;';

$content3_margin_top = '';
if ($this->params->get('content3_margin_top'))
	$content3_margin_top = 'margin-top: ' . $this->params->get('content3_margin_top') . 'px;';

$content3_margin_bottom = '';
if ($this->params->get('content3_margin_bottom'))
	$content3_margin_bottom = 'margin-bottom: ' . $this->params->get('content3_margin_bottom') . 'px;';


//--------------------------------------------------------------------------------------------------------------
// Main Content

$main_content_layout = $this->params->get('main_content_layout');
$main_content_layout_type = '';

if ($main_content_layout == 1) 
{
	$main_content_layout_type = 'full';
}

$main_content_fontcolor = '';
if($this->params->get('main_content_fontcolor'))
	$main_content_fontcolor = 'color: #' . $this->params->get('main_content_fontcolor') . ';';

$main_content_link_fontcolor = '';
if($this->params->get('main_content_link_fontcolor'))
	$main_content_link_fontcolor = 'color: #' . $this->params->get('main_content_link_fontcolor') . ';';

$main_content_hlink_fontcolor = '';
if($this->params->get('main_content_hlink_fontcolor'))
	$main_content_hlink_fontcolor = 'color: #' . $this->params->get('main_content_hlink_fontcolor') . ';';

$main_content_h1_fontcolor = '';
if($this->params->get('main_content_h1_fontcolor'))
	$main_content_h1_fontcolor = 'color: #' . $this->params->get('main_content_h1_fontcolor') . ';';

$main_content_h2_fontcolor = '';
if($this->params->get('main_content_h2_fontcolor'))
	$main_content_h2_fontcolor = 'color: #' . $this->params->get('main_content_h2_fontcolor') . ';';

$main_content_h3_fontcolor = '';
if($this->params->get('main_content_h3_fontcolor'))
	$main_content_h3_fontcolor = 'color: #' . $this->params->get('main_content_h3_fontcolor') . ';';

$main_content_h4_fontcolor = '';
if($this->params->get('main_content_h4_fontcolor'))
	$main_content_h4_fontcolor = 'color: #' . $this->params->get('main_content_h4_fontcolor') . ';';

$main_content_bgcolor = '';
if($this->params->get('main_content_bgcolor'))
	$main_content_bgcolor = 'background-color: #' . $this->params->get('main_content_bgcolor') . ';';

$main_content_bgimage = '';
if ($this->params->get('main_content_bgimage'))
	$main_content_bgimage = 'background-image: url("'.JURI::root() . $this->params->get('main_content_bgimage').'")' . ';';

$main_content_padding_top = '';
if ($this->params->get('main_content_padding_top'))
	$main_content_padding_top = 'padding-top: ' . $this->params->get('main_content_padding_top') . 'px;';

$main_content_padding_bottom = '';
if ($this->params->get('main_content_padding_bottom'))
	$main_content_padding_bottom = 'padding-bottom: ' . $this->params->get('main_content_padding_bottom') . 'px;';

$main_content_margin_top = '';
if ($this->params->get('main_content_margin_top'))
	$main_content_margin_top = 'margin-top: ' . $this->params->get('main_content_margin_top') . 'px;';

$main_content_margin_bottom = '';
if ($this->params->get('main_content_margin_bottom'))
	$main_content_margin_bottom = 'margin-bottom: ' . $this->params->get('main_content_margin_bottom') . 'px;';


//--------------------------------------------------------------------------------------------------------------
// Content 4 

$content4_layout = $this->params->get('content4_layout');
$content4_layout_type = '';
$content4_layout_size = "themeHtml5";

switch ($content4_layout) 
{
	case '0':
		$content4_layout_type = 'full';
		$content4_layout_size = "html5nosize";
		break;
	case '1':
		$content4_layout_type = 'full';
		$content4_layout_size = "themeHtml5";
		break;
}

$content4_fontcolor = '';
if($this->params->get('content4_fontcolor'))
	$content4_fontcolor = 'color: #' . $this->params->get('content4_fontcolor') . ';';

$content4_link_fontcolor = '';
if($this->params->get('content4_link_fontcolor'))
	$content4_link_fontcolor = 'color: #' . $this->params->get('content4_link_fontcolor') . ';';

$content4_hlink_fontcolor = '';
if($this->params->get('content4_hlink_fontcolor'))
	$content4_hlink_fontcolor = 'color: #' . $this->params->get('content4_hlink_fontcolor') . ';';

$content4_h1_fontcolor = '';
if($this->params->get('content4_h1_fontcolor'))
	$content4_h1_fontcolor = 'color: #' . $this->params->get('content4_h1_fontcolor') . ';';

$content4_h2_fontcolor = '';
if($this->params->get('content4_h2_fontcolor'))
	$content4_h2_fontcolor = 'color: #' . $this->params->get('content4_h2_fontcolor') . ';';

$content4_h3_fontcolor = '';
if($this->params->get('content4_h3_fontcolor'))
	$content4_h3_fontcolor = 'color: #' . $this->params->get('content4_h3_fontcolor') . ';';

$content4_h4_fontcolor = '';
if($this->params->get('content4_h4_fontcolor'))
	$content4_h4_fontcolor = 'color: #' . $this->params->get('content4_h4_fontcolor') . ';';

$content4_bgcolor = '';
if($this->params->get('content4_bgcolor'))
	$content4_bgcolor = 'background-color: #' . $this->params->get('content4_bgcolor') . ';';

$content4_bgcolor_opacity = '';
if($this->params->get('content4_bgcolor_opacity'))
{
	if($this->params->get('content4_bgcolor'))
	{
		$hex_content4_bgcolor = hex2rgb($this->params->get('content4_bgcolor'));
		$content4_bgcolor_opacity = 'background: rgba(' . $hex_content4_bgcolor['red'] . ',' . $hex_content4_bgcolor['green'] . ',' . $hex_content4_bgcolor['blue'] . ',' . ($this->params->get('content4_bgcolor_opacity')/100) . ');';
	}
	else
		$content4_bgcolor_opacity = 'opacity: ' . ($this->params->get('content4_bgcolor_opacity')/100) . ';';
}

$content4_bgimage = '';
if ($this->params->get('content4_bgimage'))
	$content4_bgimage = 'background-image: url("'.JURI::root() . $this->params->get('content4_bgimage').'")' . ';';

$content4_padding_top = '';
if ($this->params->get('content4_padding_top'))
	$content4_padding_top = 'padding-top: ' . $this->params->get('content4_padding_top') . 'px;';

$content4_padding_bottom = '';
if ($this->params->get('content4_padding_bottom'))
	$content4_padding_bottom = 'padding-bottom: ' . $this->params->get('content4_padding_bottom') . 'px;';

$content4_margin_top = '';
if ($this->params->get('content4_margin_top'))
	$content4_margin_top = 'margin-top: ' . $this->params->get('content4_margin_top') . 'px;';

$content4_margin_bottom = '';
if ($this->params->get('content4_margin_bottom'))
	$content4_margin_bottom = 'margin-bottom: ' . $this->params->get('content4_margin_bottom') . 'px;';


//--------------------------------------------------------------------------------------------------------------
// Content 5 


$content5_layout = $this->params->get('content5_layout');
$content5_layout_type = '';
$content5_layout_size = "themeHtml5";

switch ($content5_layout) 
{
	case '0':
		$content5_layout_type = 'full';
		$content5_layout_size = "html5nosize";
		break;
	case '1':
		$content5_layout_type = 'full';
		$content5_layout_size = "themeHtml5";
		break;
}

$content5_fontcolor = '';
if($this->params->get('content5_fontcolor'))
	$content5_fontcolor = 'color: #' . $this->params->get('content5_fontcolor') . ';';

$content5_link_fontcolor = '';
if($this->params->get('content5_link_fontcolor'))
	$content5_link_fontcolor = 'color: #' . $this->params->get('content5_link_fontcolor') . ';';

$content5_hlink_fontcolor = '';
if($this->params->get('content5_hlink_fontcolor'))
	$content5_hlink_fontcolor = 'color: #' . $this->params->get('content5_hlink_fontcolor') . ';';

$content5_h1_fontcolor = '';
if($this->params->get('content5_h1_fontcolor'))
	$content5_h1_fontcolor = 'color: #' . $this->params->get('content5_h1_fontcolor') . ';';

$content5_h2_fontcolor = '';
if($this->params->get('content5_h2_fontcolor'))
	$content5_h2_fontcolor = 'color: #' . $this->params->get('content5_h2_fontcolor') . ';';

$content5_h3_fontcolor = '';
if($this->params->get('content5_h3_fontcolor'))
	$content5_h3_fontcolor = 'color: #' . $this->params->get('content5_h3_fontcolor') . ';';

$content5_h4_fontcolor = '';
if($this->params->get('content5_h4_fontcolor'))
	$content5_h4_fontcolor = 'color: #' . $this->params->get('content5_h4_fontcolor') . ';';

$content5_bgcolor = '';
if($this->params->get('content5_bgcolor'))
	$content5_bgcolor = 'background-color: #' . $this->params->get('content5_bgcolor') . ';';

$content5_bgimage = '';
if ($this->params->get('content5_bgimage'))
	$content5_bgimage = 'background-image: url("'.JURI::root() . $this->params->get('content5_bgimage').'")' . ';';

$content5_padding_top = '';
if ($this->params->get('content5_padding_top'))
	$content5_padding_top = 'padding-top: ' . $this->params->get('content5_padding_top') . 'px;';

$content5_padding_bottom = '';
if ($this->params->get('content5_padding_bottom'))
	$content5_padding_bottom = 'padding-bottom: ' . $this->params->get('content5_padding_bottom') . 'px;';

$content5_margin_top = '';
if ($this->params->get('content5_margin_top'))
	$content5_margin_top = 'margin-top: ' . $this->params->get('content5_margin_top') . 'px;';

$content5_margin_bottom = '';
if ($this->params->get('content5_margin_bottom'))
	$content5_margin_bottom = 'margin-bottom: ' . $this->params->get('content5_margin_bottom') . 'px;';


//--------------------------------------------------------------------------------------------------------------
// Content 6 


$content6_layout = $this->params->get('content6_layout');
$content6_layout_type = '';
$content6_layout_size = "themeHtml5";

switch ($content6_layout) 
{
	case '0':
		$content6_layout_type = 'full';
		$content6_layout_size = "html5nosize";
		break;
	case '1':
		$content6_layout_type = 'full';
		$content6_layout_size = "themeHtml5";
		break;
}

$content6_fontcolor = '';
if($this->params->get('content6_fontcolor'))
	$content6_fontcolor = 'color: #' . $this->params->get('content6_fontcolor') . ';';

$content6_link_fontcolor = '';
if($this->params->get('content6_link_fontcolor'))
	$content6_link_fontcolor = 'color: #' . $this->params->get('content6_link_fontcolor') . ';';

$content6_hlink_fontcolor = '';
if($this->params->get('content6_hlink_fontcolor'))
	$content6_hlink_fontcolor = 'color: #' . $this->params->get('content6_hlink_fontcolor') . ';';

$content6_h1_fontcolor = '';
if($this->params->get('content6_h1_fontcolor'))
	$content6_h1_fontcolor = 'color: #' . $this->params->get('content6_h1_fontcolor') . ';';

$content6_h2_fontcolor = '';
if($this->params->get('content6_h2_fontcolor'))
	$content6_h2_fontcolor = 'color: #' . $this->params->get('content6_h2_fontcolor') . ';';

$content6_h3_fontcolor = '';
if($this->params->get('content6_h3_fontcolor'))
	$content6_h3_fontcolor = 'color: #' . $this->params->get('content6_h3_fontcolor') . ';';

$content6_h4_fontcolor = '';
if($this->params->get('content6_h4_fontcolor'))
	$content6_h4_fontcolor = 'color: #' . $this->params->get('content6_h4_fontcolor') . ';';

$content6_bgcolor = '';
if($this->params->get('content6_bgcolor'))
	$content6_bgcolor = 'background-color: #' . $this->params->get('content6_bgcolor') . ';';

$content6_bgimage = '';
if ($this->params->get('content6_bgimage'))
	$content6_bgimage = 'background-image: url("'.JURI::root() . $this->params->get('content6_bgimage').'")' . ';';

$content6_padding_top = '';
if ($this->params->get('content6_padding_top'))
	$content6_padding_top = 'padding-top: ' . $this->params->get('content6_padding_top') . 'px;';

$content6_padding_bottom = '';
if ($this->params->get('content6_padding_bottom'))
	$content6_padding_bottom = 'padding-bottom: ' . $this->params->get('content6_padding_bottom') . 'px;';

$content6_margin_top = '';
if ($this->params->get('content6_margin_top'))
	$content6_margin_top = 'margin-top: ' . $this->params->get('content6_margin_top') . 'px;';

$content6_margin_bottom = '';
if ($this->params->get('content6_margin_bottom'))
	$content6_margin_bottom = 'margin-bottom: ' . $this->params->get('content6_margin_bottom') . 'px;';


//--------------------------------------------------------------------------------------------------------------
// Content 7 


$content7_layout = $this->params->get('content7_layout');
$content7_layout_type = '';
$content7_layout_size = "themeHtml5";

switch ($content7_layout) 
{
	case '0':
		$content7_layout_type = 'full';
		$content7_layout_size = "html5nosize";
		break;
	case '1':
		$content7_layout_type = 'full';
		$content7_layout_size = "themeHtml5";
		break;
}

$content7_fontcolor = '';
if($this->params->get('content7_fontcolor'))
	$content7_fontcolor = 'color: #' . $this->params->get('content7_fontcolor') . ';';

$content7_link_fontcolor = '';
if($this->params->get('content7_link_fontcolor'))
	$content7_link_fontcolor = 'color: #' . $this->params->get('content7_link_fontcolor') . ';';

$content7_hlink_fontcolor = '';
if($this->params->get('content7_hlink_fontcolor'))
	$content7_hlink_fontcolor = 'color: #' . $this->params->get('content7_hlink_fontcolor') . ';';

$content7_h1_fontcolor = '';
if($this->params->get('content7_h1_fontcolor'))
	$content7_h1_fontcolor = 'color: #' . $this->params->get('content7_h1_fontcolor') . ';';

$content7_h2_fontcolor = '';
if($this->params->get('content7_h2_fontcolor'))
	$content7_h2_fontcolor = 'color: #' . $this->params->get('content7_h2_fontcolor') . ';';

$content7_h3_fontcolor = '';
if($this->params->get('content7_h3_fontcolor'))
	$content7_h3_fontcolor = 'color: #' . $this->params->get('content7_h3_fontcolor') . ';';

$content7_h4_fontcolor = '';
if($this->params->get('content7_h4_fontcolor'))
	$content7_h4_fontcolor = 'color: #' . $this->params->get('content7_h4_fontcolor') . ';';

$content7_bgcolor = '';
if($this->params->get('content7_bgcolor'))
	$content7_bgcolor = 'background-color: #' . $this->params->get('content7_bgcolor') . ';';

$content7_bgimage = '';
if ($this->params->get('content7_bgimage'))
	$content7_bgimage = 'background-image: url("'.JURI::root() . $this->params->get('content7_bgimage').'")' . ';';

$content7_padding_top = '';
if ($this->params->get('content7_padding_top'))
	$content7_padding_top = 'padding-top: ' . $this->params->get('content7_padding_top') . 'px;';

$content7_padding_bottom = '';
if ($this->params->get('content7_padding_bottom'))
	$content7_padding_bottom = 'padding-bottom: ' . $this->params->get('content7_padding_bottom') . 'px;';

$content7_margin_top = '';
if ($this->params->get('content7_margin_top'))
	$content7_margin_top = 'margin-top: ' . $this->params->get('content7_margin_top') . 'px;';

$content7_margin_bottom = '';
if ($this->params->get('content7_margin_bottom'))
	$content7_margin_bottom = 'margin-bottom: ' . $this->params->get('content7_margin_bottom') . 'px;';


//--------------------------------------------------------------------------------------------------------------
// Content 8 


$content8_layout = $this->params->get('content8_layout');
$content8_layout_type = '';
$content8_layout_size = "themeHtml5";

switch ($content8_layout) 
{
	case '0':
		$content8_layout_type = 'full';
		$content8_layout_size = "html5nosize";
		break;
	case '1':
		$content8_layout_type = 'full';
		$content8_layout_size = "themeHtml5";
		break;
}

$content8_fontcolor = '';
if($this->params->get('content8_fontcolor'))
	$content8_fontcolor = 'color: #' . $this->params->get('content8_fontcolor') . ';';

$content8_link_fontcolor = '';
if($this->params->get('content8_link_fontcolor'))
	$content8_link_fontcolor = 'color: #' . $this->params->get('content8_link_fontcolor') . ';';

$content8_hlink_fontcolor = '';
if($this->params->get('content8_hlink_fontcolor'))
	$content8_hlink_fontcolor = 'color: #' . $this->params->get('content8_hlink_fontcolor') . ';';

$content8_h1_fontcolor = '';
if($this->params->get('content8_h1_fontcolor'))
	$content8_h1_fontcolor = 'color: #' . $this->params->get('content8_h1_fontcolor') . ';';

$content8_h2_fontcolor = '';
if($this->params->get('content8_h2_fontcolor'))
	$content8_h2_fontcolor = 'color: #' . $this->params->get('content8_h2_fontcolor') . ';';

$content8_h3_fontcolor = '';
if($this->params->get('content8_h3_fontcolor'))
	$content8_h3_fontcolor = 'color: #' . $this->params->get('content8_h3_fontcolor') . ';';

$content8_h4_fontcolor = '';
if($this->params->get('content8_h4_fontcolor'))
	$content8_h4_fontcolor = 'color: #' . $this->params->get('content8_h4_fontcolor') . ';';

$content8_bgcolor = '';
if($this->params->get('content8_bgcolor'))
	$content8_bgcolor = 'background-color: #' . $this->params->get('content8_bgcolor') . ';';

$content8_bgimage = '';
if ($this->params->get('content8_bgimage'))
	$content8_bgimage = 'background-image: url("'.JURI::root() . $this->params->get('content8_bgimage').'")' . ';';

$content8_padding_top = '';
if ($this->params->get('content8_padding_top'))
	$content8_padding_top = 'padding-top: ' . $this->params->get('content8_padding_top') . 'px;';

$content8_padding_bottom = '';
if ($this->params->get('content8_padding_bottom'))
	$content8_padding_bottom = 'padding-bottom: ' . $this->params->get('content8_padding_bottom') . 'px;';

$content8_margin_top = '';
if ($this->params->get('content8_margin_top'))
	$content8_margin_top = 'margin-top: ' . $this->params->get('content8_margin_top') . 'px;';

$content8_margin_bottom = '';
if ($this->params->get('content8_margin_bottom'))
	$content8_margin_bottom = 'margin-bottom: ' . $this->params->get('content8_margin_bottom') . 'px;';


//--------------------------------------------------------------------------------------------------------------
// Footer 1


$footer1_layout = $this->params->get('footer1_layout');
$footer1_layout_type = '';
$footer1_layout_size = "themeHtml5";

switch ($footer1_layout) 
{
	case '0':
		$footer1_layout_type = 'full';
		$footer1_layout_size = "html5nosize";
		break;
	case '1':
		$footer1_layout_type = 'full';
		$footer1_layout_size = "themeHtml5";
		break;
}

$footer1_fontcolor = '';
if($this->params->get('footer1_fontcolor'))
	$footer1_fontcolor = 'color: #' . $this->params->get('footer1_fontcolor') . ';';

$footer1_link_fontcolor = '';
if($this->params->get('footer1_link_fontcolor'))
	$footer1_link_fontcolor = 'color: #' . $this->params->get('footer1_link_fontcolor') . ';';

$footer1_hlink_fontcolor = '';
if($this->params->get('footer1_hlink_fontcolor'))
	$footer1_hlink_fontcolor = 'color: #' . $this->params->get('footer1_hlink_fontcolor') . ';';

$footer1_h1_fontcolor = '';
if($this->params->get('footer1_h1_fontcolor'))
	$footer1_h1_fontcolor = 'color: #' . $this->params->get('footer1_h1_fontcolor') . ';';

$footer1_h2_fontcolor = '';
if($this->params->get('footer1_h2_fontcolor'))
	$footer1_h2_fontcolor = 'color: #' . $this->params->get('footer1_h2_fontcolor') . ';';

$footer1_h3_fontcolor = '';
if($this->params->get('footer1_h3_fontcolor'))
	$footer1_h3_fontcolor = 'color: #' . $this->params->get('footer1_h3_fontcolor') . ';';

$footer1_h4_fontcolor = '';
if($this->params->get('footer1_h4_fontcolor'))
	$footer1_h4_fontcolor = 'color: #' . $this->params->get('footer1_h4_fontcolor') . ';';

$footer1_bgcolor = '';
if($this->params->get('footer1_bgcolor'))
	$footer1_bgcolor = 'background-color: #' . $this->params->get('footer1_bgcolor') . ';';

$footer1_bgimage = '';
if ($this->params->get('footer1_bgimage'))
	$footer1_bgimage = 'background-image: url("'.JURI::root() . $this->params->get('footer1_bgimage').'")' . ';';

$footer1_padding_top = '';
if ($this->params->get('footer1_padding_top'))
	$footer1_padding_top = 'padding-top: ' . $this->params->get('footer1_padding_top') . 'px;';

$footer1_padding_bottom = '';
if ($this->params->get('footer1_padding_bottom'))
	$footer1_padding_bottom = 'padding-bottom: ' . $this->params->get('footer1_padding_bottom') . 'px;';

$footer1_margin_top = '';
if ($this->params->get('footer1_margin_top'))
	$footer1_margin_top = 'margin-top: ' . $this->params->get('footer1_margin_top') . 'px;';

$footer1_margin_bottom = '';
if ($this->params->get('footer1_margin_bottom'))
	$footer1_margin_bottom = 'margin-bottom: ' . $this->params->get('footer1_margin_bottom') . 'px;';


//--------------------------------------------------------------------------------------------------------------
// Footer 2


$footer2_layout = $this->params->get('footer2_layout');
$footer2_layout_type = '';
$footer2_layout_size = "themeHtml5";

switch ($footer2_layout) 
{
	case '0':
		$footer2_layout_type = 'full';
		$footer2_layout_size = "html5nosize";
		break;
	case '1':
		$footer2_layout_type = 'full';
		$footer2_layout_size = "themeHtml5";
		break;
}

$footer2_fontcolor = '';
if($this->params->get('footer2_fontcolor'))
	$footer2_fontcolor = 'color: #' . $this->params->get('footer2_fontcolor') . ';';

$footer2_link_fontcolor = '';
if($this->params->get('footer2_link_fontcolor'))
	$footer2_link_fontcolor = 'color: #' . $this->params->get('footer2_link_fontcolor') . ';';

$footer2_hlink_fontcolor = '';
if($this->params->get('footer2_hlink_fontcolor'))
	$footer2_hlink_fontcolor = 'color: #' . $this->params->get('footer2_hlink_fontcolor') . ';';

$footer2_h1_fontcolor = '';
if($this->params->get('footer2_h1_fontcolor'))
	$footer2_h1_fontcolor = 'color: #' . $this->params->get('footer2_h1_fontcolor') . ';';

$footer2_h2_fontcolor = '';
if($this->params->get('footer2_h2_fontcolor'))
	$footer2_h2_fontcolor = 'color: #' . $this->params->get('footer2_h2_fontcolor') . ';';

$footer2_h3_fontcolor = '';
if($this->params->get('footer2_h3_fontcolor'))
	$footer2_h3_fontcolor = 'color: #' . $this->params->get('footer2_h3_fontcolor') . ';';

$footer2_h4_fontcolor = '';
if($this->params->get('footer2_h4_fontcolor'))
	$footer2_h4_fontcolor = 'color: #' . $this->params->get('footer2_h4_fontcolor') . ';';

$footer2_bgcolor = '';
if($this->params->get('footer2_bgcolor'))
	$footer2_bgcolor = 'background-color: #' . $this->params->get('footer2_bgcolor') . ';';

$footer2_bgimage = '';
if ($this->params->get('footer2_bgimage'))
	$footer2_bgimage = 'background-image: url("'.JURI::root() . $this->params->get('footer2_bgimage').'")' . ';';

$footer2_padding_top = '';
if ($this->params->get('footer2_padding_top'))
	$footer2_padding_top = 'padding-top: ' . $this->params->get('footer2_padding_top') . 'px;';

$footer2_padding_bottom = '';
if ($this->params->get('footer2_padding_bottom'))
	$footer2_padding_bottom = 'padding-bottom: ' . $this->params->get('footer2_padding_bottom') . 'px;';

$footer2_margin_top = '';
if ($this->params->get('footer2_margin_top'))
	$footer2_margin_top = 'margin-top: ' . $this->params->get('footer2_margin_top') . 'px;';

$footer2_margin_bottom = '';
if ($this->params->get('footer2_margin_bottom'))
	$footer2_margin_bottom = 'margin-bottom: ' . $this->params->get('footer2_margin_bottom') . 'px;';


//--------------------------------------------------------------------------------------------------------------
// Footer 3


$footer3_layout = $this->params->get('footer3_layout');
$footer3_layout_type = '';
$footer3_layout_size = "themeHtml5";

switch ($footer3_layout) 
{
	case '0':
		$footer3_layout_type = 'full';
		$footer3_layout_size = "html5nosize";
		break;
	case '1':
		$footer3_layout_type = 'full';
		$footer3_layout_size = "themeHtml5";
		break;
}

$footer3_fontcolor = '';
if($this->params->get('footer3_fontcolor'))
	$footer3_fontcolor = 'color: #' . $this->params->get('footer3_fontcolor') . ';';

$footer3_link_fontcolor = '';
if($this->params->get('footer3_link_fontcolor'))
	$footer3_link_fontcolor = 'color: #' . $this->params->get('footer3_link_fontcolor') . ';';

$footer3_hlink_fontcolor = '';
if($this->params->get('footer3_hlink_fontcolor'))
	$footer3_hlink_fontcolor = 'color: #' . $this->params->get('footer3_hlink_fontcolor') . ';';

$footer3_h1_fontcolor = '';
if($this->params->get('footer3_h1_fontcolor'))
	$footer3_h1_fontcolor = 'color: #' . $this->params->get('footer3_h1_fontcolor') . ';';

$footer3_h2_fontcolor = '';
if($this->params->get('footer3_h2_fontcolor'))
	$footer3_h2_fontcolor = 'color: #' . $this->params->get('footer3_h2_fontcolor') . ';';

$footer3_h3_fontcolor = '';
if($this->params->get('footer3_h3_fontcolor'))
	$footer3_h3_fontcolor = 'color: #' . $this->params->get('footer3_h3_fontcolor') . ';';

$footer3_h4_fontcolor = '';
if($this->params->get('footer3_h4_fontcolor'))
	$footer3_h4_fontcolor = 'color: #' . $this->params->get('footer3_h4_fontcolor') . ';';

$footer3_bgcolor = '';
if($this->params->get('footer3_bgcolor'))
	$footer3_bgcolor = 'background-color: #' . $this->params->get('footer3_bgcolor') . ';';

$footer3_bgimage = '';
if ($this->params->get('footer3_bgimage'))
	$footer3_bgimage = 'background-image: url("'.JURI::root() . $this->params->get('footer3_bgimage').'")' . ';';

$footer3_padding_top = '';
if ($this->params->get('footer3_padding_top'))
	$footer3_padding_top = 'padding-top: ' . $this->params->get('footer3_padding_top') . 'px;';

$footer3_padding_bottom = '';
if ($this->params->get('footer3_padding_bottom'))
	$footer3_padding_bottom = 'padding-bottom: ' . $this->params->get('footer3_padding_bottom') . 'px;';

$footer3_margin_top = '';
if ($this->params->get('footer3_margin_top'))
	$footer3_margin_top = 'margin-top: ' . $this->params->get('footer3_margin_top') . 'px;';

$footer3_margin_bottom = '';
if ($this->params->get('footer3_margin_bottom'))
	$footer3_margin_bottom = 'margin-bottom: ' . $this->params->get('footer3_margin_bottom') . 'px;';


//--------------------------------------------------------------------------------------------------------------
// Copyright


$copy_fontcolor = '';
if($this->params->get('copy_fontcolor'))
	$copy_fontcolor = 'color: #' . $this->params->get('copy_fontcolor') . ';';

$copy_link_fontcolor = '';
if($this->params->get('copy_link_fontcolor'))
	$copy_link_fontcolor = 'color: #' . $this->params->get('copy_link_fontcolor') . ';';

$copy_hlink_fontcolor = '';
if($this->params->get('copy_hlink_fontcolor'))
	$copy_hlink_fontcolor = 'color: #' . $this->params->get('copy_hlink_fontcolor') . ';';

$copy_bgcolor = '';
if($this->params->get('copy_bgcolor'))
	$copy_bgcolor = 'background-color: #' . $this->params->get('copy_bgcolor') . ';';

$copy_bgimage = '';
if ($this->params->get('copy_bgimage'))
	$copy_bgimage = 'background-image: url("'.JURI::root() . $this->params->get('copy_bgimage').'")' . ';';

$copy_padding_top = '';
if ($this->params->get('copy_padding_top'))
	$copy_padding_top = 'padding-top: ' . $this->params->get('copy_padding_top') . 'px;';

$copy_padding_bottom = '';
if ($this->params->get('copy_padding_bottom'))
	$copy_padding_bottom = 'padding-bottom: ' . $this->params->get('copy_padding_bottom') . 'px;';


//--------------------------------------------------------------------------------------------------------------
// Typography


$body_font_family = '';
if($this->params->get('body_font_family'))
	$body_font_family   = $this->params->get('body_font_family');
$bodyfont_arr			= array('fontlink'=>false, 'fontfamily'=>false);
$bodyfont_arr			= fontChooser($body_font_family);
$body_font_family 		= $bodyfont_arr['fontfamily'];
	
$heading_font_family = '';
if($this->params->get('heading_font_family'))
	$heading_font_family = $this->params->get('heading_font_family');
$hfont_arr				= array('fontlink'=>false, 'fontfamily'=>false);
$hfont_arr				= fontChooser($heading_font_family);
$heading_font_family	= $hfont_arr['fontfamily'];

$body_font_size = '';
if($this->params->get('body_font_size'))
	$body_font_size = 'font-size: ' . $this->params->get('body_font_size') . ';';
	
$h1_font_size = '';
if($this->params->get('h1_font_size'))
	$h1_font_size = 'font-size: ' . $this->params->get('h1_font_size') . ';';

$h2_font_size = '';
if($this->params->get('h2_font_size'))
	$h2_font_size = 'font-size: ' . $this->params->get('h2_font_size') . ';';
	
$h3_font_size = '';
if($this->params->get('h3_font_size'))
	$h3_font_size = 'font-size: ' . $this->params->get('h3_font_size') . ';';
	
$h4_font_size = '';
if($this->params->get('h4_font_size'))
	$h4_font_size = 'font-size: ' . $this->params->get('h4_font_size') . ';';
	
$h5_font_size = '';
if($this->params->get('h5_font_size'))
	$h5_font_size = 'font-size: ' . $this->params->get('h5_font_size') . ';';
	
$h6_font_size = '';
if($this->params->get('h6_font_size'))
	$h6_font_size = 'font-size: ' . $this->params->get('h6_font_size') . ';';						
		 
?>