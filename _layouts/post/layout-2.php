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
<body class="post-layout-2">
{% include blocks/top-bar.html %}
{% include blocks/nav.html %}

<main class="outer-container">
	<article itemscope itemtype="http://schema.org/BlogPosting">
		<header>
			<h4 itemprop="genre" ><a href="/{{ page.article-category-link }}/">{{ page.article-category }}</a></h4>
			<h1 itemprop="headline">{{ page.article-title }}</h1>
			<h2 itemprop="description" class="subtitle">{{ page.article-subtitle }}</h2>
			<time datetime="{{ page.article-datetime }}T08:00:00-06:00">{{ page.article-time }}</time>
			<meta itemprop="datePublished" content="{{ page.article-datetime }}T08:00:00-06:00"/>
		</header>
		<section itemprop="articleBody" id="article-body">
			<img itemprop="image" class="article-hero" src="{{ site.blog_cdn }}{{ page.article-hero }}" alt="{{ page.article-hero-alt }}">
			{{ content }}
		</section>
		<footer>
			<h5>Tags | <a href="/tags/{{ page.article-tag-link }}"><span itemprop="keywords">{{ page.article-tag }}</span></a></h5>
		</footer>
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

