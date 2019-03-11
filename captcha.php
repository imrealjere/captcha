<?php
  session_start();
  $random = rand(111111,999999);
  $_SESSION['number'] = $random;
  $my_img = imagecreate( 100, 40 );
  $background = imagecolorallocate( $my_img, 0, 0, 0 );
  $text_colour = imagecolorallocate( $my_img, 255, 255, 255 );
  imagestring( $my_img, 4, 26, 12, $random, $text_colour );
  imagesetthickness ( $my_img, 5 );

  header( "Content-type: image/png" );
  imagepng( $my_img );
  imagecolordeallocate( $text_color );
  imagecolordeallocate( $background );
  imagedestroy( $my_img );
?>
