<?php

/***************************************************************************************/
/*
/*		Designed by 'AS Designing'
/*		Web: http://www.asdesigning.com
/*		Web: http://www.astemplates.com
/*		License: GNU/GPL
/*
/**************************************************************************************/

?>

<style type="text/css">

body
{
	<?php echo $body_font_family; ?>
	<?php echo $body_font_size; ?>
}

h1, 
h2, 
h3, 
h4, 
h5,
h6
{
	<?php echo $heading_font_family; ?>	
}

h1
{
	<?php echo $h1_font_size; ?>	
}

h2
{
	<?php echo $h2_font_size; ?>	
}

h3
{
	<?php echo $h3_font_size; ?>	
}

h4
{
	<?php echo $h4_font_size; ?>	
}

h5
{
	<?php echo $h5_font_size; ?>	
}

h6
{
	<?php echo $h6_font_size; ?>	
}


/**************************************************************************************/
/*	 Header rows                                                                     */



#logo h1,
#logo h2,
#logo h3
{
	<?php echo $logo_fontcolor; ?>
}

#logo h4,
#logo h5,
#logo h6
{
	<?php echo $slogan_fontcolor; ?>
}

#header-wrapper
{
	<?php echo $header_bgcolor; ?>	
	<?php echo $header_bgimage; ?>		
}

#top-header-row
{
	<?php echo $top_header_fontcolor; ?>
	<?php echo $top_header_bgcolor; ?>	
}

#menu-row
{
	<?php echo $mainmenu_bgcolor; ?>	
}

#slider-row
{
	<?php echo $slider_bgcolor; ?>	
}

#breadcrumbs-row
{
	<?php echo $breadcrumbs_fontcolor; ?>
	<?php echo $breadcrumbs_bgcolor; ?>	
	<?php echo $breadcrumbs_bgimage; ?>	
	<?php echo $breadcrumbs_border_top; ?>	
	<?php echo $breadcrumbs_border_bottom; ?>	
	<?php echo $breadcrumbs_border_color; ?>	
}

#breadcrumbs-row .breadcrumb > .active,
#breadcrumbs-row .breadcrumb > li a:hover 
{
	<?php echo $breadcrumbs_hfontcolor; ?>
}

#breadcrumbs-row .breadcrumb > li 
{
	<?php echo $breadcrumbs_divider; ?>
}

#breadcrumbs-row .breadcrumb > li a
{
	<?php echo $breadcrumbs_fontcolor; ?>
}

#bottom-header-row
{
	<?php echo $bottom_header_bgcolor; ?>
	<?php echo $bottom_header_bgimage; ?>
	<?php echo $bottom_header_fontcolor; ?>	
}

#bottom-header-row a
{
	<?php echo $bottom_header_link_fontcolor; ?>
}

#bottom-header-row .h1,
#bottom-header-row h1
{
	<?php echo $bottom_header_h1_fontcolor; ?>
}

#bottom-header-row .h2,
#bottom-header-row h2
{
	<?php echo $bottom_header_h2_fontcolor; ?>
}

#bottom-header-row .h3,
#bottom-header-row h3
{
	<?php echo $bottom_header_h3_fontcolor; ?>
}

#bottom-header-row .h4,
#bottom-header-row h4
{
	<?php echo $bottom_header_h4_fontcolor; ?>
}


/**************************************************************************************/
/*	 Content row 1                                                                    */


#content-row-1 
{
	<?php echo $content1_padding_top; ?>
	<?php echo $content1_padding_bottom; ?>
	<?php echo $content1_margin_top; ?>
	<?php echo $content1_margin_bottom; ?>	
	<?php echo $content1_bgimage; ?>
	<?php echo $content1_fontcolor; ?>
}

#content-row-1 a,
#content-row-1 .archive-module li a, 
#content-row-1 .categories-module li a, 
#content-row-1 .mod-menu .nav.menu li a 
{
	<?php echo $content1_link_fontcolor; ?>
}

#content-row-1 a:hover,
#content-row-1 .archive-module li a:hover, 
#content-row-1 .categories-module li a:hover, 
#content-row-1 .mod-menu .nav.menu li a:hover
{
	<?php echo $content1_hlink_fontcolor; ?>
}

#content-row-1 .content-row-1-wrapper::before
{
	<?php echo $content1_left_bgcolor; ?>
	<?php echo $content1_left_bgimage; ?>
}

