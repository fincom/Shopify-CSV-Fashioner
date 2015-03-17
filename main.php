<?php

ini_set("display_errors", 0);

// seoUrl
include 'functions.php';

// Include HTML for each product type: 
//  regular, lightduty, wide, fob, neckid, necklace, neckcord
include 'variables.php';

$new_products = array('Police SWAT', 'Police Hostage Negotiator', 'Police BOMB/EOD Team', 'Police Motor Unit', 'Police 1*', 'Police Diver', 'Police K9');
$new_product_type = "Law Enforcement";
$new_product_production = "Pre-decal";
$sku = "201110000003180";

foreach($new_products as $new_product_name) 
	{


		$new_product_name_friendly = seoUrl($new_product_name);

		$product_type_title = array("Regular Survival Bracelet™ - $new_product_name", "Light Duty Survival Bracelet™ - $new_product_name", "Wide Survival Bracelet™ - $new_product_name", "Key Fob - $new_product_name", "Gear Tag - $new_product_name", "Neck ID Lanyard - $new_product_name", "Necklace - $new_product_name", "Neck Cord - $new_product_name");
		$product_types = array('regular', 'lightduty', 'wide', 'fob', 'geartag', 'neckid', 'necklace', 'neckcord');
		$product_prices = array('24.99', '24.99', '26.99', '19.95', '12.95','21.95','29.99','14.95');

		$count = 0;

		switch ($_GET['switch']) {
			case 'sku':
				echo "<table>";
				foreach($product_type_title as $title) 
					{

						echo "<tr><td>$title</td><td>$sku</td>";

						++$sku;
						$sku = number_format($sku,0,'','');
						++$count;

					}
				echo "</table>";

			break;

			case 'img':
				echo "<pre>$new_product_name_friendly\n";
			break;
			
			default:

				foreach($product_type_title as $title) 
					{

						$url = seoUrl($title);
						$html = trimHereDoc(${$product_types[$count].'HTML'});
						$vendor = $new_product_production;
						$type = $new_product_type;
						$tags = $product_types[$count];
						$price = $product_prices[$count];
						$img = "https://sstrapfiles.s3.amazonaws.com/shopify/product_photos/" . $new_product_name_friendly . "/" . $product_types[$count] . ".jpg";
						$imgalt = $title;


							echo "$url,$title,\"$html\",$vendor,$type,$tags,FALSE,Title,Default Title,,,,,$sku,0,,1,deny,manual,$price,,TRUE,TRUE,,$img,$imgalt,FALSE,,,,,,,,,,,,,,,,,lb\n";

						++$sku;
						$sku = number_format($sku,0,'','');
						++$count;

					}

				break;
		}
	}



?>