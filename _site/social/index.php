<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<link rel="preconnect" href="http://cdn.studioncreations.com">
	<title>Social | Studio N Creations Blog</title>
	<meta name="description" content="Keep up with the latest projects and happenings here at the Studio N Creations blog" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link type="text/plain" rel="author" href="/humans.txt">
	
	<link rel="stylesheet" href="<?php autoVer('/css/core.css'); ?>" />
	<link rel="stylesheet" href="<?php autoVer('/css/blog.css'); ?>" />

	<script src="/js/modernizr-min.js"></script>

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="/css/ie.css" />
		<script src="/js/ie-min.js"></script>
	<![endif]-->
</head>

<body>
<header id="site-header">
	<div class="row" id="nav-bar">
		<a href="/" class="title" id="index-link"><span id="large">Blog.Studio N Creations</span><span id="mini">BLOG.SNC</span></a>
		<div id="button-wrapper">
			<button id="menu-toggle" type="button"><span id="word">Menu</span><span id="hamburger"></span></button>
		</div>
	</div>
</header>

<main class="outer-container">
	<section class="blog-roll">
		
	</section>
	<aside class="sidebar">
		<div class="widget" id="category-title">
	<div class="row">
		<h5>POST CATEGORY</h5>
		<h1>Social</h1>
	</div>
</div>
		<div class="widget" id="post-categories">
	<div class="row">
		<h5>CATEGORIES</h5>
		<ul class="widget-nav">
			<li><a href="/web-design/">Web Design</a></li>
			<li><a href="/print-work/">Print Work</a></li>
			<!-- <li><a href="/social/">Social</a></li> -->
			<li><a href="/web-development/">Web Development</a></li>
		</ul>
	</div>
</div>
<div class="widget" id="snc-link">
	<div class="row">
		<ul class="widget-nav">
			<li><a href="http://studioncreations.com" target="_blank">Need a website? Here's our portfolio.</a></li>
		</ul>
	</div>
</div>


	</aside>
</main>

<footer id="page-footer">
	<div class="outer-container padding">
		<div class="row">
			<ul class="footer-menu">
				<li><a href="/">HOME</a></li>
				<li><a href="/web-design">WEB DESIGN</a></li>
				<li><a href="/web-development">WEB DEVELOPMENT</a></li>
				<li><a href="/print-work">PRINT WORK</a></li>
				<li><a href="http://studioncreations.com/contact/" target="_blank">CONTACT</a></li>
			</ul>
		</div>
		<div class="row">
			<h6>&copy; <a href="http://studioncreations.com" target="_blank" id="snc-link">STUDIO N CREATIONS</a> | 2015 <a href="https://www.facebook.com/studio.n.creations" target="_blank"><img id="facebook" src="/img/footer/facebook.png" alt="Facebook Link"></a></h6>
			<h6 id="html5-powered">powered by <img src="/img/footer/html5-shield.png" alt="HTML5 Shield"></h6>
		</div>
	</div>
</footer>

<nav class="overlay overlay-slidedown">
	<ul>
		<li class="blog-link">
			<a href="/">Home<span>Blog Roll</span></a>
		</li>
		<li class="blog-link">
			<a href="/web-design/">Web Design<span>Category</span></a>
		</li>
		<li class="blog-link">
			<a href="/web-development/">Web Development<span>Category</span></a>
		</li>
		<li class="blog-link">
			<a href="/print-work/">Print Work<span>Category</span></a>
		</li>
		<ul class="snc-links">
			<li id="services">
				<a href="http://studioncreations.com/what-we-do/" target="_blank">Services<span>Our Services</span></a>
			</li>
			<li id="portfolio">
				<a href="http://studioncreations.com/portfolio/" target="_blank">Portfolio<span>Our Portfolio</span></a>
			</li>
			<li id="about">
				<a href="http://studioncreations.com/about-us" target="_blank">About<span>About Us</span></a>
			</li>
			<li id="email">
				<a href="http://studioncreations.com/contact/" target="_blank">Contact<span>Get In Touch</span></a>
			</li>
		</ul>
	</ul>
</nav>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/vendor/jquery/1-11-3/jquery-min.js"><\/script>')</script>
<script src="<?php autoVer('/js/nav-min.js'); ?>"></script>
 

</body>
</html>