#content-row-1 .h1,
#content-row-1 h1
{
	<?php echo $content1_h1_fontcolor; ?>
}

#content-row-1 .h2,
#content-row-1 h2
{
	<?php echo $content1_h2_fontcolor; ?>
}

#content-row-1 .h3,
#content-row-1 h3
{
	<?php echo $content1_h3_fontcolor; ?>
}

#content-row-1 .h4,
#content-row-1 h4
{
	<?php echo $content1_h4_fontcolor; ?>
}


/**************************************************************************************/
/*	 Content row 2                                                                    */


#content-row-2 
{
	<?php echo $content2_padding_top; ?>
	<?php echo $content2_padding_bottom; ?>
	<?php echo $content2_margin_top; ?>
	<?php echo $content2_margin_bottom; ?>
	<?php echo $content2_bgcolor; ?>	
	<?php echo $content2_bgimage; ?>
	<?php echo $content2_fontcolor; ?>
}

#content-row-2 a,
#content-row-2 .archive-module li a, 
#content-row-2 .categories-module li a, 
#content-row-2 .mod-menu .nav.menu li a 
{
	<?php echo $content2_link_fontcolor; ?>
}

#content-row-2 a:hover,
#content-row-2 .archive-module li a:hover, 
#content-row-2 .categories-module li a:hover, 
#content-row-2 .mod-menu .nav.menu li a:hover
{
	<?php echo $content2_hlink_fontcolor; ?>
}

#content-row-2 .h1,
#content-row-2 h1
{
	<?php echo $content2_h1_fontcolor; ?>
}

#content-row-2 .h2,
#content-row-2 h2
{
	<?php echo $content2_h2_fontcolor; ?>
}

#content-row-2 .h3,
#content-row-2 h3
{
	<?php echo $content2_h3_fontcolor; ?>
}

#content-row-2 .h4,
#content-row-2 h4
{
	<?php echo $content2_h4_fontcolor; ?>
}


/**************************************************************************************/
/*	 Content row 3                                                                    */


#content-row-3 
{
	<?php echo $content3_padding_top; ?>
	<?php echo $content3_padding_bottom; ?>
	<?php echo $content3_margin_top; ?>
	<?php echo $content3_margin_bottom; ?>
	<?php echo $content3_bgcolor; ?>	
	<?php echo $content3_bgimage; ?>
	<?php echo $content3_fontcolor; ?>
}

#content-row-3 a,
#content-row-3 .archive-module li a, 
#content-row-3 .categories-module li a, 
#content-row-3 .mod-menu .nav.menu li a 
{
	<?php echo $content3_link_fontcolor; ?>
}

#content-row-3 a:hover,
#content-row-3 .archive-module li a:hover, 
#content-row-3 .categories-module li a:hover, 
#content-row-3 .mod-menu .nav.menu li a:hover
{
	<?php echo $content3_hlink_fontcolor; ?>
}

#content-row-3 .h1,
#content-row-3 h1
{
	<?php echo $content3_h1_fontcolor; ?>
}

#content-row-3 .h2,
#content-row-3 h2
{
	<?php echo $content3_h2_fontcolor; ?>
}

#content-row-3 .h3,
#content-row-3 h3
{
	<?php echo $content3_h3_fontcolor; ?>
}

#content-row-3 .h4,
#content-row-3 h4
{
	<?php echo $content3_h4_fontcolor; ?>
}


/**************************************************************************************/
/*	 Main content row                                                                 */


#main-content-row 
{
	<?php echo $main_content_padding_top; ?>
	<?php echo $main_content_padding_bottom; ?>
	<?php echo $main_content_margin_top; ?>
	<?php echo $main_content_margin_bottom; ?>
	<?php echo $main_content_bgcolor; ?>	
	<?php echo $main_content_bgimage; ?>
	<?php echo $main_content_fontcolor; ?>
}

#main-content-row a,
#main-content-row .archive-module li a, 
#main-content-row .categories-module li a, 
#main-content-row .mod-menu .nav.menu li a 
{
	<?php echo $main_content_link_fontcolor; ?>
}

#main-content-row a:hover,
#main-content-row .archive-module li a:hover, 
#main-content-row .categories-module li a:hover, 
#main-content-row .mod-menu .nav.menu li a:hover
{
	<?php echo $main_content_hlink_fontcolor; ?>
}

#main-content-row .h1,
#main-content-row h1
{
	<?php echo $main_content_h1_fontcolor; ?>
}

