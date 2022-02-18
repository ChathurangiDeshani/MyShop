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
	<h3>Delivery Info</h3>
	<p>We have our very own in-house delivery team and vehicles. Our delivery buddies receive frequent professional training and constant supervision to ensure our customers get their delivery on time with extra care and a big smile.

Our delivery charges starts at Rs 200 (LKR) and it's varies depending on the delivery city</p>

<h4>Where We Deliver</h4>
<p>The following cities are where we are currently delivering to in Sri Lanka. If you couldn't find your delivery city in the following list please do let us know, we will try our best to assist you.</p>

<div class="row">
      <h4 style="color:black; padding-bottom:20px; padding-top:20px;">Colombo</h4>
      <div class="column">
        <p>Attidiya</p>
        <p>Bellanwila</p>
        <p>Boralasgamuwa</p>
        <p>Dehiwala</p>
        <p>Delkanda</p>
        <p>Embuldeniya</p>
        <p>Ethul Kotte</p>
        <p>Gangodawila</p>
        <p>Jambugasmulla</p>
        <p>Kalubowila</p>
      </div>
      <div class="column">
        <p>Kirulapona</p>
        <p>Kohuwala</p>
        <p>Mirihana</p>
        <p>Navinna</p>
        <p>Nawala</p>
        <p>Nedimala</p>
        <p>Nugegoda</p>
        <p>Pagoda</p>
        <p>Pamunuwa</p>
        <p>Pannipitiya</p>
      </div>
      <div class="column">
        <p>Thalangama</p>
        <p>Wickramasinghapura</p>
        <p>Wijerama</p>
        <p>Baddegana</p>
        <p>Battaramulla</p>
        <p>Bokundara</p>
        <p>Colombo 01</p>
        <p>Colombo 02</p>
        <p>Kollupitiya</p>
        <p>Bambalapitiya</p>
      </div>   
    </div>

    <div class="row">
    <h4 style="color:black; padding-bottom: 20px; padding-top: 20px;font-size: 20px;">kaluthara</h4>
      <div class="column">
        <p>Alubomulla</p>
        <p>Aruppitiya</p>
        <p>Horethuduwa</p>
        <p>Pallimulla</p>
        <p>Panadura</p>
        <p>Pinwatta</p>
       
      </div>
      <div class="column">
        <p>Handapangoda</p>
        <p>Horana</p>
        <p>Kalutara</p>
        <p>Katukurunda</p>
        <p>Aluthgama</p>
        <p>Beruwala</p>
        
      </div>
      <div class="column">
        <p>Ingiriya</p>
        <p>Madurawela</p>
        <p>Matugama</p>
        <p>Millaniya</p>
        <p>Morontuduwa</p>
        <p>Nagoda</p>
       
      </div>   
    </div>
</div>
<br>
</div>
</body>
</html>
<?=template_footer()?>