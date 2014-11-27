<!doctype html>
<html>
	<head>
		<title>Axiopache - Default Apache2 Page</title>
		<link rel="icon" href="favicon.ico" />
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<?php
					$dir    	= '.';
					$exclude	= array(".", "..", ".metadata", "index.php", "RemoteSystemsTempFiles", "favicon.ico");
					$files 		= array_diff(scandir($dir), $exclude);
					/*
			 		* DEBUG MODE
			 		*/
					//	print_r($files);
					for ($i = 0; $i < 100; $i++ ) {
				?>
						<a href="<?php echo $files[$i]; ?>"><?php echo $files[$i]; ?></a>
						<br />
				<?php 
					}
				?>
			</div>
			<div class="col-md-4"></div>
		</div>
	</body>
</html>