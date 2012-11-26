<?php
$page = @$_GET['page'];
switch ($page) {
	case '':
		$show_page = "home";
		$title = "Hem";
		break;
	case 'Hem':
		$show_page = "home";
		$title = "Hem";
		break;
	case 'OmOss':
		$show_page = "about";
		$title = "Om oss";
		break;
	case 'Kontakt':
		$show_page = "contact";
		$title = "Kontakt";
		break;
	case 'ServerInfo':
		$show_page = "serverinfo";
		$title = "Server info";
		break;
	case 'Regler':
		$show_page = "rules";
		$title = "Regler";
		break;
	case 'Nerladdning':
		$show_page = "download";
		$title = "Nerladdning";
		break;
	default:
		$show_page = "404";
		$title = "404";
		break;
}
?>
<html>
	<head>
		<title>Folke's Gaming · <?php echo $title; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href='assets/css/bootstrap.css' rel='stylesheet' type='text/css'>
		<link href='assets/css/stylesheet.css' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="navbar">
				<div class="navbar-inner">
					<a class="brand" href="?page=Hem">Folke's Gaming</a>
					<ul class="nav">
						<li class="divider-vertical"></li>
						<li><a href="#">Forum</a></li>
						<li class="divider-vertical"></li>
						<li><a href="?page=Regler">Regler</a></li>
						<li class="divider-vertical"></li>
						<li><a href="?page=OmOss">Om oss</a></li>
						<li class="divider-vertical"></li>
						<li><a href="?page=Nerladdning">Nerladdning</a></li>
					</ul>
				</div>
			</div>
			<?php include('assets/pages/'.$show_page.'.php'); ?>
		</div>
	</body>
</html>