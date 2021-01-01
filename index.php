<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PANEL</title>
	<style>

	</style>
</head>
<body>
<section id="header" style="margin-top: 50px">
	<h1 class="text-center" style="text-align: center;">PANEL</h1>
</section>	
<section id="navbar" style="margin-top: 50px">
	<ul>
		<li style="float: left"><a href="/projeler/" class="">PANEL</a></li>
		<li><a href="http://localhost/phpInfo/">phpInfo</a></li>
		<li><a href="http://localhost/phpmyadmin">phpMyAdmin</a></li>
		<li><a href="https://www.googşe.com/">Google</a></li>
		<li><a href="https://stackoverflow.com/">StackOverFlow</a></li>
		<li><a href="https://www.w3schools.com/">W3schools</a></li>
		<li><a href="https://recepemre.me/">recepemre.me</a></li>				
	</ul>
</section>
<section id="giris" style="margin-top: 100px">
	<div class="container">
		<div class="row">
			<div class="col-md-6">Kendim için yazdığım işleri hızlandırması için kullandığım giriş seviyesi panel.</div>
				<div class="col-md-6">
					<div class="shadowbox">
						<form action="" method="post">
							Google'da Arama <input type="text" name="aranacakgoogle" placeholder="Google'da ara: " id="input">
							<input type="submit" name="ARA" id="ara">
						</form>
					</div>
				</div>
			</div>	
		<div class="row">
			<div class="col-md-6"></div>
			<div class="col-md-6"><hr></div>
		</div>
		<div class="row" style="">
			<div class="col-md-6"></div>
				<div class="col-md-6">
					<div class="shadowbox">
						<form action="" method="post">
							StackOverFlow'da Arama <input type="text" name="aranacakstack" placeholder="StackOverFlow'da ara: " id="input">
							<input type="submit" name="ARA" id="ara">
						</form>
					</div>
				</div>
			</div>
		</div>
		</div>	
</section>
<?php if (isset($_POST["aranacakgoogle"])) {
	$a = str_replace(" ", "+", $_POST["aranacak"]);
	$search = "https://www.google.com/search?q=".$a;
	Header("Location: $search");
} else if (isset($_POST["aranacakstack"])) {
	$a = str_replace(" ", "+", $_POST["aranacakstack"]);
	$search = "https://stackoverflow.com/search?q=".$a;
	Header("Location: $search");
} ?>	
<section id="navbardown" style="margin-top: 50px">
	<ul>
		<p>Made with <3 by AzmeaL	</p>
	</ul>
</section>
</body>

</html>
