---
body-class: blog-index
---

{% include components/head-og.php %}
{% include components/body-tag.html %}
{% include blocks/nav/standard-nav.html %}

<main class="outer-container">
	<section class="blog-roll">
		{% for post in site.tags.apps %}
			{% include blocks/article/article-post-summary.html %}
		{% endfor %}
	</section>
	<aside>
		<div class="aside-content">
			{% include blocks/side-bar/page-title-smaller.html %}
			{% include blocks/side-bar/blog-menu.html %}
		</div>
	</aside>
</main>

{% include blocks/footer.html %}
{% include components/scripts/scripts.php %}
{% include components/scripts/google-tracking.php %}
</body>
</html>