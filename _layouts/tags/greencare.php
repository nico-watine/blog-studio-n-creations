{% include components/head-og.php %}

<body class="blog-index">
{% include blocks/top-bar.html %}
{% include blocks/nav.html %}

<main class="outer-container">
	<section class="blog-roll">
		{% for post in site.tags.greencare-interior-plants %}
			{% include blocks/article/article-post-summary.html %}
		{% endfor %}
	</section>
	<aside class="sidebar">
		<div id="greencare" class="tag-title">
			<div class="row">
				<h5>TAGGED</h5>
				<h1>{{ page.tag-label }}</h1>
			</div>
		</div>
		{% include blocks/side-bar/category-nav.html %}
	</aside>
</main>

{% include blocks/footer.html %}
{% include components/scripts/scripts.php %}
</body>
</html>  