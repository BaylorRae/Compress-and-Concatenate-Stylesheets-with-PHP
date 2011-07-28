<?php

require 'CSS_Compress.php';

if ( isset($_GET['file_names']) ) {
   if ( file_exists($_GET['file_names']) ) die('Bad boy');
      $file_names = explode( ',', $_GET['file_names'] );  
      $C = new CSS_Compress( $file_names, 'style_min.css' );
      
      if ( isset($_GET['save_as']) ) {
         $C->save_as( $_GET['save_as'] );
      } else $C->save_as();
   
} else if ( isset($_GET['css']) ) {
      if ( file_exists($_GET['css']) ) die('Bad boy');
      $C = new CSS_Compress( $_GET['css'], 'style_min.css' ); 
      echo $C->get_css();
}