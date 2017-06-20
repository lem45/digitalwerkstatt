<?php defined('ABSPATH') or die("No script kiddies please!");?>
<?php get_header();?>
<?php $wr_options = get_option('nadea_wp'); ?> 
<?php global $post; ?>

		<!-- Page Title Section Start -->
		
		<?php if($wr_options['page-banner'] == 'no') {?>
		<!-- Empty -->
		<?php } else { ?> 
		<section id="page-title" class="clear skype-bg">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
					<?php if($wr_options['page-title'] == 'no') {?>
                    <!-- Empty -->
					<?php } else { ?> 
						<div class="page-title">
							<h1><?php esc_attr_e('Oops! Not found!', 'nadea');?></h1>
						</div>
					<?php }?>	
					</div><!-- col 6-->
					
					<div class="col-sm-6">
					<?php if($wr_options['breadcrumbs'] == 'no') {?>
                    <!-- Empty -->
					<?php } else { ?>
						<div class="ndbreadcrumb">
							<ul class="breadcrumb">
								<a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_attr_e('Home','nadea');?></a> <?php esc_attr_e('/','nadea'); ?>
								<span class="current"><?php esc_attr_e('404','nadea');?></span>
							</ul>
						</div>				
					<?php }?>
					</div><!-- col 6-->
					
				</div><!-- .row end -->
			</div><!-- .container end -->
		</section>		  
		<?php }?>
		
		<!-- Page Title Section End -->	
		
		<!-- 404 Body Section Start -->
		<section id="nderrorpages" class="nd-error clear">
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<div class="error-hd animation" data-animation="animation-fade-in-left">
							<h1 class="nderroecon"><?php esc_attr_e('404', 'nadea'); ?></h1>
						</div>
					</div>
					
					<div class="col-sm-5">
						<div class="nnotndfound animation" data-animation="animation-fade-in-right">
							<h2 class="ndnotfound"><?php esc_attr_e('THE PAGE', 'nadea'); ?><br/>
								<?php esc_attr_e('CANNOT BE', 'nadea'); ?><br/>
								<?php esc_attr_e('FOUND', 'nadea'); ?>
							</h2>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- 404 Body Section end-->		

<?php get_footer(); ?>	