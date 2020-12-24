<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?php echo $judul; ?></title>
    <style>
    	.jarak {
    		padding-left: 200px;
    	}

    	.latar {
    		background: #00D4FF;
    	}

    	.p1 {
    		font-size: 26px;
    	}
    </style>
  </head>
  <body class="latar">
	<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-inverse">
		<div class="container ">
			<a class="navbar-brand" href="#"><b>HunianLengkap</b></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		   		<span class="navbar-toggler-icon"></span>
		  		</button>
		<div class="collapse navbar-collapse " id="navbarNavAltMarkup">
		    <div class="navbar-nav">
		      <a class="nav-item nav-link" href="<?php echo base_url('index.php/home') ?>">Home<span class="sr-only">(current)</span></a>
		      <a class="nav-item nav-link" href="<?php echo base_url('index.php/inputrmh')?>">Rumah</a>
		      <a class="nav-item nav-link" href="#">Fasilitas</a>
		      <a class="nav-item nav-link" href="#">About Us</a>
		      <a class="nav-item nav-link" href="#">Contact</a>
		      <!-- <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a> -->
		    </div>
		<form class="form-inline jarak">
		    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    		      <a class="nav-item nav-link" href="">Login</a>
		</form>
	    </div>
	  	</div>
	</nav> 