#main-content-row .h2,
#main-content-row h2
{
	<?php echo $main_content_h2_fontcolor; ?>
}

#main-content-row .h3,
#main-content-row h3
{
	<?php echo $main_content_h3_fontcolor; ?>
}

#main-content-row .h4,
#main-content-row h4
{
	<?php echo $main_content_h4_fontcolor; ?>
}


/**************************************************************************************/
/*	 Content row 4                                                                    */


#content-row-4 
{
	<?php echo $content4_padding_top; ?>
	<?php echo $content4_padding_bottom; ?>
	<?php echo $content4_margin_top; ?>
	<?php echo $content4_margin_bottom; ?>
	<?php echo $content4_bgcolor_opacity; ?>	
	<?php echo $content4_bgimage; ?>
	<?php echo $content4_fontcolor; ?>
}

#content-row-4 .row-wrapper::after 
{
    <?php echo $content4_bgcolor; ?>
}

#content-row-4 a,
#content-row-4 .archive-module li a, 
#content-row-4 .categories-module li a, 
#content-row-4 .mod-menu .nav.menu li a 
{
	<?php echo $content4_link_fontcolor; ?>
}

#content-row-4 a:hover,
#content-row-4 .archive-module li a:hover, 
#content-row-4 .categories-module li a:hover, 
#content-row-4 .mod-menu .nav.menu li a:hover
{
	<?php echo $content4_hlink_fontcolor; ?>
}

#content-row-4 .h1,
#content-row-4 h1
{
	<?php echo $content4_h1_fontcolor; ?>
}

#content-row-4 .h2,
#content-row-4 h2
{
	<?php echo $content4_h2_fontcolor; ?>
}

#content-row-4 .h3,
#content-row-4 h3
{
	<?php echo $content4_h3_fontcolor; ?>
}

#content-row-4 .h4,
#content-row-4 h4
{
	<?php echo $content4_h4_fontcolor; ?>
}


/**************************************************************************************/
/*	 Content row 5                                                                    */


#content-row-5 
{
	<?php echo $content5_padding_top; ?>
	<?php echo $content5_padding_bottom; ?>
	<?php echo $content5_margin_top; ?>
	<?php echo $content5_margin_bottom; ?>
	<?php echo $content5_bgcolor; ?>	
	<?php echo $content5_bgimage; ?>
	<?php echo $content5_fontcolor; ?>
}

#content-row-5 a,
#content-row-5 .archive-module li a, 
#content-row-5 .categories-module li a, 
#content-row-5 .mod-menu .nav.menu li a 
{
	<?php echo $content5_link_fontcolor; ?>
}

#content-row-5 a:hover,
#content-row-5 .archive-module li a:hover, 
#content-row-5 .categories-module li a:hover, 
#content-row-5 .mod-menu .nav.menu li a:hover
{
	<?php echo $content5_hlink_fontcolor; ?>
}

#content-row-5 .h1,
#content-row-5 h1
{
	<?php echo $content5_h1_fontcolor; ?>
}

#content-row-5 .h2,
#content-row-5 h2
{
	<?php echo $content5_h2_fontcolor; ?>
}

#content-row-5 .h3,
#content-row-5 h3
{
	<?php echo $content5_h3_fontcolor; ?>
}

#content-row-5 .h4,
#content-row-5 h4
{
	<?php echo $content5_h4_fontcolor; ?>
}


/**************************************************************************************/
/*	 Content row 6                                                                    */


#content-row-6 
{
	<?php echo $content6_padding_top; ?>
	<?php echo $content6_padding_bottom; ?>
	<?php echo $content6_margin_top; ?>
	<?php echo $content6_margin_bottom; ?>
	<?php echo $content6_bgcolor; ?>	
	<?php echo $content6_bgimage; ?>
	<?php echo $content6_fontcolor; ?>
}

#content-row-6 a,
#content-row-6 .archive-module li a, 
#content-row-6 .categories-module li a, 
#content-row-6 .mod-menu .nav.menu li a 
{
	<?php echo $content6_link_fontcolor; ?>
}

#content-row-6 a:hover,
#content-row-6 .archive-module li a:hover, 
#content-row-6 .categories-module li a:hover, 
#content-row-6 .mod-menu .nav.menu li a:hover
{
	<?php echo $content6_hlink_fontcolor; ?>
}

#content-row-6 .h1,
#content-row-6 h1
{
	<?php echo $content6_h1_fontcolor; ?>
}

