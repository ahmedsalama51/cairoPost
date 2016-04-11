<!DOCTYPE html>
<?php
	session_start();
?>
<html>
<head>
<!-- iclude JS fiels-->
<script src="libs/js/jquery-1.11.3.min.js" type="text/javascript" ></script>
<script src="views/tab.js" ></script><!-- end of iclude JS fiels-->
<!-- iclude BootStrap fiels-->
<link rel="stylesheet" href="libs/css/bootstrap.css" />
<link rel="stylesheet" href="libs/css/bootstrap-theme.css" />
<link rel="stylesheet" href="libs/css/style.css" /><!-- end of iclude BootStrap fiels-->
<!-- iclude Fonts fiels-->
<link rel="stylesheet" href="libs/fonts/glyphicons-halflings-regular.eot" />
<link rel="stylesheet" href="libs/fonts/glyphicons-halflings-regular.ttf" />
<link rel="stylesheet" href="libs/fonts/glyphicons-halflings-regular.woff" />
<link rel="stylesheet" href="libs/fonts/glyphicons-halflings-regular.woff2" /><!-- end of iclude Fonts fiels-->
	<title>Cairo Post</title>
</head>

<body>
	<nav class="navbar navbar-default navbar-fixed-top">
				<p class="navbar-text navbar-left">
					<a href="index.php" class="navbar-links">Home</a>
				
					<a href="allposts.php" class="navbar-links">All posts</a>
					<?php 
					if(!isset($_SESSION['user_id']))
					{
						echo "<a href='login.php' class='navbar-links'>Login</a>";
						echo "<a href='register.php' class='navbar-links'>Register</a>";
					}

					
					?>
				</p>
				<?php
				if(isset($_SESSION['user_id']))
				{?>
				<p class="navbar-text navbar-right"> 
				<?php
				 echo "<a href='logout.php' class='navbar-links'>Log out</a>";
				 echo $_SESSION['user_name'];
				 
				 ?>
					<a href="/blog/logout" class="navbar-link" style="color:#447e9b;">
						<img src="" width="25px" height="25px"/>
						
					</a>
				<?php }
				 ?>
				</p>
				
		</nav>