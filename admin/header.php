	<?php include '../config.php'; 
	
	if (!$_SESSION["admin_kadi"]) {
		header("Location: login.php");
	}

	$id=1;


	$query=$db->prepare("SELECT * FROM ayarlar");
	$query->execute();
	$cek=$query->fetch(PDO::FETCH_ASSOC);
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title><?php echo $cek["site_title"]; ?> - Admin Paneli</title>
		<link rel="stylesheet" type="text/css" href="css\index.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>

		<div class="header">
			<div class="logo-title">
				<div class="logo"><h1>Muhammet Korçil</h1></div>
				<div class="nav">
					<ul>
						<li>
							<a href="#"><?php echo $_SESSION["admin_kadi"]; ?></a>
							<ul>
								<li><a href="profil.php">Profil</a></li>
								<li><a href="../" target="_blank">Siteye Git</a></li>
								<li><a href="logout.php">Çıkış</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
