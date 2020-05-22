<!DOCTYPE html>
<html>
<head>
	<title>VanArts Students Project Web-17</title>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,700;0,800;0,900;1,400;1,700;1,800;1,900&display=swap" rel="stylesheet"> <!----GOOGLE FONT (RALEWAY includes thin, regular, italic, bold, extra bold)---->
	<script src="https://kit.fontawesome.com/ddb319e1e0.js" crossorigin="anonymous"></script> <!----FONTAWESOME---->
	<link rel="stylesheet" type="text/css" href=""> <!----CSS (need to add css file)---->
	<link rel="icon" href="..." type="image/png" sizes="16x16"><!----FAVICON (need favicon graphics from Ashwin/Steph)---->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/site.css">
</head>

<body>

	<div id="wrapper">
		<div class="allDept">
			<div class="mainNav">
				<div class="logo">
					<a href="https://www.vanarts.com/" target="_blank"><img src="imgs/logo.png" alt="VanArts Logo" style="width: 15%;"></a><!--Using jpg img for now (need png graphics from Ashwin/Steph)-->
				</div><!----logo end---->

				<div class="menu">
					<!--Hamburger Menu-->
				</div><!----menu end---->
			</div><!----mainNav end---->

			<div class="heading1">
				<h1>All Student’s Works</h1><br>
			</div>

			<div class="departments">
				<div class="arrowLeft">
					<a href="backend/index.php?controller=works&route=pager&pageon=1"><i class="fas fa-chevron-circle-left fa-2x"></i></i></a>
				</div>

				<div class="arrowRight">
					<a href="backend/index.php?controller=works&route=pager&pageon=2"><i class="fas fa-chevron-circle-right fa-2x"></i></i></a>
				</div>

				<div class="deptImages">
					<?php
					foreach($data as $record){
						?>
						<img class="addbybackend" src="imgs/<?=$record['strCoverImage']?>" alt="<?=$record['strName']?>" style="width:15%" data-id="<?=$record['id']?>">
					<?php
					}	
					?>	
				</div>
			</div>

			<a href="index.php"><button type="button" class="btn btn-secondary"><i class="fas fa-chevron-left"></i> &nbsp; Home</button></a>
		</div>



		<div class="foot">
			<p>	&copy; Designed by Web 17 at VanArts</p>
		</div>

	</div><!----wrapper end---->


	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="libs/functions.js" type="text/javascript"></script>
</body>
</html>
