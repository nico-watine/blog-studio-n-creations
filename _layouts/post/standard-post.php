---
body-class: standard-post
---

{% include components/head-og.php %}
{% include components/body-tag.html %}
{% include blocks/nav/standard-nav.html %}

<main class="outer-container">
	<article itemscope itemtype="http://schema.org/BlogPosting">
		<header>
			<h4 itemprop="genre"><a class="simple" href="/{{ page.article-category-link }}/">{{ page.article-category }}</a></h4>
			<h1 itemprop="headline">{{ page.article-title }}</h1>
			<h2 itemprop="description" class="subtitle">{{ page.article-subtitle }}</h2>
			<time datetime="{{ page.article-datetime }}T08:00:00-06:00">{{ page.article-time }}</time>
			<meta itemprop="datePublished" content="{{ page.article-datetime }}T08:00:00-06:00"/>
		</header>
		<section itemprop="articleBody" id="article-body">
			<img itemprop="image" class="article-hero" src="{{ site.blog_cdn }}{{ page.article-hero-img }}" srcset="{{ site.blog_cdn }}{{ page.article-hero-img-retina }} 2x" alt="{{ page.article-hero-alt }}">
			{{ content }}
			<h4 id="contact-c2a">If you are interested in having an original website created, <a href="http://studioncreations.com/contact" class="underlined">contact the <span class="inline">Studio N Creations</span> team</a> and get started today.</h4>
		</section>
		<footer id="article-footer">
			<hr>
			<h5 id="post-tags">Tags | <a class="simple" href="/tags/{{ page.article-tag-link }}"><span itemprop="keywords">{{ page.article-tag }}</span></a></h5>
			{% include blocks/article/static-share-buttons.html %}
		</footer>
	</article>
	<aside>
		<div class="aside-content">
			<div class="page-title">
				<div class="row">
					<h5>PAGE</h5>
					<h1>Article</h1>
				</div>
			</div>
			{% include blocks/side-bar/blog-menu.html %}
		</div>
	</aside>
</main>


{% include blocks/footer.html %}
{% include components/scripts/scripts.php %}
{% include components/scripts/article-scripts.php %}
{% include components/scripts/google-tracking.php %}
</body>
</html>