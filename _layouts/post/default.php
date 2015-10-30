{% include components/head.php %}

<body>
{% include blocks/top-bar.html %}


<section class="post-hero">
	<div class="outer-container">
		<div class="row">
			<div id="calendar-nav">
				<time datetime="{{ page.datetime }}"><span id="day">{{ page.day }}</span><span id="month">{{ page.month }}</span></time>
				<nav id="post-navigation">
			    {% if page.previous.url %} 
			        <a class="header" id="previous" href="{{page.previous.url}}" title="Previous Post: {{page.previous.title}}">&laquo; Previous</a> <span id="divider">-</span>
			    {% endif %}
			    {% if page.next.url %} 
			            <a class="header" id="next" href="{{page.next.url}}" title="next Post: {{page.next.title}}">Next &raquo; </a> 
			    {% endif %}
			    </nav>
		   </div>
		   <div id="post-titles">
				<h1>{{ page.intro-text-h1 }}</h1>
				<h2>{{ page.intro-text-h2 }}</h2>
			</div>
		</div>
		<div class="row" id="post-taxonomy">
			<h5><a href="/{{ page.category }}/">{{ page.category }}</a> | <a href="/tags/{{ page.tags }}">{{ page.tags }}</a></h5>
		</div>
	</div>
</section>
<main class="article-body outer-container">
		{{ content }}
</main>

{% include blocks/footer.html %}

{% include blocks/nav.html %}

{% include components/scripts/scripts.php %}
 

</body>
</html>

