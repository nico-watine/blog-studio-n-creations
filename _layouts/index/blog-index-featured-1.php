{% include components/head-og.php %}

<body class="blog-index">
{% include blocks/top-bar.html %}
{% include blocks/nav.html %}

<!-- <section class="featured-container">
	<div class="row">
		<div class="featured-slide" id="web-design">
			<a href="/web-design/">
				<img src="{{ site.blog_cdn }}/img/post-attachments/web-design/featured-banner.jpg" alt="">
				<h2>Web Design</h2>
			</a>
		</div>
		<div class="featured-slide" id="print-work">
			<a href="/print-work/">
				<img src="{{ site.blog_cdn }}/img/post-attachments/print-work/featured-slider.jpg" alt="">
				<h2>Print Work</h2>
			</a>
		</div>
	</div>
</section> -->

<main class="outer-container">
	<section class="blog-roll">
		{% for post in site.posts %}
			{% include blocks/article/article-post-summary.html %}
		{% endfor %}
	</section>
	<aside>
		{% include blocks/side-bar/page-title.html %}
		{% include blocks/side-bar/category-nav.html %}
	</aside>
</main>

{% include blocks/footer.html %}
{% include components/scripts/scripts.php %}
</body>
</html>