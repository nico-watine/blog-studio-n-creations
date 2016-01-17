---
body-class: blog-index
---

{% include components/head-og.php %}
{% include components/body-tag.html %}
{% include blocks/nav/standard-nav.html %}

<main class="outer-container">
	<section itemscope itemtype="http://schema.org/Blog" class="blog-roll">
		{% for post in site.posts %}
			{% include blocks/article/article-post-summary.html %}
		{% endfor %}
	</section>
	<aside>
		<!-- {% include blocks/side-bar/page-title.html %} -->
		<div class="aside-content">
			<!-- <div class="padding-container"> -->
			{% include blocks/side-bar/page-title-smaller.html %}
			{% include blocks/side-bar/blog-menu.html %}
			<!-- </div> -->
		</div>
	</aside>
</main>

{% include blocks/footer.html %}
{% include components/scripts/scripts.php %}
{% include components/scripts/google-tracking.php %}
</body>
</html>