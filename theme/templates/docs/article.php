<div class="scene docs i:scene">

	<h1>Article</h1>
	<p>Layout for a generic article (not a news article or blog post) – <a href="https://schema.org/Article">schema.org/Article</a>.</p>
	<p class="note">Please note: Dates need to be specified in a content tag and in ISO 8601 date format</p>


	<code><?= htmlentities(file_get_contents(SITE_URL."/templator/content/Article.html")) ?></code>


	<h2>Related types:</h2>
	<ul class="links">
		<li><a href="/docs/newsarticle">NewsArticle</a></li>
		<li><a href="/docs/blogposting">BlogPosting</a></li>
		<li><a href="/docs/comment">Comment</a></li>
		<li><a href="/docs/place">Place</a></li>
		<li><a href="/docs/geocoordinates">GeoCoordinates</a></li>
	</ul>
</div>
