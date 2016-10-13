<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Главная</title>

	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="libs/font-awesome/font-awesome.min.css" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="libs/wow/animate.css">
	<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />

	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<script src="libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="libs/owl.carousel/owl.carousel.js"></script>
	<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="libs/wow/wow.min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>

	<script>
    	new WOW().init();
    </script>

	<script src="js/responsiveTabs.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/common.js"></script>
<div class="az-content">
	<section class="az-header">
		<?php require_once('includes/header.php'); ?>
		<?php require_once('includes/header-bottom.php'); ?>
	</section>
	<section class="az-middle">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="az-content-left">
						<div class="az-border">
							<div class="ab-single-wrap">
								<div class="ab-brad-crumps">
									<span><a href="#">О потолках</a></span>
									<span class="ab-slash">/</span>
									<span><a href="#">Статьи</a></span>
									<span class="ab-slash">/</span>
									<span>Путь до внутренней страницы</span>
								</div>
								<h1>Как приклеить потолочный плинтус на полотно натяжного потолка</h1>
								<div class="ab-metki">
									<span><a href="#">Натяжные потолки</a></span>
									<span><a href="#">Комментариев 87</a></span>
								</div>
								<div class="ab-single-txt">
									<span>
										Стык стены и пола декорируется плинтусом, который имеет не только декоративную функцию, но и практическую. Его установка является само собой разумеющейся операцией при выполнении
									</span>
								</div>
							</div>
							<div class="ab-single-img-1">
								<img class="img-responsive" src="img/ab-single-img-1.png" alt="">
								<div class="ab-sing-img-txt">
									<span>Потолки,</span>
									<span>Варианты</span>
								</div>
							</div>
							<div class="ab-single-wrap">
								<div class="ab-red-ramka">
									<div class="ab-red-ramka-title">
										<span>Содержание</span>
									</div>
									<ul>
										<li><span class="ab-tsifra">1.</span><span>Для этой цели используется специальный</span></li>
										<li>
											<span class="ab-tsifra">2.</span><span>Для начала следует вспомнить, что представляет собой натяжной потолок</span>
											<li><span class="ab-tsifra ab-tsifra-2">2.1</span><span>Если нельзя потолочный плинтус или галтель закрепить</span></li>
										</li>
										<li><span class="ab-tsifra">3.</span><span>Крепление потолочного плинтуса </span></li>
									</ul>	
								</div>
								<div class="ab-single-txt">
									<span>
										Декоративный плинтус бывает выполнен из различных материалов и самым дешевым является пенопластовый. Он имеет очень маленький вес и легко приклеивается прямо к обоям. Существует большой ассортимент его видов. 
									</span>
								</div>
								<div class="ab-single-second-title">
									<span>Для этой цели используется специальный</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="az-content-right">
						<div class="az-border">
							<?php require_once('includes/sidebar.php'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="az-buffer"></div>
</div>
<section class="az-footer">
	<?php require_once('includes/footer.php'); ?>
</section>
</body>
<script>
	$(document).ready(function(){
		var left = $('.az-content-left .az-border');
		var right = $('.az-content-right .az-border');
		var height = Math.max(left.height(), right.height());
		left.height(height);
		right.height(height);
	});
</script>
</html>

