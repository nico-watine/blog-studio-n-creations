<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	{{ site.start_comment }}<link rel="preconnect" href="http://cdn.studioncreations.com">{{ site.end_comment }}
	<title>{{ page.page-title }} | Studio N Creations Blog</title>
	<meta name="description" content="{{ page.page-description }}" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link type="text/plain" rel="author" href="/humans.txt">

	<meta property="og:type" content="{{ page.og-type }}" />
	<meta property="og:url" content="{{ site.blog_url }}{{ page.og-url }}" />
	<meta property="og:title" content="{{ page.og-title }}" />
	<meta property="og:image" content="{{ site.blog_cdn }}{{ page.og-image }}" />
	<meta property="og:description" content="{{ page.og-description }}" />
	
	<link rel="stylesheet" href="http://cdn.studioncreations.com<?php autoVer('/css/core.css'); ?>" />
	<link rel="stylesheet" href="{{ site.blog_cdn }}<?php autoVer('/css/blog.css'); ?>" />

	<script src="{{ site.base_cdn }}/js/modernizr-min.js"></script>

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="{{ site.blog_cdn }}/css/ie.css" />
		<script src="{{ site.base_cdn }}/js/ie-min.js"></script>
	<![endif]-->
</head>