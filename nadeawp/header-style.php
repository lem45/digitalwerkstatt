<?php $wr_options = get_option('nadea_wp'); ?> 

<!-- Header Style 1 -->
<?php /*?><?php if (( get_post_meta($post->ID,'rnr_page-header',true))=='style1'):?><?php */?>
		<?php do_action('icl_language_selector'); ?>
		<!-- Header Section Start -->
		<div class="ndheaderv-9">
		<header class="header headerStyle" id="header">
			<div class="ndheader" id="ndheader">
				<div class="sticky scrollHeaderWrapper">
					<div class="dws-head-container">
						<div class="row">
							<div class="col-sm-12">
													
								
								<nav class="mainMenu mainNav pull-right" id="mainNav">
									<?php get_template_part('menu-section'); ?>
								</nav><!-- end of main nav -->
					  
								<a href="#" class="generalLink" id="responsiveMainNavToggler"><i class="fa fa-bars"></i></a>
								<div class="clearfix"></div><!-- end of clearfix -->
								<div class="responsiveMainNav"></div><!-- end of responsive main nav -->
							  
							</div><!-- end fo col 12 -->
						</div><!-- end of row -->
					</div><!-- end of container -->
				</div><!-- end of sticky -->
			</div><!-- end of ndheader -->
		</header><!-- end of header -->
		</div>
