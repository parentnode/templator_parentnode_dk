<div class="scene">

	<h1>Product</h1>
	
	<p>A product is anything that is made available for sale—for example, a pair of shoes, a concert ticket, or a car. Commodity services, like haircuts, can also be represented using this type.</p>

	<p>You can customise your itemprop="availability" with the following properties “Discontinued, LimitedAvailability, InStoreOnly, OnlineOnly, OutOfStock, PreOrder, SoldOut" so far we have to use a &lt;link&gt; tag to unambiguously specify the availability as one of the permitted values.</p>

<code>&lt;div itemscope itemtype=&quot;http://schema.org/Product&quot;&gt;
	
	&lt;div&gt;
		&lt;h1 itemprop=&quot;name&quot;&gt;Name of Product&lt;/h1&gt;
		&lt;img itemprop=&quot;image&quot; src=&quot;#&quot; alt=&quot;#&quot;&gt;
		&lt;ul&gt;
			&lt;li itemprop=&quot;brand&quot;&gt;Brand Name&lt;/li&gt;
			&lt;li itemprop=&quot;description&quot;&gt;Description&lt;/li&gt;
			&lt;li&gt;&lt;span itemprop=&quot;width&quot; content=&quot;20cm&quot;&gt;&lt;/span&gt;20cm&lt;span itemprop=&quot;height&quot; content=&quot;100cm&quot;&gt;&lt;/span&gt;100cm&lt;/li&gt;
			&lt;li itemprop=&quot;releaseDate&quot; content=&quot;2014-04-02&quot;&gt;2014-04-02&lt;/li&gt;
			&lt;li itemprop=&quot;color&quot;&gt;Color&lt;/li&gt;
		&lt;/ul&gt;
		&lt;ul itemscope itemtype=&quot;http://schema.org/Offer&quot;&gt;
			&lt;li&gt;&lt;span itemprop=&quot;price&quot;&gt;55&lt;/span&gt;&lt;span itemprop=&quot;priceCurrency&quot;&gt; DKK&lt;/span&gt;&lt;/li&gt;
			&lt;li&gt;
				&lt;link itemprop=&quot;availability&quot; href=&quot;http://schema.org/InStock&quot; /&gt;
			&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;
	
	&lt;div itemprop=&quot;isRelatedTo&quot; itemscope itemtype=&quot;http://schema.org/Offer&quot;&gt;
		&lt;h2 itemprop=&quot;name&quot;&gt;Name of related Product&lt;/h2&gt;
		&lt;img itemprop=&quot;image&quot; src=&quot;#&quot; alt=&quot;#&quot;&gt;
		&lt;ul&gt;
			&lt;li itemprop=&quot;description&quot;&gt;Description&lt;/li&gt;
			&lt;li&gt;&lt;span itemprop=&quot;price&quot;&gt;55&lt;/span&gt;&lt;span itemprop=&quot;priceCurrency&quot;&gt; DKK&lt;/span&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;

	&lt;div itemprop=&quot;isRelatedTo&quot; itemscope itemtype=&quot;http://schema.org/Offer&quot;&gt;
		&lt;h2 itemprop=&quot;name&quot;&gt;Name of related Product&lt;/h2&gt;
		&lt;img itemprop=&quot;image&quot; src=&quot;#&quot; alt=&quot;#&quot;&gt;
		&lt;ul&gt;
			&lt;li itemprop=&quot;description&quot;&gt;Description&lt;/li&gt;
			&lt;li&gt;&lt;span itemprop=&quot;price&quot;&gt;55&lt;/span&gt;&lt;span itemprop=&quot;priceCurrency&quot;&gt; DKK&lt;/span&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;

	&lt;div itemprop=&quot;review&quot; itemscope itemtype=&quot;http://schema.org/Review&quot;&gt;
		
		&lt;h2 itemprop=&quot;name&quot;&gt;Titel of the review&lt;/h2&gt;

		&lt;ul&gt;
			&lt;li itemprop=&quot;author&quot;&gt;Name of the revewer&lt;/li&gt;
			&lt;li itemprop=&quot;datePublished&quot; content=&quot;2011-04-01&quot;&gt;2011-04-01&lt;/li&gt;
		&lt;/ul&gt;

		&lt;ul itemprop=&quot;reviewRating&quot; itemscope itemtype=&quot;http://schema.org/Rating&quot;&gt;
			&lt;link itemprop=&quot;worstRating&quot; content = &quot;1&quot;&gt;&lt;/link&gt;
			&lt;li&gt;&lt;span itemprop=&quot;ratingValue&quot;&gt;3&lt;/span&gt;&lt;span&gt;/&lt;/span&gt;&lt;span itemprop=&quot;bestRating&quot;&gt;5&lt;/span&gt;&lt;span&gt; stars&lt;/span&gt;&lt;/li&gt;
		&lt;/ul&gt;
		
		&lt;div itemprop=&quot;description&quot;&gt;
			&lt;p&gt;description&lt;/p&gt;
		&lt;/div&gt;

	&lt;/div&gt;

&lt;/div&gt;</code>

<h2>This section includes parts from:</h2>
<ul>
	<li><a href="/documentation/price">Price</a></li>
	<li><a href="/documentation/review">Review</a></li>
</ul>

</div>