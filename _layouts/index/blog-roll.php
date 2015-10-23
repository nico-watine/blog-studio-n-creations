{% include components/head.php %}

<body>
{% include blocks/top-bar.html %}

<div class="featured-container">
	<div class="row">
		<div class="featured-slide" id="web-design">
			<a href="/web-design" class="simple-underline">
				<img src="/img/post-attachments/web-design/featured-banner.jpg" alt="">
				<div class="category-label">
					<h2>Web Design</h2>
				</div>
			</a>
		</div>
		<div class="featured-slide" id="print-work">
			<a href="/print-work" class="simple-underline">
				<img src="/img/post-attachments/print-work/featured-slider.jpg" alt="">
				<div class="category-label">
					<h2>Print Work</h2>
				</div>
			</a>
		</div>
	</div>
</div>

<div class="outer-container">
	<main class="blog-roll">
		{% for post in site.posts %}
			<section class="post-link">
				<div class="row" id="post-details">
					<div class="post-date"> 
						<h3 id="day">{{ post.day }}</h3>
						<h3 id="month">{{ post.month }}</h3>
					</div>
					<div class="post-head">
						<a href="{{ post.category-link }}/{{ post.slug }}" class="index-page-post-link">
							<h2 class="link-title">{{ post.title }}</h2>
						</a>	
						<h4 class="link-subtitle">{{ post.excerpt }}</h4>
					</div>
				</div>
				<div class="row" id="img-row">
					<a href="{{ post.category-link }}/{{ post.slug }}"> 
						<img src="{{ post.link-image }}" alt="">
					</a>
				</div>
				<div class="row" id="post-taxonomy">
					<h6>Filed Under: <a href="/{{ post.category }}/">{{ post.category }}</a></h6>
					<h6>Tags: <a href="/tags/{{ post.tags }}">{{ post.tags }}</a></h6>
				</div>
			</section>
		{% endfor %}
	</main>
	<section class="sidebar">
		{% include blocks/side-bar/category-widget.html %}
	</section>
</div>

{% include blocks/nav.html %}

{% include components/scripts/scripts.php %}
 

</body>
</html>