#content-row-6 .h2,
#content-row-6 h2
{
	<?php echo $content6_h2_fontcolor; ?>
}

#content-row-6 .h3,
#content-row-6 h3
{
	<?php echo $content6_h3_fontcolor; ?>
}

#content-row-6 .h4,
#content-row-6 h4
{
	<?php echo $content6_h4_fontcolor; ?>
}


/**************************************************************************************/
/*	 Content row 7                                                                    */


#content-row-7 
{
	<?php echo $content7_padding_top; ?>
	<?php echo $content7_padding_bottom; ?>
	<?php echo $content7_margin_top; ?>
	<?php echo $content7_margin_bottom; ?>
	<?php echo $content7_bgcolor; ?>	
	<?php echo $content7_bgimage; ?>
	<?php echo $content7_fontcolor; ?>
}

#content-row-7 a,
#content-row-7 .archive-module li a, 
#content-row-7 .categories-module li a, 
#content-row-7 .mod-menu .nav.menu li a 
{
	<?php echo $content7_link_fontcolor; ?>
}

#content-row-7 a:hover,
#content-row-7 .archive-module li a:hover, 
#content-row-7 .categories-module li a:hover, 
#content-row-7 .mod-menu .nav.menu li a:hover
{
	<?php echo $content7_hlink_fontcolor; ?>
}

#content-row-7 .h1,
#content-row-7 h1
{
	<?php echo $content7_h1_fontcolor; ?>
}

#content-row-7 .h2,
#content-row-7 h2
{
	<?php echo $content7_h2_fontcolor; ?>
}

#content-row-7 .h3,
#content-row-7 h3
{
	<?php echo $content7_h3_fontcolor; ?>
}

#content-row-7 .h4,
#content-row-7 h4
{
	<?php echo $content7_h4_fontcolor; ?>
}


/**************************************************************************************/
/*	 Content row 8                                                                    */


#content-row-8 
{
	<?php echo $content8_padding_top; ?>
	<?php echo $content8_padding_bottom; ?>
	<?php echo $content8_margin_top; ?>
	<?php echo $content8_margin_bottom; ?>
	<?php echo $content8_bgcolor; ?>	
	<?php echo $content8_bgimage; ?>
	<?php echo $content8_fontcolor; ?>
}

#content-row-8 a,
#content-row-8 .archive-module li a, 
#content-row-8 .categories-module li a, 
#content-row-8 .mod-menu .nav.menu li a 
{
	<?php echo $content8_link_fontcolor; ?>
}

#content-row-8 a:hover,
#content-row-8 .archive-module li a:hover, 
#content-row-8 .categories-module li a:hover, 
#content-row-8 .mod-menu .nav.menu li a:hover
{
	<?php echo $content8_hlink_fontcolor; ?>
}

#content-row-8 .h1,
#content-row-8 h1
{
	<?php echo $content8_h1_fontcolor; ?>
}

#content-row-8 .h2,
#content-row-8 h2
{
	<?php echo $content8_h2_fontcolor; ?>
}

#content-row-8 .h3,
#content-row-8 h3
{
	<?php echo $content8_h3_fontcolor; ?>
}

#content-row-8 .h4,
#content-row-8 h4
{
	<?php echo $content8_h4_fontcolor; ?>
}


/**************************************************************************************/
/*	 Footer row 1                                                                    */


#footer-row-1 
{
	<?php echo $footer1_padding_top; ?>
	<?php echo $footer1_padding_bottom; ?>
	<?php echo $footer1_margin_top; ?>
	<?php echo $footer1_margin_bottom; ?>
	<?php echo $footer1_bgcolor; ?>	
	<?php echo $footer1_bgimage; ?>
	<?php echo $footer1_fontcolor; ?>
}

#footer-row-1 a,
#footer-row-1 .archive-module li a, 
#footer-row-1 .categories-module li a, 
#footer-row-1 .mod-menu .nav.menu li a 
{
	<?php echo $footer1_link_fontcolor; ?>
}

#footer-row-1 a:hover,
#footer-row-1 .archive-module li a:hover, 
#footer-row-1 .categories-module li a:hover, 
#footer-row-1 .mod-menu .nav.menu li a:hover
{
	<?php echo $footer1_hlink_fontcolor; ?>
}

#footer-row-1 .h1,
#footer-row-1 h1
{
	<?php echo $footer1_h1_fontcolor; ?>
}

