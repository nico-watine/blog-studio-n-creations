{% include components/head-og.php %}

<body class="blog-index">
{% include blocks/top-bar.html %}
{% include blocks/nav.html %}

<main class="outer-container">
	<section itemscope itemtype="http://schema.org/Blog" class="blog-roll">
		{% for post in site.posts %}
			{% include blocks/article/article-post-summary.html %}
		{% endfor %}
	</section>
	<aside>
		{% include blocks/side-bar/page-title.html %}
		{% include blocks/side-bar/category-nav.html %}
		<!-- {% include blocks/side-bar/snc-c2a.html %} -->
	</aside>
</main>

{% include blocks/footer.html %}
{% include components/scripts/scripts.php %}
</body>
</html>