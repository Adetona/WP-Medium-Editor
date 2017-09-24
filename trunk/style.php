
<?php
function wp_mediumeditor_addstylesheet() {



//$dir = plugins_url();

  wp_enqueue_style('style', plugins_url('/style.css', __FILE__)); 

  wp_enqueue_style ('script', plugins_url('/medium-editor/dist/css/medium-editor.css', __FILE__)); 

  wp_enqueue_style ('theme_script', plugins_url('/medium-editor/dist/css/themes/default.css', __FILE__)); 

  wp_enqueue_style('plugin_css', plugins_url('/medium-editor-insert-plugin/dist/css/medium-editor-insert-plugin.min.css',__FILE__)); 



wp_enqueue_style( 'bootstrap', plugins_url( '/style/bootstrap.min.css', __FILE__ ) );

  
}

//stylesheet(); 


function wp_mediumeditor_addjs(){


//$dir = plugins_url();
 

 wp_enqueue_script('mediumjs', plugins_url('/medium.js', __FILE__));   

}

?> 