<?php
/**
* @package WordPress
* @subpackage Default_Theme
*/
// Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');
if ( post_password_required() ) { ?>
<p class="nocomments">This post is password protected. Enter the password to view comments.
</p>
<?php
return;
}
$GLOBALS['comment'] = $comment;
?>
<!-- You can start editing here. -->
<?php if ( have_comments() ) : ?>
<h3 id="comments">
  <?php comments_number( esc_html__('0 Comment', 'mf'), esc_html__('1 Comment', 'mf'), esc_html__('% Comments', 'mf') ); ?>
</h3>
<div class="navigation">
  <div class="alignleft">
    <?php previous_comments_link() ?>
  </div>
  <div class="alignright">
    <?php next_comments_link() ?>
  </div>
</div>
<ul class="comment-list">
  <?php wp_list_comments(array('avatar_size' => 60)); ?>
</ul>
<?php else : // this is displayed if there are no comments so far ?>
<?php if ( comments_open() ) : ?>
<!-- If comments are open, but there are no comments. -->
<?php else : // comments are closed ?>
<!-- If comments are closed. -->
<!--<p class="nocomments">Comments are closed.</p>-->
<?php endif; ?>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
<?php comment_form(); ?>
<?php endif; // if you delete this the sky will fall on your head ?>