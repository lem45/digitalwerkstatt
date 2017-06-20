<?php defined('ABSPATH') or die("No script kiddies please!");?>
<?php get_header();
/*Template Name: Digitalwerkstatt Page */
?>
<?php $wr_options = get_option('nadea_wp'); ?> 
<?php include (TEMPLATEPATH . '/includes/dws-page-header.php'); ?>



<!-- INCLUDE FLEXIBLE CONTENT ELEMENTS -->
       <?php include (TEMPLATEPATH . '/includes/dws-flexible-content.php'); ?>



<?php get_footer(); ?>	