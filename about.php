<?php

session_start();
//Include functions anf connect to the database using PDO MYSQL
include 'functions.php';
?>
<?=template_header('Product')?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delivery </title>
<style>
	    .column {
      float: left;
      width: 33.33%;
      color: black;
      padding-left: 40px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    /* Responsive layout - when the screen is less than 600px wide, make the three columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
      .column {
        width: 100%;
      }
    }
    @media screen and (max-width: 600px) {
      .h4{
        width: 100%;
      }
    }
</style>	
</head>
<body>
	<div class="content-wrapper">
	<h3>ABOUT US</h3>
	<p>Cakehouse is a leading Sri Lankan eCommerce platform bringing premium online shopping experience to thousands of Sri Lankans and Sri Lankan expats around the world.</p>

<p>Our service and products are known for its quality, freshness and innovation. We’re protecting the magic and modernizing the rest to become the most reliable and loved eCommerce brand in Sri Lanka.</p>

<p>Our consistent, highest customer satisfaction rating makes us incredibly proud because reliability and quality, both in our business models and the way in which we support our customers is our core values.</p>

<img src="imgs/item11.jpg" width="250" height="250" alt="">
<img src="imgs/item10.jpg" width="250" height="250" alt="">
<img src="imgs/item12.jpg" width="250" height="250" alt="">
<img src="imgs/item13.jpg" width="250" height="250" alt="">
</div>
</body>
</html>

<?=template_footer()?>