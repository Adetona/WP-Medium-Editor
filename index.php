<?php 

   /*
      *Plugin Name: WP Medium Editor
      *Plugin URI: 
      *Description: WP Medium Editor  replace your default post editor with Medium editor. 
      *Version: 1.0.0 
      *Author: Abiodun Adetona 
      *Author URI: http://adetona.github.io
      *License: GPLv2



      */
      



   	/*

      Remove Tinymce editor. 



      */ 


   function wp_mediumeditor_removetinymce() {
       
       remove_post_type_support( 'post', 'editor' );
   
   }

   add_action('init' ,'wp_mediumeditor_removetinymce');  



/*

   Add custom editor. 




   */ 



   function wp_mediumeditor_addeditor () {
   	

   require('texteditor.php'); 


   } 	


   add_action( 'edit_form_after_title', 'wp_mediumeditor_addeditor' );  









    
 