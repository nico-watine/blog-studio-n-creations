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

	<script src="{{ site.base_cdn }}/js/modernizr-min.js"></script>

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="/css/ie.css" />
		<script src="/js/ie-min.js"></script>
	<![endif]-->
</head>