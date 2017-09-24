<html> 

<head>
 

<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">


<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">



<script  src="<?php echo plugins_url('/medium-editor/dist/js/medium-button.min.js', __FILE__);?>"> </script>

 

</head> 

<body>





<?php 

require('style.php');

 wp_mediumeditor_addstylesheet(); 
 
echo "<div  id=\"text\">" ;  



 

	global $post; 
	 
	
	echo '<textarea class="editable" id="text" name="post_content" data-placeholder="start writing...">';
	
	echo esc_textarea( $post->post_content );
	echo '</textarea>'; 
	
	 
	 
	


	

	
 

 

  
 echo  "</div>";  

 ?>

<?php





//$dir = plugins_url();


wp_enqueue_script('strrr', plugins_url('/style.js', __FILE__));


?>

 <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.19.0/js/vendor/jquery.ui.widget.js"> </script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.19.0/js/jquery.iframe-transport.js"></script> 



<script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/9.19.0/js/jquery.fileupload.js"></script>



<script src="<?php echo plugins_url('/medium-editor/dist/js/medium-editor.js', __FILE__)?>"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.10/handlebars.runtime.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sortable/0.9.13/jquery-sortable-min.js"></script>


 

<script src="<?php echo plugins_url('/medium-editor-insert-plugin/dist/js/medium-editor-insert-plugin.min.js', __FILE__)?>"></script>


<?php

wp_mediumeditor_addjs();  



?>



</body> 

</html> 