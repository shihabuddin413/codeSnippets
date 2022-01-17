<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Saved Snippets</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<style type="text/css">
		body {
			background: url(bg.png);
		}
		.container {
			width: 90vw !important;
			margin: auto !important;
			height: 80vh;
			scroll-behavior: auto;
			overflow-y: auto;
			margin-top:  10px;
		}

		.navbar{
			padding-left: 5vw;
			background-image: url(bg.png);
			background: rgb(0, 0, 0, 0.2) !important;
			
		}

		.nav-link{
			color: white !important;
		}

		.text-danger{
			text-decoration: none !important;
		}

		.list-group-item {
			background: rgb(255, 255, 255, 0.15);
			/* border: 1px solid white; */
			color:  white;
			margin:  2px;
			border-radius:  4px !important;
		}
		.list-group {
			margin-top: 15px !important;
		}

		a:link {
			text-decoration: none;
		}
	</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><b><i class="bi bi-journal-code text-warning h3"></i></b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" style="color:yellow !important;"> <b>Snippets That Cheeze!</b>  </a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" href="./">Editor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./save.php">Saved Snippets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Souce code v1.0</a>
        </li>
    </div>
  </div>
</nav>


	<div class="container">
		<ul class="list-group">
			<a href="#">
				<li class="list-group-item">
					<h6 class="h6 text-warning">An item </h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ....</p>
				</li>
			</a>
			<a href="#">
				<li class="list-group-item">
					<h6 class="h6 text-warning">An item </h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ....</p>
				</li>
			</a>
			<a href="#">
				<li class="list-group-item">
					<h6 class="h6 text-warning">An item </h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ....</p>
				</li>
			</a>

		</ul>                  
	</div>



</body>
</html>