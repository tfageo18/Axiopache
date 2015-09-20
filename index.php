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
			
		<style>
			.projet  {
				border : 1px solid grey;
				margin-top : 20px;
			}
			
			.phpinfo {	
				margin-top : 20px;
			}
		</style>
	</head>
	<body>
		<div class="row">
			<div class="col-md-4 phpinfo">
				<?php echo phpinfo(); ?>
			</div>
			<div class="col-md-4 projet">
				<center><h1>Les projets</h1></center>
				<hr />
				<?php
					$dir    	= '.';
					$exclude	= array(".", "..", ".metadata", "index.php", "RemoteSystemsTempFiles", "favicon.ico", ".git", "README.md");
					$files 		= array_diff(scandir($dir), $exclude);
					/*
			 		* DEBUG MODE
			 		*/
					//	print_r($files);
					for ($i = 0; $i < 100; $i++ ) {
						if (!empty($files[$i])) {
				?>
						<center><a href="<?php echo $files[$i]; ?>"><h2><?php echo $files[$i]; ?></h2></a></center>
						<hr />
				<?php 
						}
					}
				?>
			</div>
			<div class="col-md-4"></div>
		</div>
	</body>
</html>