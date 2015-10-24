{% include components/head.php %}

<body>
{% include blocks/top-bar.html %}

<div class="outer-container">
	<div class="row page-title">
		<h1>Post Categories</h1>
	</div>
	<main class="post-categories">
	{% for category in site.categories %} 
		<div class="category" id="{{ category[0] }}">
			<!-- <img src="http://placehold.it/245x175" alt="Category Icon"> -->
			<h3><a href="/category/{{ category[0] }}">{{ category[0] }}</a></h3>
		</div>
	{% endfor %}
	</main>
</div>

{% include blocks/footer.html %}

{% include blocks/nav.html %}

{% include components/scripts/scripts.php %}
 

</body>
</html>
