<?php
  $post = $wp_query->post;
 
  if (in_category('helpful')) { //slug  категории
      include(TEMPLATEPATH.'/single-helpful.php');
  } else {
      include(TEMPLATEPATH.'/single-default.php');
      /**/
  }
?>

