<div class="scene">

	<h1>Product</h1>
	<p>Here is a quick preview of WTF-markup for a simple product - <a href="/documentation/product">see explanation here</a>.</p>
	
	<p>You can customise your itemprop="availability" with the following properties “Discontinued, LimitedAvailability, InStoreOnly, OnlineOnly, OutOfStock, PreOrder, SoldOut" so far we have to use a &lt;link&gt; tag to unambiguously specify the availability as one of the permitted values.</p>
	
	<p>releaseDate need to be specified in a content tag and in ISO 8601 date format</p>

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
	
	&lt;!-- Items that are related to the one above --&gt;
	&lt;div itemprop=&quot;isRelatedTo&quot; itemscope itemtype=&quot;http://schema.org/Offer&quot;&gt;
		&lt;h2 itemprop=&quot;name&quot;&gt;Name of related Product&lt;/h2&gt;
		&lt;img itemprop=&quot;image&quot; src=&quot;#&quot; alt=&quot;#&quot;&gt;
		&lt;ul&gt;
			&lt;li itemprop=&quot;description&quot;&gt;Description&lt;/li&gt;
			&lt;!-- Price need to be specified in two tags  --&gt;
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

&lt;/div&gt;</code>

</div>