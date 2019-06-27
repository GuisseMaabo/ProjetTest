<?php
 function mychildtheme_enqueue_styles () { 
   wp_enqueue_style ('twentyseventeen', get_template_directory_uri (). '/style.css'); 
} 

add_action ('wp_enqueue_scripts', 'mychildtheme_enqueue_styles'); 
?>