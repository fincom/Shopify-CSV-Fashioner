<?php

function seoUrl($string) {
    //Lower case everything
    $string = strtolower($string);
    //Make alphanumeric (removes all other characters)
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    //Clean up multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);
    //Convert whitespaces and underscore to dash
    $string = preg_replace("/[\s_]/", "-", $string);
    return $string;
}

function trimHereDoc($string) {
	return implode("", array_map('trim', explode("\n", $string)));
}

function incrementSku($string) {
	//Increment by 1
	++$string;
	//Format it so it doesn't display as a float
	return number_format($string,0,'','');
}

?>