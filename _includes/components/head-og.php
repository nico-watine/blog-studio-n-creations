<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" class="no-js" lang="en-US">
<head>
	<meta charset="utf-8">
	{{ site.start_comment }}<link rel="preconnect" href="http://cdn.studioncreations.com">{{ site.end_comment }}
	<title>{{ page.page-title }} | Studio N Creations Blog</title>
	<meta name="description" content="{{ page.page-description }}" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="canonical" href="http://blog.studioncreations.com/{{ page.og-url }}" />
	<link rel="author" href="/humans.txt">

	<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="apple-mobile-web-app-title" content="Studio N Creations">
	<meta name="application-name" content="Studio N Creations">
	<meta name="msapplication-TileColor" content="#55c4c0">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="{{ page.og-type }}" />
	<meta property="og:url" content="http://blog.studioncreations.com/{{ page.og-url }}" />
	<meta property="og:title" content="{{ page.og-title }}" />
	<meta property="og:image" content="{{ site.blog_cdn }}{{ page.og-image }}" />
	<meta property="og:description" content="{{ page.og-description }}" />
	<meta property="og:site_name" content="Studio N Creations Blog" />
	<meta property="fb:app_id" content="985598931535022">
	
	<link rel="stylesheet" href="{{ site.base_cdn }}<?php autoVer('/css/core.css'); ?>" />
	<link rel="stylesheet" href="{{ site.blog_cdn }}<?php autoVer('/css/blog.css'); ?>" />
</head>