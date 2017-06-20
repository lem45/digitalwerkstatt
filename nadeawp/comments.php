<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.','nadea'); ?></p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->
 

<?php if ( have_comments() ) : ?>

        <div class="com-title animation" data-animation="animation-fade-in-up">
			<h4><?php	printf( _n( 'One Comment', '%1$s Comments','nadea', get_comments_number() ),
									number_format_i18n( get_comments_number() ) ); ?></h4>
			<span class="com-line"></span>
		</div>


	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>

	<div class="com_list">
	<ul class="media-list list-unstyled">
	<?php wp_list_comments('callback=ck_comment');?>
	</ul>
	</div>

	
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e('Comments are closed.','nadea'); ?></p>

	<?php endif; ?>
<?php endif; ?>

<?php if ( comments_open() ) : ?>

<div id="respond" class="ndrespond animation" data-animation="animation-fade-in-up">
 
    <h2><?php comment_form_title( __('Leave a Comment','nadea') ); ?></h2>		


<div id="cancel-comment-reply">
	<small><?php cancel_comment_reply_link() ?></small>
</div>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<h5 class="sub_title"><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.','nadea'), wp_login_url( get_permalink() )); ?></h5>
<?php else : ?>

<form action="<?php echo site_url(); ?>/wp-comments-post.php" method="post" id="commentform" class="contact-form">

<?php if ( is_user_logged_in() ) : ?>


<h3 class="sub_title"><?php printf(__('Logged in as <a href="%1$s">%2$s</a>.','nadea'), get_edit_user_link(), $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php esc_attr_e('Log out of this account','nadea'); ?>"><?php _e('Log out &raquo;','nadea'); ?></a></h3>

<?php else : ?>


<form class="form-horizontal col-xs-12" role="form">
<div class="row">
    <div class="col-sm-6">
	      <input name="author" class="form-control" id="fullname" placeholder="Full Name*" value="<?php echo esc_attr($comment_author); ?>" type="text" <?php if ($req) echo esc_attr("aria-required='true'"); ?>  title="Name"/>
	</div>
	
	 <div class="col-sm-6">
	      <input name="email" value="<?php echo esc_attr($comment_author_email); ?>" type="email" <?php if ($req) echo esc_attr("aria-required='true'"); ?> class="form-control" id="inputEmail3" placeholder="Email*"  title="Email"/>
	  </div>
	  
</div>   
</form>	

<?php endif; ?>

<!--<p><small><?php printf(__('<strong>XHTML:</strong> You can use these tags: <code>%s</code>','nadea'), allowed_tags()); ?></small></p>--> 
<div class="row">
  <div class="col-sm-12">	
 
	<textarea class="form-control" rows="8"  name="comment" id="message" placeholder="Message*"></textarea>	
	<button type="submit" class="btn" value="<?php esc_attr_e('Add reply','nadea'); ?>" /><?php esc_attr_e('Add Comment','nadea'); ?></button>
  </div>
</div>
<?php comment_id_fields(); ?>

<?php do_action('comment_form', $post->ID); ?>

</form>	


<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
