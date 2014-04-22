<div class="scene">

	<h1>Event</h1>
	
	<p>releaseDate need to be specified in a content tag and in ISO 8601 date format</p>
	<p>website need to external</p>

<code>&lt;div itemscope itemtype=&quot;http://schema.org/Event&quot;&gt;
	
	&lt;div&gt;
		&lt;h1 itemprop=&quot;name&quot;&gt;Name of the Event&lt;/h1&gt;
		&lt;img itemprop=&quot;image&quot; src=&quot;#&quot; alt=&quot;#&quot;&gt;
		&lt;ul&gt;
			&lt;li itemprop=&quot;description&quot;&gt;Description&lt;/li&gt;
			&lt;li itemprop=&quot;eventStatus&quot;&gt;No changes&lt;/li&gt;
			&lt;li temprop=&quot;startDate&quot; content=&quot;2015-07-27T15:30&quot;&gt;2014-04-02 at 18:00&lt;/li&gt;
			&lt;li itemprop=&quot;url&quot;&gt;&lt;a href=&quot;#&quot;&gt;website of the event&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;

		&lt;ul itemprop=&quot;location&quot; itemscope itemtype=&quot;http://schema.org/PostalAddress&quot;&gt;
			&lt;li itemprop=&quot;streetAddress&quot;&gt;Ny Adelgade 3&lt;/li&gt;
			&lt;li&gt;&lt;span itemprop=&quot;postalCode&quot;&gt;1264&lt;/span&gt;&lt;span itemprop=&quot;addressLocality&quot;&gt; Kbh. K&lt;/span&gt;&lt;/li&gt;
			&lt;li itemprop=&quot;addressLocality&quot;&gt;Copenhagen&lt;/li&gt;
			&lt;li itemprop=&quot;telephone&quot;&gt;(+45) 12 12 12 12&lt;/li&gt;
			&lt;li itemprop=&quot;email&quot;&gt;hallo@granberg.dk&lt;/li&gt;
		&lt;/ul&gt;

		&lt;ul&gt;
			&lt;li itemprop=&quot;performers&quot; itemscope itemtype=&quot;http://schema.org/Person&quot;&gt;Performers name 1&lt;/li&gt;
			&lt;li itemprop=&quot;performers&quot; itemscope itemtype=&quot;http://schema.org/Person&quot;&gt;Performers name 2&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;

	&lt;div itemprop=&quot;offers&quot; itemscope itemtype=&quot;http://schema.org/Offer&quot;&gt;
		&lt;p&gt;&lt;span itemprop=&quot;price&quot;&gt;55&lt;/span&gt;&lt;span itemprop=&quot;priceCurrency&quot;&gt; DKK&lt;/span&gt;&lt;/p&gt;
	&lt;/div&gt;

&lt;/div&gt;</code>

</div>