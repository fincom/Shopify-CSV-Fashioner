<?php

// seoUrl
include 'functions.php';

// Include HTML for each product type: 
//  regular, lightduty, wide, fob, neckid, necklace, neckcord
include 'variables.php';

$new_product_name = "SWAT";
$new_product_name_friendly = seoUrl($new_product_name);


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