{% include components/head-og.php %}

<body class="blog-index">
{% include blocks/top-bar.html %}
{% include blocks/nav.html %}

<main class="outer-container">
	<section class="blog-roll">
		{% for post in site.tags.apps %}
			{% include blocks/article/article-post-summary.html %}
		{% endfor %}
	</section>
	<aside class="sidebar">
		{% include blocks/side-bar/page-title.html %}
		{% include blocks/side-bar/category-nav.html %}
	</aside>
</main>

{% include blocks/footer.html %}
{% include components/scripts/scripts.php %}
{% include components/scripts/google-tracking.php %}
</body>
</html>