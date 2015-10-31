{% include components/head.php %}

<body>
{% include blocks/top-bar.html %}

<main class="outer-container">
	<section class="blog-roll">
		{% for post in site.tags.jardin-de-france %}
			<article class="post-link">
				<header class="row" id="post-details">
					<div class="post-date"> 
						<h3 id="day">{{ post.day }}</h3>
						<h3 id="month">{{ post.month }}</h3>
					</div>
					<div class="post-head">
						<a href="/{{ post.category-link }}/{{ post.slug }}" class="index-page-post-link">
							<h2 class="link-title">{{ post.title }}</h2>
						</a>	
						<h4 class="link-subtitle">{{ post.excerpt }}</h4>
					</div>
				</header>
				<div class="row" id="img-row">
					<a href="/{{ post.category-link }}/{{ post.slug }}"> 
						<img src="{{ post.link-image }}" alt="">
					</a>
				</div>
				<div class="row" id="post-taxonomy">
					<h6>Filed Under: <a href="/{{ post.category }}/">{{ post.category }}</a></h6>
					<h6>Tags: <a href="/tags/{{ post.tags }}">{{ post.tags }}</a></h6>
				</div>
			</article>
		{% endfor %}
	</section>
	<aside class="sidebar">
		{% include blocks/side-bar/tag-title.html %}
		{% include blocks/side-bar/category-widget.html %}
	</aside>
</main>

{% include blocks/footer.html %}

{% include blocks/nav.html %}

{% include components/scripts/scripts.php %}
 

</body>
</html>