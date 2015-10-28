{% include components/head.php %}

<body>
{% include blocks/top-bar.html %}


<div class="post-intro">
	<div class="outer-container">
		<div class="row">
			<div id="calendar-nav">
				<time datetime="{{ page.datetime }}"><span id="day">{{ page.day }}</span><span id="month">{{ page.month }}</span></time>
				<nav id="post-navigation">
			    {% if page.previous.url %} 
			        <a class="header" href="{{page.previous.url}}" title="Previous Post: {{page.previous.title}}">&laquo; Previous</a> <span id="divider">-</span>
			    {% endif %}
			    {% if page.next.url %} 
			            <a class="header" href="{{page.next.url}}" title="next Post: {{page.next.title}}">Next &raquo; </a> 
			    {% endif %}
			    </nav>
		   </div>
		   <div id="post-titles">
				<h1>{{ page.intro-text-h1 }}</h1>
				<h2>{{ page.intro-text-h2 }}</h2>
			</div>
		</div>
		<div class="row" id="post-taxonomy">
			<h5><a href="/{{ page.category }}/">{{ page.category }}</a> | <a href="/tags/{{ page.tags }}.html">{{ page.tags }}</a></h5>
		</div>
	</div>
</div>
<main class="main-post outer-container">
	<div class="post-content">
		{{ content }}
	</div>
</main>

{% include blocks/footer.html %}

{% include blocks/nav.html %}

{% include components/scripts/scripts.php %}
 

</body>
</html>

