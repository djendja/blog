<?php 
function get_content($int) {
    $base='./viewpost/post';
   include $base .$int. '.php';
    return $blog_content;
   //return $base .$int. '.php';

}
?>