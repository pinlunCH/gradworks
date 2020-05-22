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
		<div class="main">
			<div class="mainNav">
				<div class="logo">
					<a href="https://www.vanarts.com/" target="_blank"><img src="imgs/logo.png" alt="VanArts Logo" style="width: 15%;"></a><!--Using jpg img for now (need png graphics from Ashwin/Steph)-->
				</div><!----logo end---->

				<nav>
          <ul class="main1">
              <li>
                  <a href="#" data-page="home" data-url="" data-position=".home" class="hEffect">2D/3D Character Animation</a>
              </li>
              <li>
                  <a href="#" data-page="cat" data-url="" data-position=".categories" class="hEffect">Acting for Film&Television</a>
              </li>
              <li>
                  <a href="#" data-page="height" data-url="" data-position=".heights" class="hEffect">Broadcasting & Online Media</a>
              </li>
              <li>
                  <a href="#" data-page="ascdesc" data-url="" data-position=".ascdesc" class="hEffect">Game Art & Design</a>
              </li>
              <li>
                  <a href="#" data-page="spacing" data-url="" data-position=".spacing" class="hEffect">Professional Photography</a>
              </li>
              <li>
                  <a href="" class="hEffect">Visual Effects for Film & TV</a>
              </li>
              <li>
                <a href="" class="hEffect">Web Development & Interactive Design</a>
            </li>
          </ul>
        </nav>
        <div class="burger">
          <span></span>
        </div>
      </div>

			<div class="header">
				<div class="title">
				    <h1>Welcome to <br> Van<span class="red">arts</span></h1>
				</div><!----title end---->
			</div>
		</div>

		<div class="subContent">
			<div class="content">
				<h2>Watch our student's work</h2>
				<hr>
				<a href="dept.php"><button type="button" class="btn btn-danger">View all <i class="fas fa-play"></i></button></a>
			</div><!----title end---->

			<div class="poster">
				<div class="post">
					<a href="dept.php"><i class="fas fa-play"></i></a>
				</div>	
			</div>
		</div>

		<div class="bgModal" id="modal1">
          <div class="modal-content">
          	<img src="imgs/closebutton.png" alt="delete button" class="close" id="closeModal">
          	<div class="spaceContent">   
	            <img src="imgs/poster1.jpg" id="modalImage"/>
	            <h2>Blade Runner</h2>
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus porro officia hic fugit nihil, rem dolorum inventore nulla, dignissimos aut. Beatae omnis asperiores incidunt, reprehenderit suscipit eligendi? Voluptas, facilis, eveniet.Beatae omnis asperiores incidunt, reprehenderit suscipit eligendi?</p>
	         </div>
          </div>
        </div>
        <div class="bgModal" id="modal2">
          <div class="modal-content">
          	<img src="imgs/closebutton.png" alt="delete button" class="close" id="closeModal">
          	<div class="spaceContent"> 
	            <img src="imgs/poster2.jpg" id="modalImage"/>
	            <h2>Blade Runner</h2>
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus porro officia hic fugit nihil, rem dolorum inventore nulla, dignissimos aut. Beatae omnis asperiores incidunt, reprehenderit suscipit eligendi? Voluptas, facilis, eveniet.Beatae omnis asperiores incidunt, reprehenderit suscipit eligendi?</p>
	        </div>
          </div>
        </div>
         <div class="bgModal" id="modal3">
          <div class="modal-content">
            <img src="imgs/closebutton.png" alt="delete button" class="close" id="closeModal">
          	<div class="spaceContent"> 
            <img src="imgs/poster3.jpg" id="modalImage"/>
            <h2>Blade Runner</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus porro officia hic fugit nihil, rem dolorum inventore nulla, dignissimos aut. Beatae omnis asperiores incidunt, reprehenderit suscipit eligendi? Voluptas, facilis, eveniet.Beatae omnis asperiores incidunt, reprehenderit suscipit eligendi?</p>
          </div>
        </div>
        <div class="bgModal" id="modal4">
          <div class="modal-content">
            <img src="imgs/closebutton.png" alt="delete button" class="close" id="closeModal">
            <img src="imgs/poster4.jpg" id="modalImage"/>
            <h2>Blade Runner</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus porro officia hic fugit nihil, rem dolorum inventore nulla, dignissimos aut. Beatae omnis asperiores incidunt, reprehenderit suscipit eligendi? Voluptas, facilis, eveniet.Beatae omnis asperiores incidunt, reprehenderit suscipit eligendi?</p>
          </div>
        </div>
		<div class="foot">
		</div>

	</div><!----wrapper end---->

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="libs/functions.js" type="text/javascript"></script>
<script src="libs/ham.js"></script>
<script src="libs/script.js"></script>
</body>
</html>