#footer-row-1 .h2,
#footer-row-1 h2
{
	<?php echo $footer1_h2_fontcolor; ?>
}

#footer-row-1 .h3,
#footer-row-1 h3
{
	<?php echo $footer1_h3_fontcolor; ?>
}

#footer-row-1 .h4,
#footer-row-1 h4
{
	<?php echo $footer1_h4_fontcolor; ?>
}


/**************************************************************************************/
/*	 Footer row 2                                                                    */


#footer-row-2 
{
	<?php echo $footer2_padding_top; ?>
	<?php echo $footer2_padding_bottom; ?>
	<?php echo $footer2_margin_top; ?>
	<?php echo $footer2_margin_bottom; ?>
	<?php echo $footer2_bgcolor; ?>	
	<?php echo $footer2_bgimage; ?>
	<?php echo $footer2_fontcolor; ?>
}

#footer-row-2 a,
#footer-row-2 .archive-module li a, 
#footer-row-2 .categories-module li a, 
#footer-row-2 .mod-menu .nav.menu li a 
{
	<?php echo $footer2_link_fontcolor; ?>
}

#footer-row-2 a:hover,
#footer-row-2 .archive-module li a:hover, 
#footer-row-2 .categories-module li a:hover, 
#footer-row-2 .mod-menu .nav.menu li a:hover
{
	<?php echo $footer2_hlink_fontcolor; ?>
}

#footer-row-2 .h1,
#footer-row-2 h1
{
	<?php echo $footer2_h1_fontcolor; ?>
}

#footer-row-2 .h2,
#footer-row-2 h2
{
	<?php echo $footer2_h2_fontcolor; ?>
}

#footer-row-2 .h3,
#footer-row-2 h3
{
	<?php echo $footer2_h3_fontcolor; ?>
}

#footer-row-2 .h4,
#footer-row-2 h4
{
	<?php echo $footer2_h4_fontcolor; ?>
}


/**************************************************************************************/
/*	 Footer row 1                                                                    */


#footer-row-3 
{
	<?php echo $footer3_padding_top; ?>
	<?php echo $footer3_padding_bottom; ?>
	<?php echo $footer3_margin_top; ?>
	<?php echo $footer3_margin_bottom; ?>
	<?php echo $footer3_bgcolor; ?>	
	<?php echo $footer3_bgimage; ?>
	<?php echo $footer3_fontcolor; ?>
}

#footer-row-3 a,
#footer-row-3 .archive-module li a, 
#footer-row-3 .categories-module li a, 
#footer-row-3 .mod-menu .nav.menu li a 
{
	<?php echo $footer3_link_fontcolor; ?>
}

#footer-row-3 a:hover,
#footer-row-3 .archive-module li a:hover, 
#footer-row-3 .categories-module li a:hover, 
#footer-row-3 .mod-menu .nav.menu li a:hover
{
	<?php echo $footer3_hlink_fontcolor; ?>
}

#footer-row-3 .h1,
#footer-row-3 h1
{
	<?php echo $footer3_h1_fontcolor; ?>
}

#footer-row-3 .h2,
#footer-row-3 h2
{
	<?php echo $footer3_h2_fontcolor; ?>
}

#footer-row-3 .h3,
#footer-row-3 h3
{
	<?php echo $footer3_h3_fontcolor; ?>
}

#footer-row-3 .h4,
#footer-row-3 h4
{
	<?php echo $footer3_h4_fontcolor; ?>
}


/**************************************************************************************/
/*	 Copyright row                                                                    */


#copyright-row 
{
	<?php echo $copy_padding_top; ?>
	<?php echo $copy_padding_bottom; ?>
	<?php echo $copy_bgcolor; ?>	
	<?php echo $copy_bgimage; ?>
	<?php echo $copy_fontcolor; ?>
}

#copyright-row a,
#copyright-row .archive-module li a, 
#copyright-row .categories-module li a, 
#copyright-row .mod-menu .nav.menu li a 
{
	<?php echo $copy_link_fontcolor; ?>
}

#copyright-row a:hover,
#copyright-row .archive-module li a:hover, 
#copyright-row .categories-module li a:hover, 
#copyright-row .mod-menu .nav.menu li a:hover
{
	<?php echo $copy_hlink_fontcolor; ?>
}

#copyright .siteSlogan
{
	<?php echo $footer_slogan_fontcolor; ?>	
}

</style>