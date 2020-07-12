<!--header-->
<?php include 'config.php'; ?>

<?php 
$ayarlar=$db->prepare("SELECT * FROM ayarlar");
$ayarlar->execute();
$ayarcek=$ayarlar->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<title><?php echo $ayarcek["site_title"]; ?></title>

<head>
	<meta name="description" content="<?php echo $ayarcek["site_desc"]; ?>">
	<meta name="keyword" content="<?php echo $ayarcek["site_keyw"]; ?>">
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Blog Template</title>
	<link rel="stylesheet" href="css/index.css">

	<!-- Favicon -->
	<link rel="shortcut icon" href="images/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/apple-touch-icon.png">

	<!-- All CSS Plugins -->
	<link rel="stylesheet" type="text/css" href="css/plugin.css">

	<!-- Main CSS Stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- all index css -->
	<link rel="stylesheet" type="text/css" href="css\index.css">
	<!-- Google Web Fonts  -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
</head>


<body>
	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand ml-5 border-right" href="index.php" >Muhammet Korçil </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Anasayfa <span class="sr-only">(current)</span></a>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="aboutme.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Hakkımda
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="aboutme.php">Hakkımda</a>
						<a class="dropdown-item" href="#">İletişim</a>
					</div>
				</li>

			</ul>
			<form class="form-inline my-2 my-lg-0 float-right">
				<input class="form-control mr-sm-2" type="search" placeholder="Konu Giriniz" aria-label="Search">
				<button class="btn btn-outline-success mt-4 my-sm-0" type="submit">Ara</button>
			</form>
		</div>
	</nav>
