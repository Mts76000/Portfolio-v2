<?php

require get_template_directory() . '/inc/generale.php';
require get_template_directory() . '/inc/func.php';



require get_template_directory() . '/inc/custom/custom-skill.php';
require get_template_directory() . '/inc/custom/custom-work.php';




require get_template_directory() . '/inc/extra/template-tags.php';
require get_template_directory() . '/inc/extra/template-functions.php';



require get_template_directory() . '/ajax/form.php';





//function hide_admin_bar(){ return false; }
//add_filter( 'show_admin_bar', 'hide_admin_bar' );

///* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );