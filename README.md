# Survival Straps Shopify CSV Fashioner

This is a simple procedural program written in PHP to automate the process of launching multiple new Survival Straps collections on Shopify. It creates a CSV file that can be imported under the Products section of the Shopify dashboard for the full Survival Straps product line:

* Regular Survival Bracelet™
* Light Duty Survival Bracelet™
* Wide Survival Bracelet™
* Key Fob
* Gear Tag
* Neck ID Lanyard
* Necklace
* Neck Cord


## Setting Up a New Collection

To get started, open `main.php` and set the following values:

1. `$new_products` in an array of new collections you want to add.
2. `$new_product_colors` is an array for each type of image variant you want for the product (e.g. black or white dog tags).
3. `$new_product_type` is the product type.
4. `$new_product_production` is the production classification (e.g. Custom Decal, Pre-sticker)
5. `$sku` is the first SKU you want to use.

That's it! SEO-friendly URLs, product descriptions, images, SKUs, etc. have all been auto-generated!


## Usage

`main.php` has 3 switches that are passed through the URL. Open up `index.html` to get to the links for each of the 3 main functions:

* **Shopify CSV Fashioner** is the main program that spits out a CSV file to import into Shopify.
* **SKUs** will generate a table of SKUs that you can paste into the master SKU spreadsheet.
* **Images** will display the images uploaded to S3 so you can check that they work before Shopify tries to download them (see directions below).


## Adding Images to a Collection

Open up the [Amazon S3 Management Console](https://console.aws.amazon.com/s3/home?region=us-east-1#) and navigate to `sstrapfiles/shopify/product_photos`. You will need to create a series of folders here based on the values you put into main.php:

```
$new_product_type/seo-friendly-collection-name_color/
```

You can find all of that information in the Images link.

Inside of that folder you will need to have a series of .jpg product photos that relate to each product type.


* `regular.jpg`
* `lightduty.jpg`
* `wide.jpg`
* `fob.jpg`
* `geartag.jpg`
* `neckid.jpg`
* `necklace.jpg`
* `neckcord.jpg`


### That's it!

If all the images check out then import your CSV into Shopify and watch as they all magically populate!


## Contributors

This project was created by Eric Patrick while working at Survival Straps in March of 2015. Special thanks to GitHub for making one of my first public programming projects using Git an exciting experience!
