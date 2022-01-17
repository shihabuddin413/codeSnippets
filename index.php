<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Snippets That Cheeze!</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<style type="text/css">
		body {
			background: url(bg.png);
		}

		.form-control{
			width: 85vw !important;
			margin:  10px 0;
			background: transparent !important;
			color:  white !important;
		}

		textarea {
			resize: none !important;
			height: 50vh !important;
		}

		.d-flex {
			width: 100% !important;
		}

		.container {
			width: 90vw !important;
			margin: auto !important;
		}

		.navbar{
			padding-left: 5vw;
			background-image: url(bg.png);
			background: rgb(0, 0, 0, 0.2) !important;
			
		}

		.h6{
			margin-left: 0;
			margin-right: 0;
			padding-top:  20px;
			color: lime ;
		}

		.nav-link{
			color: white !important;
		}

		.text-danger{
			text-decoration: none !important;
		}

		.bi-journal-code{
			color:  yellows !important;
			font-size: 25px;
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
          <a class="nav-link active" href="#">Editor</a>
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
		<p class="h6">Welcome! Here is your editor ready to write!</p>
		<div class="d-flex flex-column align-items-center">
			<form>
				<input type="text" name="snippetTitle" class="form-control border border-white border-2"  placeholder="File Name" />
				<textarea name="codeSnippetTitle" placeholder="Start Coding .. " class="form-control border border-white border-2"></textarea>
				<input type="submit" value="SAVE" class="btn btn-outline-light border border-2">
			</form>
		<div>
	</div>

	<?php 
		$url = 'https://github.com/shihabuddin413/test/tree/main';


		function openWriteFile ($fname){
			$file_handle = fopen($fname, 'w');
			fwrite($file_handle, 'Visit tutsplus.com to know more!');
			fclose($file_handle);
			echo "<script>alert('File write succes');</script>";
		}

		function openReadFile ($fname){
			$file_handle = fopen($fname, 'r');
			$fileSize = filesize($fname);
			$content = fread($file_handle , $fileSize);
			fclose($file_handle);
		}

	?>
	
</body>	
</html>