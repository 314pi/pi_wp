<?php

function magicpi_sidebar_classes(){

   echo implode(' ',  apply_filters( 'magicpi_sidebar_class', array() ) );
}


function magicpi_add_sidebar_class($classes){
	//$classes[] = 'col-divided';
	//$classes[] = 'widgets-boxed';

	return $classes;
}

add_filter('magicpi_sidebar_class','magicpi_add_sidebar_class', 10);