<?php /*?>		
<!-- Header Style 2 -->		
<?php elseif (( get_post_meta($post->ID,'rnr_page-header',true))=='style2'):?>	

		<!-- Header Section Start-->
		<div class="ndheaderv-1">
		<div class="header2-headerbg"><img src="<?php echo get_template_directory_uri(); ?>/includes/images/background/header-bg2.png" class="img-responsive" alt="HeaderBGImage"></div>
		<header class="header headerStyle2" id="header">
			<div class="ndheader" id="ndheader">
				<div class="sticky scrollHeaderWrapper">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="logo pull-left">
								<?php if(!empty($wr_options['logotext'])):?>
									<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
									<?php echo esc_attr($wr_options['logotext']); ?>										
									</a>
								<?php elseif(!empty($wr_options['logopic'])):?>	
									<a href="<?php echo esc_url(home_url('/')); ?>"><img class="responsive site-logo" src="<?php echo esc_url(AfterSetupTheme::return_thme_option('logopic','url'));?>" alt="Logo" /></a>
								<?php else:?>
									<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
									    <?php esc_attr_e('Nade','nadea');?><span class="font-color"><?php esc_attr_e('a.','nadea');?></span>
									</a>
								<?php endif;?>	
								</div>
								
								<?php if (( get_post_meta($post->ID,'rnr_header-search-box',true))=='yes'):?>
								
								<div class="header-search">
									<div class="header-search-a"><i class="fa fa-search"></i></div>
									<div class="header-search-form">
										<form id="searchfrom" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
											<input type="text" name="s" placeholder="Search">
										</form>
									</div>
								</div>	

								<?php elseif (( get_post_meta($post->ID,'rnr_header-search-box',true))=='no'):?>
								
								    <!-- Empty -->
					
					            <?php else:?>
								
								<div class="header-search">
									<div class="header-search-a"><i class="fa fa-search"></i></div>
									<div class="header-search-form">
										<form id="searchfrom" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
											<input type="text" name="s" placeholder="Search">
										</form>
									</div>
								</div>

                                <?php endif ;?>	
								<!--header Secrch section end -->
								
								<nav class="mainMenu mainNav pull-right" id="mainNav">
									<?php get_template_part('menu-section'); ?>
								</nav><!-- end of main nav -->
					  
								<a href="#" class="generalLink" id="responsiveMainNavToggler"><i class="fa fa-bars"></i></a>
								<div class="clearfix"></div><!-- end of clearfix -->
								<div class="responsiveMainNav"></div><!-- end of responsive main nav -->
							  
							</div><!-- col 12 end -->
						</div><!-- row end -->
					</div><!--container end  -->
				</div><!-- sticky end -->
			</div><!-- ndheader end -->
		</header><!--header end -->
        </div>
		
<!-- Header Style 3 -->
<?php elseif (( get_post_meta($post->ID,'rnr_page-header',true))=='style3'):?>

		<!-- Header Section Start-->
		<div class="ndheaderv-2">
		<header class="header headerStyle3" id="header">
			<div class="ndheader" id="ndheader">
				<div class="sticky scrollHeaderWrapper">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="logo pull-left">
								<?php if(!empty($wr_options['logotext'])):?>
									<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
									<?php echo esc_attr($wr_options['logotext']); ?>										
									</a>
								<?php elseif(!empty($wr_options['logopic'])):?>	
									<a href="<?php echo esc_url(home_url('/')); ?>"><img class="responsive site-logo" src="<?php echo esc_url(AfterSetupTheme::return_thme_option('logopic','url'));?>" alt="Logo" /></a>
								<?php else:?>
									<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
									    <?php esc_attr_e('Nade','nadea');?><span class="font-color"><?php esc_attr_e('a.','nadea');?></span>
									</a>
								<?php endif;?>	
								</div>
								
								<?php if (( get_post_meta($post->ID,'rnr_header-search-box',true))=='yes'):?>
								
								<div class="header-search">
									<div class="header-search-a"><i class="fa fa-search"></i></div>
									<div class="header-search-form">
										<form id="searchfrom" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
											<input type="text" name="s" placeholder="Search">
										</form>
									</div>
								</div>	

								<?php elseif (( get_post_meta($post->ID,'rnr_header-search-box',true))=='no'):?>
								
								    <!-- Empty -->
					
					            <?php else:?>
								
								<div class="header-search">
									<div class="header-search-a"><i class="fa fa-search"></i></div>
									<div class="header-search-form">
										<form id="searchfrom" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
											<input type="text" name="s" placeholder="Search">
										</form>
									</div>
								</div>

                                <?php endif ;?>	
								<!--header Secrch section end -->
								
								<nav class="mainMenu mainNav pull-right" id="mainNav">
									<?php get_template_part('menu-section'); ?>
								</nav><!-- end of main nav -->
								
								<a href="#" class="generalLink" id="responsiveMainNavToggler"><i class="fa fa-bars"></i></a>
								<div class="clearfix"></div><!-- end of clearfix -->
								<div class="responsiveMainNav"></div><!-- end of responsive main nav -->
							  
							</div><!-- col 12 end -->
						</div><!-- row end -->
					</div><!--container end  -->
				</div><!-- sticky end -->
			</div><!-- ndheader end -->
		</header><!--header end -->
		</div>

<!-- Header Style 4 -->
<?php elseif (( get_post_meta($post->ID,'rnr_page-header',true))=='style4'):?>

		<!-- Header Section Start -->
		<div class="ndheaderv-3">
		<header class="header headerStyle4" id="header">
			<div class="ndheader" id="ndheader">
				<div class="sticky scrollHeaderWrapper">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="logo pull-left">
								<?php if(!empty($wr_options['logotext'])):?>
									<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
									<?php echo esc_attr($wr_options['logotext']); ?>										
									</a>
								<?php elseif(!empty($wr_options['logopic'])):?>	
									<a href="<?php echo esc_url(home_url('/')); ?>"><img class="responsive site-logo" src="<?php echo esc_url(AfterSetupTheme::return_thme_option('logopic','url'));?>" alt="Logo" /></a>
								<?php else:?>
									<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
									    <?php esc_attr_e('Nade','nadea');?><span class="font-color"><?php esc_attr_e('a.','nadea');?></span>
									</a>
								<?php endif;?>	
								</div>

								<?php if (( get_post_meta($post->ID,'rnr_header-search-box',true))=='yes'):?>
								
								<div class="header-search">
									<div class="header-search-a"><i class="fa fa-search"></i></div>
									<div class="header-search-form">
										<form id="searchfrom" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
											<input type="text" name="s" placeholder="Search">
										</form>
									</div>
								</div>	

								<?php elseif (( get_post_meta($post->ID,'rnr_header-search-box',true))=='no'):?>
								
								    <!-- Empty -->
					
					            <?php else:?>
								
								<div class="header-search">
									<div class="header-search-a"><i class="fa fa-search"></i></div>
									<div class="header-search-form">
										<form id="searchfrom" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
											<input type="text" name="s" placeholder="Search">
										</form>
									</div>
								</div>

                                <?php endif ;?>							

								<nav class="mainMenu mainNav pull-right" id="mainNav">
									<?php get_template_part('menu-section'); ?>
								</nav><!-- end of main nav -->
					  
								<a href="#" class="generalLink" id="responsiveMainNavToggler"><i class="fa fa-bars"></i></a>
								<div class="clearfix"></div><!-- end of clearfix -->
								<div class="responsiveMainNav"></div><!-- end of responsive main nav -->
							  
							</div><!-- end fo col 12 -->
						</div><!-- end of row -->
					</div><!-- end of container -->
				</div><!-- end of sticky -->
			</div><!-- end of ndheader -->
		</header><!-- end of header -->
		</div>

<!-- Header Style 5 -->
<?php elseif (( get_post_meta($post->ID,'rnr_page-header',true))=='style5'):?>

		<!-- Header Section Start-->
		<div class="ndheaderv-4">
		<header class="header headerStyle5" id="header">
			<div class="ndheader" id="ndheader">
				<div class="sticky scrollHeaderWrapper">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="logo pull-left">
								<?php if(!empty($wr_options['logotext'])):?>
									<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
									<?php echo esc_attr($wr_options['logotext']); ?>										
									</a>
								<?php elseif(!empty($wr_options['logopic'])):?>	
									<a href="<?php echo esc_url(home_url('/')); ?>"><img class="responsive site-logo" src="<?php echo esc_url(AfterSetupTheme::return_thme_option('logopic','url'));?>" alt="Logo" /></a>
								<?php else:?>
									<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
									    <?php esc_attr_e('Nade','nadea');?><span class="font-color"><?php esc_attr_e('a.','nadea');?></span>
									</a>
								<?php endif;?>	
								</div>
								
								<?php if (( get_post_meta($post->ID,'rnr_header-search-box',true))=='yes'):?>
								
								<div class="header-search">
									<div class="header-search-a"><i class="fa fa-search"></i></div>
									<div class="header-search-form">
										<form id="searchfrom" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
											<input type="text" name="s" placeholder="Search">
										</form>
									</div>
								</div>	

								<?php elseif (( get_post_meta($post->ID,'rnr_header-search-box',true))=='no'):?>
								
								    <!-- Empty -->
					
					            <?php else:?>
								
								<div class="header-search">
									<div class="header-search-a"><i class="fa fa-search"></i></div>
									<div class="header-search-form">
										<form id="searchfrom" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
											<input type="text" name="s" placeholder="Search">
										</form>
									</div>
								</div>

                                <?php endif ;?>	
								<!--header Secrch section end -->
								
								<nav class="mainMenu mainNav pull-right" id="mainNav">
									<?php get_template_part('menu-section'); ?>
								</nav><!-- end of main nav -->
					  
								<a href="#" class="generalLink" id="responsiveMainNavToggler"><i class="fa fa-bars"></i></a>
								<div class="clearfix"></div><!-- end of clearfix -->
								<div class="responsiveMainNav"></div><!-- end of responsive main nav -->
							  
							</div><!-- col 12 end -->
						</div><!-- row end -->
					</div><!--container end  -->
				</div><!-- sticky end -->
			</div><!-- ndheader end -->
		</header><!--header end -->
		</div>

<!-- Header Style Default -->
<?php else:?> 	

		<!-- Header Section Start -->
		<div class="ndheaderv-9">
		<header class="header headerStyle" id="header">
			<div class="ndheader" id="ndheader">
				<div class="sticky scrollHeaderWrapper">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="logo pull-left">
								<?php if(!empty($wr_options['logotext'])):?>
									<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
									<?php echo esc_attr($wr_options['logotext']); ?>										
									</a>
								<?php elseif(!empty($wr_options['logopic'])):?>	
									<a href="<?php echo esc_url(home_url('/')); ?>"><img class="responsive site-logo" src="<?php echo esc_url(AfterSetupTheme::return_thme_option('logopic','url'));?>" alt="Logo" /></a>
								<?php else:?>
									<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
									    <?php esc_attr_e('Nade','nadea');?><span class="font-color"><?php esc_attr_e('a.','nadea');?></span>
									</a>
								<?php endif;?>	
								</div>
								
								<?php if($wr_options['header-search-box'] == 'no') {?>
								
								 <!-- Empty -->
								
								<?php } else { ?> 
								
								<div class="header-search">
									<div class="header-search-a"><i class="fa fa-search"></i></div>
									<div class="header-search-form">
										<form id="searchfrom" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
											<input type="text" name="s" placeholder="Search">
										</form>
									</div>
								</div>	

								<?php }?>								

								<nav class="mainMenu mainNav pull-right" id="mainNav">
									<?php get_template_part('menu-section'); ?>
								</nav><!-- end of main nav -->
					  
								<a href="#" class="generalLink" id="responsiveMainNavToggler"><i class="fa fa-bars"></i></a>
								<div class="clearfix"></div><!-- end of clearfix -->
								<div class="responsiveMainNav"></div><!-- end of responsive main nav -->
							  
							</div><!-- end fo col 12 -->
						</div><!-- end of row -->
					</div><!-- end of container -->
				</div><!-- end of sticky -->
			</div><!-- end of ndheader -->
		</header><!-- end of header -->
		</div>

<?php endif ;?>	<?php */?>