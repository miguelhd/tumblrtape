<?php
  if(isset($_GET['post_url'])){
    $post_url = $_GET['post_url'];          
    $contents = file_get_contents($post_url);
    
    preg_match("/rk=[a-zA-Z0-9]*/",$contents, $rk);
    preg_match("/pid=[0-9]*/",$contents, $pid);

    $rk = substr($rk[0], 3);
    $pid = substr($pid[0], 4);
    
    header("Location: http://www.tumblr.com/reblog/$pid/$rk");
	}
?>