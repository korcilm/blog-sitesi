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
<meta name="description" content="<?php echo $ayarcek["site_desc"]; ?>">
<meta name="keyword" content="<?php echo $ayarcek["site_keyw"]; ?>">
<link rel="stylesheet" type="text/css" href="css\index.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<body>
	<header style="height: 256px; margin-bottom: 36px; background-image: url(images/background.jpg);"><br><br><br>
		<div class="hero">
			<h1 class="title">Muhammet Korçil</h1>
			<div class="hero-social-links">
				<a class="social-link" href="https://twitter.com/Mkorcil1">Twitter</a>
				<a class="social-link" href="https://www.linkedin.com/in/muhammet-korçil-670919198/">Linkedin</a>
				<a class="social-link" href="https://github.com/korcilm">Github</a>
			</div>
			<ul>
				<li><a href="index.php">Anasayfa</a></li>
				<li><a href="about.php">Hakkımda</a></li>
			</ul>
		</div>
	</header> 
	<br>
