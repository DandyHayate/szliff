<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
	<title>Dewan Background Animation</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
		@keyframes animate-earth {
			from { background-position: 120% 70px, 10px 0px, 0px 0px;  } 
			to { background-position: -20% 70px, -1000px 0px, -500px 0px; }
		}
		@-webkit-keyframes animate-earth {
			from { background-position: 120% 70px, 0px 0px, 0px 0px;  } 
			to { background-position: -20% 70px, -1000px 0px, -500px 0px; }
		}
		@-moz-keyframes animate-earth {
			from { background-position: 120% 70px, 0px 0px, 0px 0px;  } 
			to { background-position: -20% 70px, -1000px 0px, -500px 0px; }
		}
		@-ms-keyframes animate-earth {
			from { background-position: 120% 70px, 0px 0px, 0px 0px;  } 
			to { background-position: -20% 70px, -1000px 0px, -500px 0px; }
		}


		@keyframes move-twink-back {
		    from {background-position:0 0;}
		    to {background-position:-10000px 5000px;}
		}
		@-webkit-keyframes move-twink-back {
		    from {background-position:0 0;}
		    to {background-position:-10000px 5000px;}
		}
		@-moz-keyframes move-twink-back {
		    from {background-position:0 0;}
		    to {background-position:-10000px 5000px;}
		}
		@-ms-keyframes move-twink-back {
		    from {background-position:0 0;}
		    to {background-position:-10000px 5000px;}
		}

		@keyframes move-mists-back {
		    from {background-position:0 0;}
		    to {background-position:-10000px 1000px;}
		}
		@-webkit-keyframes move-mists-back {
		    from {background-position:0 0;}
		    to {background-position:-10000px 1000px;}
		}
		@-moz-keyframes move-mists-back {
		    from {background-position:0 0;}
		    to {background-position:-10000px 1000px;}
		}
		@-ms-keyframes move-mists-back {
		    from {background-position: 0 0;}
		    to {background-position:-10000px 1000px;}
		}

		.stars, .twinks, .mists, .earth {
			position:absolute;
			top:0;
			left:0;
			right:0;
			bottom:0;
			width:100%;
			height:100%;
			display:block;
		}

		.stars {
			background:#000 url(images/stars.png) repeat top center;
		}

		.rocket {
			-ms-transform: rotate(90deg);
			-webkit-transform: rotate(90deg);
			transform: rotate(90deg);
			margin: 200px 0px 0px 45%;
		}

		.twinks{
			background:transparent url(images/twinks.png) repeat top center;
			-moz-animation:move-twink-back 200s linear infinite;
			-ms-animation:move-twink-back 200s linear infinite;
			-o-animation:move-twink-back 200s linear infinite;
			-webkit-animation:move-twink-back 200s linear infinite;
			animation:move-twink-back 200s linear infinite;
		}

		.earth {
			margin: 0px auto;
			background-image: url(images/earth.gif);
			background-position: 120% 70px, 0px 0px, 0px 0px;
			background-repeat: no-repeat, repeat-x, repeat-x;
			animation: animate-earth linear 50s infinite;
			-moz-animation: animate-earth linear 50s infinite;
			-ms-animation: animate-earth linear 50s infinite;
			-o-animation: animate-earth linear 50s infinite;
			-webkit-animation: animate-earth linear 50s infinite;
		}

		.mists{
		    background:transparent url(images/mists.png) repeat top center;
			-moz-animation:move-mists-back 200s linear infinite;
			-ms-animation:move-mists-back 200s linear infinite;
			-o-animation:move-mists-back 200s linear infinite;
			-webkit-animation:move-mists-back 200s linear infinite;
			animation:move-mists-back 200s linear infinite;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-dark bg-transparent fixed-top">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	    Dewan Komputer
	  </a>
	</nav>

	<div class="stars"></div>
	<div class="twinks"></div>
	<div class="earth"></div>
	<div class="mists"></div>

	<div>
	    <img src="images/pesawat.gif" alt="rocket" class="rocket" width="50px">
	</div>

	<div class="navbar nav-center bg-transparent fixed-bottom">
		<div class="text-white">
			© <?php echo date('Y'); ?> Copyright :
		    <a href="https://dewankomputer.com/"> Dewan Komputer</a>
		</div>
	</div>
</body>
</html>