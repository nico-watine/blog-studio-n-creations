---
body-class: blog-index
---

{% include components/head-og.php %}
{% include components/body-tag.html %}
<header>
	<div class="row" id="nav-bar">
		<!-- <a href="/" class="title" id="index-link"><span id="large">Studio N Creations</span><span id="mini">SNC</span></a> -->
		<a href="/" class="title" id="index-link"><span id="large">Blog.Studio N Creations</span><span id="mini">BLOG.SNC</span></a>
		<nav class="nav-collapse">
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="/what-we-do/">Services</a></li>
				<li><a href="/portfolio/">Portfolio</a></li>
				<li class="active"><a href="/about-us">About Us</a></li>
				<li><a href="http://blog.studioncreations.com">Blog</a></li>
				<li><a href="/contact/">Contact</a></li>
			</ul>
		</nav>
	</div>
</header>

<main class="outer-container">
	<section itemscope itemtype="http://schema.org/Blog" class="blog-roll">
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

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/vendor/jquery/1-11-3/jquery-min.js"><\/script>')</script>
<script src="/js/src/nav/responsive-nav.js"></script>
<script src="/js/src/nav/fastclick.js"></script>
<script src="/js/src/nav/scroll.js"></script>
<script src="/js/src/nav/fixed-responsive-nav.js"></script> -->

{% include components/scripts/google-tracking.php %}
</body>
</html>