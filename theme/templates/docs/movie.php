<div class="scene docs">

	<h1>Movie</h1>
	
	<p>Below shows a possible cenario of a movie</p>

<code>&lt;div itemscope itemtype=&quot;http://schema.org/Movie&quot;&gt;

	&lt;div&gt;
		&lt;h1 itemprop=&quot;name&quot;&gt;Name of related Product&lt;/h1&gt;
		&lt;img itemprop=&quot;image&quot; src=&quot;#&quot; alt=&quot;#&quot;&gt;
		
		&lt;ul&gt;
			&lt;li itemprop=&quot;trailer&quot;&gt;&lt;a href=&quot;#&quot;&gt;link to trailer&lt;/a&gt;&lt;/li&gt;
			&lt;li itemprop=&quot;datePublished&quot; content=&quot;2015-07-27&quot;&gt;2015-07-27&lt;/li&gt;
		&lt;/ul&gt;

		&lt;dl itemprop=&quot;offers&quot; itemscope itemtype=&quot;http://schema.org/Offer&quot;&gt;
			&lt;dt class=&quot;price&quot;&gt;Price&lt;/dt&gt;
			&lt;dd class=&quot;price&quot; itemprop=&quot;price&quot;&gt;55&lt;/dd&gt;
			&lt;dt class=&quot;currency&quot;&gt;Currency&lt;/dt&gt;
			&lt;dd class=&quot;currency&quot; itemprop=&quot;priceCurrency&quot;&gt;DKK&lt;/dd&gt;
		&lt;/dl&gt;
		
		&lt;ul&gt;
			&lt;li itemprop=&quot;actor&quot; itemscope itemtype=&quot;http://schema.org/Person&quot;&gt;Actor 1 in the movie&lt;/li&gt;
			&lt;li itemprop=&quot;director&quot; itemscope itemtype=&quot;http://schema.org/Person&quot;&gt;Diroctor in the movie&lt;/li&gt;
			&lt;li itemprop=&quot;musicBy&quot; itemscope itemtype=&quot;http://schema.org/Person&quot;&gt;Guy who made the sound&lt;/li&gt;
			&lt;li itemprop=&quot;producer&quot; itemscope itemtype=&quot;http://schema.org/Person&quot;&gt;Guy who produced to movie&lt;/li&gt;
			&lt;li itemprop=&quot;productionCompany&quot; itemscope itemtype=&quot;http://schema.org/Organization&quot;&gt;Production Company&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;
	
	&lt;div itemprop=&quot;review&quot; itemscope itemtype=&quot;http://schema.org/Review&quot;&gt;
		
		&lt;h2 itemprop=&quot;name&quot;&gt;Titel of the review&lt;/h2&gt;

		&lt;dl&gt;
			&lt;dt class=&quot;date_published&quot;&gt;Date published&lt;/dt&gt;
			&lt;dd class=&quot;date_published&quot; itemprop=&quot;datePublished&quot; content=&quot;2015-07-27&quot;&gt;2015-07-27&lt;/dd&gt;
			&lt;dt class=&quot;author&quot;&gt;Author&lt;/dt&gt;
			&lt;dd class=&quot;author&quot;itemprop=&quot;author&quot;&gt;Author of artical&lt;/dd&gt;
		&lt;/dl&gt;

		&lt;ul itemprop=&quot;reviewRating&quot; itemscope itemtype=&quot;http://schema.org/Rating&quot;&gt;
			&lt;link itemprop=&quot;worstRating&quot; content = &quot;1&quot;&gt;&lt;/link&gt;
			&lt;li&gt;&lt;span itemprop=&quot;ratingValue&quot;&gt;3&lt;/span&gt;&lt;span&gt;/&lt;/span&gt;&lt;span itemprop=&quot;bestRating&quot;&gt;5&lt;/span&gt;&lt;span&gt; stars&lt;/span&gt;&lt;/li&gt;
		&lt;/ul&gt;
		
		&lt;div class=&quot;description&quot; itemprop=&quot;description&quot;&gt;
			&lt;p&gt;Description&lt;/p&gt;
		&lt;/div&gt;

	&lt;/div&gt;

&lt;/div&gt;</code>

<h2>This section includes parts from:</h2>
<ul>
	<li><a href="/documentation/price">Price</a></li>
	<li><a href="/documentation/review">Review</a></li>
</ul>

</div>