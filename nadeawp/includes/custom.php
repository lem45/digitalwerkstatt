<?php
  add_action('wp_footer', 'wr_custom_colors', 160);
  function wr_custom_colors() { 
  $wr_options = get_option('nadea_wp');
 ?>
<style type="text/css" class="custom-dynamic-css">
 
    <?php if(!empty($wr_options['custom-css'])):?> 

	<?php echo esc_attr(AfterSetupTheme::return_thme_option('custom-css',''));?>		

	<?php endif;?>	
	
<?php if(!empty($wr_options['opt-theme-style'])):?> 

.skype-bg, .Sine-Up button, .ndtmappleabout .button-ab:hover, .newsletter input[type="button"], .newsletter input[type="submit"], .btn-yellow, #respond input.btn:hover, .wysija-submit, .wpcf7  form input[type="submit"]:hover, #respond button.btn:hover, .drak-singup input, .yellow-bg, .Sine-Up button, .ndtmappleabout .button-ab:hover, .nd-featur-icon-holder, .headerStyle2 .mainNav .navTabs > li .active, .headerStyle2 .mainNav .navTabs > li .dropDown li a, .mainNav .navTabs > li .dropDown li > button, .headerStyle2 .mainNav .navTabs > li:hover > a, .mainNav .navTabs > li:hover > button, .headerStyle3 .mainNav .navTabs > li:hover > a, .ndheaderv-1 .social_sharenadea li:hover, .headerStyle3 .mainNav .navTabs > li .active, .mainNav .navTabs > li:hover > button, .mainNav .navTabs > li:hover > button, .ndheaderv-2 .social_sharenadea li:hover, .headerStyle5 .mainNav .navTabs > li:hover > a, .headerStyle5 .mainNav .navTabs > li .active, .ndheaderv-5 .social_sharenadea li:hover, .ndheaderv-4 .social_sharenadea li:hover, .headerStyle6 .mainNav .navTabs > li .dropDown, .ndheaderv-1  ul li.current_page_item a, .ndheaderv-1  ul li.current-menu-ancestor a, .ndheaderv-1  ul li.current-menu-item a, .ndheaderv-1  ul li.current-menu-parent a, .ndtbl-pricingthree .item:hover .tbl-footer .btn-default, .headerStyle4, .sidebar-widget .tagcloud a:hover, .praymari-color, .btn-deepskyblue, .ndtbl-pricingthree .tbl-recommend .tbl-footer .btn-default, .ndtbl-pricingthree .item:hover .tbl-header, .ndtbl-pricingtwo .item:hover .tbl-footer, .ndtbl-pricingtwo .item:hover .tbl-header, .ndtbl-pricingthree .item.tbl-recommend .tbl-header, .ndtbl-pricingtwo .tbl-recommend .tbl-footer, .ndtbl-pricingtwo .tbl-recommend .tbl-footer .btn-default, .ndtbl-pricingone .item:hover .tbl-header, .ndtbl-pricing .item .tbl-footer .btn-default, .ndtbl-pricing .item.tbl-recommend, .ndtbl-pricingone .item:hover, .ndporpagination .pager a:hover i, .progress .progress-bar, .ndsocial-share li:hover, .ndrightsidebar .socials span:hover, .ndluch:hover, .accordianShortCode2 .triggerRow > span.activeLine:before, .accordianShortCode2 .triggerRow > a.activeLine:before, .accordianShortCode .triggerRow > a.activeLine:before, .accordianShortCode .triggerRow > span.activeLine:before, .readmore a:hover i, .social_sharenadea li:hover, .go-up:hover, .social_sharenadea li:hover, #footer .socials span:hover, .responsiveMainNav > ul.navTabs > li .toggleResponsive.activeLine, .view-all a:hover i, #responsiveMainNavToggler, #responsiveMainNavToggler.opened, .responsiveMainNav > ul.navTabs > li a:hover, .responsiveMainNav > ul.navTabs > li > button:hover
{

	background: <?php echo esc_attr($wr_options['opt-theme-style']);?>;

}

.ndtbl-pricingtwo .tbl-recommend .tbl-header, .drak-singup input
{

	background: <?php echo esc_attr($wr_options['opt-theme-style']);?>!important;

}


.blogpost-title h2:hover, .blogpost-text-title h2:hover, .drak-singup button, .headerStyle2 .font-color, .headerStyle3 .font-color, .ndheaderv-1 .font-color, .ndheaderv-1 .footer-nav li a:hover, .headerStyle3 .mainNav .navTabs > li .dropDown li a:hover, .headerStyle3 .mainNav .navTabs > li .dropDown li .active, .headerStyle5 .font-color, .ndheaderv-2 .font-color, .ndheaderv-2 .footer-nav li a:hover, .headerStyle5 .mainNav .navTabs > li .dropDown li a:hover, .headerStyle5 .mainNav .navTabs > li .dropDown li .active, .ndheaderv-4 .logo a::first-letter, .headerStyle6 .font-color, .ndheaderv-4 .font-color, .ndheaderv-4 .footer-nav li a:hover, .ndheaderv-1 .logo a::first-letter, .ndheaderv-5 .font-color, .ndheaderv-5 .footer-nav li a:hover, .ndheaderv-2 ul li.current_page_item a, .ndheaderv-2 ul li.current-menu-ancestor a, .ndheaderv-2 ul li.current-menu-item a, .ndheaderv-2 ul li.current-menu-parent a, .ndheaderv-2 #mainNav ul li ul li.current-menu-parent > a, .ndheaderv-4  ul li.current_page_item  > a, .ndheaderv-4  ul li.current-menu-ancestor > a, .ndheaderv-4  ul li.current-menu-item > a, .ndheaderv-4  ul li.current-menu-parent > a, .ndheaderv-3 #mainNav   ul li ul li.current_page_item > a, .ndheaderv-3 #mainNav  ul li ul li.current-menu-ancestor > a, .ndheaderv-3 #mainNav  ul li ul li.current-menu-item > a, .ndheaderv-3 #mainNav ul li ul li.current-menu-parent > a, .ndheaderv-3 #mainNav  ul li.current_page_item  > a, .ndheaderv-3 #mainNav  ul li.current-menu-ancestor > a, .ndheaderv-3 #mainNav  ul li.current-menu-item > a, .ndheaderv-3 #mainNav  ul li.current-menu-parent > a, .ndheaderv-9 .logo a::first-letter, .preload-logo, .back-logo, .sidebar-widget a:hover, .blogpost-text-title h2:hover, .footerbg-right .widget a:hover, .logo a::first-letter, .headerStyle4 .mainNav .navTabs > li .dropDown li .active, .headerStyle4 .mainNav .navTabs > li .dropDown li a:hover, .headerStyle4 .mainNav .navTabs > li .active, .mainNav .navTabs > li:hover > button, .headerStyle4 .mainNav .navTabs > li:hover > a, .ndwidget_categories li a:hover, .tab-tilte a, .ndtbl-pricing .item .tbl-header, .ndtbl-pricing .item .tbl-price, .ndprojectdt li a:hover, .vwsky, .pro-count, .accordianShortCode2 .triggerRow > a:hover, a:hover, a:focus, .font-color, .ftblog_head a:hover, .footer-nav li a:hover, .accordianShortCode .triggerRow > a:hover 
{

	color: <?php echo esc_attr($wr_options['opt-theme-style']);?>;

}

.drak-singup .wysija-submit, #ndlatestpost .owl-buttons .owl-prev i:hover, #ndlatestpost .owl-buttons .owl-next i:hover, .sticky a h2  
{

	color: <?php echo esc_attr($wr_options['opt-theme-style']);?>!important;

}

.btn-yellow, #respond input.btn:hover, #respond button.btn:hover, .btn-deepskyblue
{

	border:2px solid <?php echo esc_attr($wr_options['opt-theme-style']);?>;

}

.mainNav .navTabs > li:hover > button, .headerStyle6 .mainNav .navTabs > li:hover > a, .headerStyle6 .mainNav .navTabs > li .active, .ndheaderv-9  ul li.current_page_item a, .ndheaderv-9  ul li.current-menu-ancestor a, .ndheaderv-9  ul li.current-menu-item a, .ndheaderv-9  ul li.current-menu-parent a, .ndtbl-pricing .item, .mainNav .navTabs > li .active, .mainNav .navTabs > li:hover > a, .mainNav .navTabs > li:hover > button
{

	border-bottom:1px solid <?php echo esc_attr($wr_options['opt-theme-style']);?>;

}


<?php endif;?>		
  
 </style>
 
 <?php 
	}
?>
