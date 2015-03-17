<?php

// seoUrl
include 'functions.php';

// Include HTML for each product type: 
//  regular, lightduty, wide, fob, neckid, necklace, neckcord
include 'variables.php';

$product_types = array('regular', 'lightduty', 'wide', 'fob', 'neckid', 'necklace', 'neckcord');

$new_product_name = "SWAT";
$new_product_name_friendly = seoUrl($new_product_name);

$type_title_full = "Regular Survival Bracelet™ - $new_product_name";
$type_title_full = "Light Duty Survival Bracelet™ - $new_product_name";
$type_title_full = "Wide Survival Bracelet™ - $new_product_name";
$type_title_full = "Key Fob - $new_product_name";
$type_title_full = "Gear Tag - $new_product_name";
$type_title_full = "Neck ID Lanyard - $new_product_name";



$url = "";
$title = "";
$html = "";
$vendor = "Pre-decal";
$type = "";
$tags = "";
$sku = "";
$price = "";
$img = "";
$imgalt = "";


echo <<<_OUTPUT
$url,$title,"$html",$vendor,$type,$tags,FALSE,Title,Default Title,,,,,$sku,0,,1,deny,manual,$price,,TRUE,TRUE,,$img,$imgalt,FALSE,,,,,,,,,,,,,,,,,lb
_OUTPUT;

?>