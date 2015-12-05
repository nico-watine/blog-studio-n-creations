<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<link rel="preconnect" href="http://cdn.studioncreations.com">
	<title>{{ page.title }} | Studio N Creations Blog</title>
	<meta name="description" content="Keep up with the latest projects and happenings here at the Studio N Creations blog" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link type="text/plain" rel="author" href="/humans.txt">
	
	<link rel="stylesheet" href="{{ site.base_cdn }}<?php autoVer('/css/core.css'); ?>" />
	<link rel="stylesheet" href="{{ site.blog_cdn }}<?php autoVer('/css/blog.css'); ?>" />
	<link rel="stylesheet" href="{{ site.blog_cdn }}<?php autoVer('/css/post.css'); ?>" />

	<script src="{{ site.base_cdn }}/js/modernizr-min.js"></script>

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="/css/ie.css" />
		<script src="/js/ie-min.js"></script>
	<![endif]-->
</head>
<body class="post-layout-1">
{% include blocks/top-bar.html %}
{% include blocks/nav.html %}

<main class="outer-container">
	<article>
		<div class="article-header">
			<h4>Web Design</h4>
			<h1>New Project - Greencare Interior Plants</h1>
			<time>13 March 2015</time>
		</div>
		<div class="article-body">
			<img class="article-hero" src="/img/post-attachments/projects/gctx/3-24/link-banner@2x.jpg" alt="Greencare Interior Plants Logo Update">
			<p>We're giving Houston-based Greencare Interior Plants's website a total transformation, making it more welcoming and not so stiff. Logo differences should give an idea of the new direction. Greencare Interior Plants provides commercial and residential indoor plant care services in Houston, Texas.</p>
		</div>
		<div class="article-footer">
			<h5>Tags | Greencare Interior Plants</h5>
		</div>
	</article>
	<aside>
		<h5>CATEGORIES</h5>
		<ul class="widget-nav">
			<li><a href="/web-design/">Web Design</a></li>
			<li><a href="/print-work/">Print Work</a></li>
			<li><a href="/web-development/">Web Development</a></li>
		</ul>
	</aside>
</main>


{% include blocks/footer.html %}
{% include components/scripts/scripts.php %}
</body>
</html>

