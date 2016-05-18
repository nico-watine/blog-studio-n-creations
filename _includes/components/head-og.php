<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" class="no-js" lang="en-US">
<head itemscope itemtype="http://schema.org/WebSite">
	<meta charset="utf-8">
	{{ site.start_comment }}<link rel="preconnect" href="http://cdn.studioncreations.com">{{ site.end_comment }}
	<title>{{ page.page-title }} | Studio N Creations Blog</title>
	<meta name="description" content="{{ page.page-description }}" />
	<link rel="canonical" href="http://blog.studioncreations.com/{{ page.og-url }}" itemprop="url">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="author" href="/humans.txt">

	<link rel="icon" sizes="192x192" href="/touch-icon-192x192.png">

	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="{{ page.og-type }}" />
	<meta property="og:title" content="{{ page.og-title }}" />
	<meta property="og:description" content="{{ page.og-description }}" />
	<meta property="og:url" content="http://blog.studioncreations.com/{{ page.og-url }}" />
	<meta property="og:site_name" content="Studio N Creations Blog" />
	<meta property="og:image" content="{{ site.blog_cdn }}{{ page.og-image }}" />
	<meta property="fb:app_id" content="985598931535022">
	
	<link rel="stylesheet" href="{{ site.base_cdn }}<?php autoVer('/css/core.css'); ?>" />
	<link rel="stylesheet" href="{{ site.blog_cdn }}<?php autoVer('/css/blog.css'); ?>" />
</head>