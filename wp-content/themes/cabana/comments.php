<?php
 
// Do not delete these lines
if ( !empty( $_SERVER[ 'SCRIPT_FILENAME' ]) && 'comments.php' == basename( $_SERVER[ 'SCRIPT_FILENAME' ] ) )
die ( 'Please do not load this page directly. Thanks!' );
 
if ( post_password_required() ) { ?>
<p class="nocomments"><?php echo __( 'This post is password protected. Enter the password to view comments.', 'cabana' ); ?></p>
<?php
return;
}
?>
 
<!-- You can start editing here. -->
 
<?php if ( have_comments() ) : ?>

<div id="comments">

<p class="comments-info"><?php echo __( 'currently there\'s', 'cabana' ); ?> <span><?php $commentscount = get_comments_number(); echo $commentscount; ?> <?php echo __( 'comment(s)', 'cabana' ); ?></span></p>
 
<div class="navigation">
    <div class="alignleft"><?php previous_comments_link() ?></div>
    <div class="alignright"><?php next_comments_link() ?></div>
</div>
 
<ul class="comments-list">
    <?php wp_list_comments( 'callback=gt_comments' ); ?>
</ul>

<?php else : // this is displayed if there are no comments so far ?>
 
<?php if ( 'open' == $post->comment_status ) : ?>
<!-- If comments are open, but there are no comments. -->
 
<?php else : // comments are closed ?>
<!-- If comments are closed. -->
 
<?php endif; ?>
<?php endif; ?>
 
<?php if ( 'open' == $post->comment_status ) : ?>

<?php comment_form(); ?>

<?php endif; // if you delete this the sky will fall on your head ?>