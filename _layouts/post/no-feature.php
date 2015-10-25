{% include components/head.html %}

<body>
{% include blocks/top-bar.html %}


<div class="post-intro">
	<div class="outer-container">
		<div class="row">
			<h1>{{ page.intro-text-h1 }}</h1>
			<h2>{{ page.intro-text-h2 }}</h2>
			<div class="post-date-box"> 
				<h3 id="day">{{ page.day }}</h3>
				<h3 id="month">{{ page.month }}</h3>
			</div>
			<h5><a href="/{{ page.category }}/">{{ page.category }}</a> | <a href="/tags/{{ page.tags }}.html">{{ page.tags }}</a></h5>
			<h5>
		    {% if page.previous.url %} 
		        <a href="{{page.previous.url}}" title="Previous Post: {{page.previous.title}}">&laquo; Previous</a> -
		    {% endif %}
		    {% if page.next.url %} 
		            <a href="{{page.next.url}}" title="next Post: {{page.next.title}}">Next &raquo; </a> 
		    {% endif %}
		    </h5>
		</div>
	</div>
</div>
<main class="main-post centered">
	<div class="post-content">
		{{ content }}
	</div>
</main>

{% include blocks/footer.html %}

{% include blocks/nav.html %}

{% include components/scripts/scripts.html %}
 

</body>
</html>

