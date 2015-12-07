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
			<article class="post-summary">
				<header id="post-titles">
					<time datetime="{{ post.article-datetime }}T08:00:00-06:00">{{ post.article-time }}</time>
					<meta itemprop="datePublished" content="{{ post.article-datetime }}T08:00:00-06:00"/>
					<h1 itemprop="headline">{{ post.article-title }}</h1>
					<h2 itemprop="description" class="subtitle">{{ post.article-subtitle }}</h2>
				</header>
				<section id="hero-image">
					<a href="/{{ post.category-link }}/{{ post.slug }}"> 
						<img src="{{ site.blog_cdn }}{{ post.link-image }}" alt="">
					</a>
				</section>
				<footer id="post-taxonomy">
					<h4 id="category">Category | <a href="/{{ post.article-category-link }}/"><span itemprop="genre">{{ post.article-category }}</span></a></h4>
					<h4 id="tags">Tags | <a href="/tags/{{ post.article-tag-link }}"><span itemprop="keywords">{{ post.article-tag }}</span></a></h4>
				</footer>
			</article>
		{% endfor %}
	</section>
	<aside>
		{% include blocks/side-bar/category-nav.html %}
	</aside>
</main>

{% include blocks/footer.html %}
{% include components/scripts/scripts.php %}
</body>
</html>