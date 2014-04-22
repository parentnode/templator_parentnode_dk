<div class="scene">

	<h1>Review</h1>
	
<code>&lt;div itemprop=&quot;review&quot; itemscope itemtype=&quot;http://schema.org/Review&quot;&gt;
		
		&lt;h2 itemprop=&quot;name&quot;&gt;Titel of the review&lt;/h2&gt;

		&lt;ul&gt;
			&lt;li itemprop=&quot;author&quot;&gt;Name of the revewer&lt;/li&gt;
			&lt;li itemprop=&quot;datePublished&quot; content=&quot;2011-04-01&quot;&gt;2011-04-01&lt;/li&gt;
		&lt;/ul&gt;

		&lt;ul itemprop=&quot;reviewRating&quot; itemscope itemtype=&quot;http://schema.org/Rating&quot;&gt;
			&lt;!-- WorstRating need to be defined befor the rating --&gt;
			&lt;link itemprop=&quot;worstRating&quot; content = &quot;1&quot;&gt;&lt;/link&gt;
			&lt;!-- Value could also be defined in content --&gt;
			&lt;li&gt;&lt;span itemprop=&quot;ratingValue&quot;&gt;3&lt;/span&gt;&lt;span&gt;/&lt;/span&gt;&lt;span itemprop=&quot;bestRating&quot;&gt;5&lt;/span&gt;&lt;span&gt; stars&lt;/span&gt;&lt;/li&gt;
		&lt;/ul&gt;
		
		&lt;div itemprop=&quot;description&quot;&gt;
			&lt;p&gt;description&lt;/p&gt;
		&lt;/div&gt;

	&lt;/div&gt;</code>

</div>