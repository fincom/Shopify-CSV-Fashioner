<?php

// PHP throws an error if $switch isn't set before the switch, but I like default! 
ini_set("display_errors", 0);

// seoUrl, timeHereDoc
include 'functions.php';

// Include HTML for each product type: 
//  regular, lightduty, wide, fob, neckid, necklace, neckcord
include 'variables.php';

$new_products = array('USMC', 'White Semper Fi', 'Red Semper Fi', 'Gold Semper Fi', 'USMC Semper Fidelis', 'Silver Semper Fi', 'Tan USMC Logo', 'Tan USMC', 'Red USMC', 'USMC Semper Fi');
$new_product_colors = array('black', 'multicam', 'redgold');
$new_product_type = "USMC";
$new_product_production = "Pre-sticker";
$sku = "201110000003180";

foreach($new_products as $new_product_name) 
	{

		$new_product_name_friendly = seoUrl($new_product_name);

		$product_type_title = array("Regular Survival Bracelet™ - $new_product_name", "Light Duty Survival Bracelet™ - $new_product_name", "Wide Survival Bracelet™ - $new_product_name", "Key Fob - $new_product_name", "Gear Tag - $new_product_name", "Neck ID Lanyard - $new_product_name", "Necklace - $new_product_name", "Neck Cord - $new_product_name");
		$product_types = array('regular', 'lightduty', 'wide', 'fob', 'geartag', 'neckid', 'necklace', 'neckcord');
		$product_prices = array('24.99', '24.99', '26.99', '19.95', '12.95','21.95','29.99','14.95');

		$count = 0;

		switch($_GET['switch']) {
			case 'sku':
				echo "<table>";
				foreach($product_type_title as $title) 
					{

						echo "<tr><td>$sku</td><td>$title</td><td>$new_product_production</td></tr>";

						$sku = incrementSku($sku);
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

						echo "$url,$title,\"$html\",$vendor,$type,$tags,FALSE,Title,Default Title,,,,,$sku,0,,1,deny,manual,$price,,TRUE,TRUE,,,,FALSE,,,,,,,,,,,,,,,,,lb\n";

						// Upload product photos based on the new_product_colors array
						foreach($new_product_colors as $imgcolor) {
							$img = "https://sstrapfiles.s3.amazonaws.com/shopify/product_photos/" . $new_product_name_friendly . "_" . $imgcolor . "/" . $product_types[$count] . ".jpg";
							echo "$url,,,,,,,,,,,,,,,,,,,,,,,,$img,,,,,,,,,,,,,,,,,,,\n";
						}


						$sku = incrementSku($sku);
						++$count;
					}

				break;
		}
	}

?>