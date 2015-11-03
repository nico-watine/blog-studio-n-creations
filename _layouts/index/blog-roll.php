{% include components/head.php %}

<body>
{% include blocks/top-bar.html %}

<section class="featured-container">
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
</section>

<main class="outer-container">
	<section class="blog-roll">
		{% for post in site.posts %}
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
						<img src="{{ site.blog_cdn }}{{ post.link-image }}" alt="">
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
		{% include blocks/side-bar/category-widget.html %}
	</aside>
</main>

{% include blocks/footer.html %}

{% include blocks/nav.html %}

{% include components/scripts/scripts.php %}
 

</body>
</html>