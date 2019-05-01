<?
ob_start();
// session_start();

require_once (MODELS . "NavigationModel.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $pageTitle; ?></title>
		<meta name="description" content="<?php echo $pageDescription; ?>">
		<meta name="keywords" content="<?php echo $pageKeywords; ?>">
		<meta name="author" content="<?=$ogsite_name; ?>>
        <meta property="og:title" content="<?=$ogtitle; ?>">
        <meta property="og:description" content="<?=$ogdescription; ?>">
        <meta property="og:keywords" content="<?=$ogkeywords; ?>">
        <meta property="og:type" content="$ogtype">
        <meta property="og:url" content="<?=$ogurl; ?>">
        <meta property="og:site_name" content="<?=$ogsite_name; ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- JS -->
		<!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
		<!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->

		<!-- CSS -->
		<link href="<?php echo URL; ?>css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo URL; ?>css/guides.css" rel="stylesheet">
		<link href="<?php echo URL; ?>css/carousel_fade.css" rel="stylesheet">
		<link href="<?php echo URL; ?>css/fastmot.css" rel="stylesheet">
		<link href="<?php echo URL; ?>css/marginandpadding.css" rel="stylesheet">
		<link href="<?php echo URL; ?>css/text.css" rel="stylesheet">
		<link href="<?php echo URL; ?>fancybox/fancybox.css" rel="stylesheet">
		<link href="<?php echo URL; ?>css/hover.css" rel="stylesheet">
		<link href="<?php echo URL; ?>css/font-awesome.css" rel="stylesheet">
		<link href="<?php echo URL; ?>css/masonry.css" rel="stylesheet">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

		

	</head>
	<body>

		<!-- Wrapper Section Starts Here -->
		<section class="container-fluid wrapper">
			<section class="container-fluid" id="headerHolder" style="background-color: #000000;">
				<header class="container" style="height: 100px;" >

					<a class="navbar-brand" href="<?echo URL; ?>home">
					<figure class="">
						<img  class="img-responsive" src="<?echo URL; ?>images/fastmot-logo.jpg" />
					</figure> <span id="text"></span> </a>
					
					
					<div class="social-icons pull-right">
					    <a href="https://www.facebook.com/fastmothackney/?fref=ts" target="_blank"><i class="fa fa-2x fa-facebook-square fa"></i></a>
					    <a href="https://twitter.com/MotFast" target="_blank"><i class="fa fa-2x fa-twitter-square"></i></a>
					    
					</div>

				</header>

				<!-- navigation -->

				<nav class="navbar navbar-default" style=" background-color: #fa0002;">

					<div class="container" >
						<!-- style="border: 1px solid green;" -->
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

						</div>

						<div class="collapse navbar-collapse" id="navbar-collapse">
							<ul class="nav navbar-nav" id="navi">

								<?php
								
								
								foreach ($navy AS $links):?>

								<li id="" 
								class="">

									<a class="" href="<?= URL . urlencode(strtolower($links["name"])); ?>"><?=strtoupper($links["name"]); ?></a>
									
								</li>
								

								<?endforeach ?>

							</ul>

						</div>

					</div>
				</nav>

				<!-- header -->

			</section>

			<div class="divider-black"></div>

			<!-- Content Section Starts Here -->
			<section class="container-fluid" id="content">
				<!-- <?=$selectedPage?> -->

