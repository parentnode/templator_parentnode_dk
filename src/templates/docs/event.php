<div class="scene docs">

	<h1>Event</h1>
	
	<p>An event happening at a certain time and location, such as a concert, lecture, or festival. Ticketing information may be added via the 'offers' property. Repeated events may be structured as separate Event objects.</p>

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
			&lt;li&gt;&lt;span itemprop=&quot;postalCode&quot;&gt;1264&lt;/span&gt; &lt;span itemprop=&quot;addressLocality&quot;&gt;Kbh. K&lt;/span&gt;&lt;/li&gt;
			&lt;li itemprop=&quot;addressRegion&quot;&gt;Copenhagen&lt;/li&gt; 
			&lt;li itemprop=&quot;addressCountry&quot;&gt;Denmark&lt;/li&gt; 	
			&lt;li itemprop=&quot;telephone&quot;&gt;(+45) 12 12 12 12&lt;/li&gt;
			&lt;li itemprop=&quot;email&quot;&gt;&lt;a href=&quot;mailto:#&quot;&gt;hallo@granberg.dk&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;

		&lt;dl itemscope itemtype=&quot;http://schema.org/GeoCoordinates&quot;&gt;
			&lt;dt class=&quot;latitude&quot;&gt;latitude&lt;/dt&gt;
			&lt;dd class=&quot;latitude&quot; itemprop=&quot;latitude&quot;&gt;55.681159&lt;/dd&gt;
			&lt;dt class=&quot;longitude&quot;&gt;longitude&lt;/dt&gt;
			&lt;dd class=&quot;longitude&quot; itemprop=&quot;longitude&quot;&gt;12.58437&lt;/dd&gt;
		&lt;/dl&gt;

		&lt;ul&gt;
			&lt;li itemprop=&quot;performers&quot; itemscope itemtype=&quot;http://schema.org/Person&quot;&gt;Performers name 1&lt;/li&gt;
			&lt;li itemprop=&quot;performers&quot; itemscope itemtype=&quot;http://schema.org/Person&quot;&gt;Performers name 2&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;

	&lt;div itemprop=&quot;offers&quot; itemscope itemtype=&quot;http://schema.org/Offer&quot;&gt;
	&lt;dl&gt;
		&lt;dt class=&quot;price&quot;&gt;Price&lt;/dt&gt;
		&lt;dd class=&quot;price&quot; itemprop=&quot;price&quot;&gt;55&lt;/dd&gt;
		&lt;dt class=&quot;currency&quot;&gt;Currency&lt;/dt&gt;
		&lt;dd class=&quot;currency&quot; itemprop=&quot;priceCurrency&quot;&gt;DKK&lt;/dd&gt;
	&lt;/dl&gt;
&lt;/div&gt;

&lt;/div&gt;</code>

<h2>See referances also in:</h2>
<ul>
	<li><a href="/documentation/address">Address</a></li>
	<li><a href="/documentation/geo_location">Geo location</a></li>
	<li><a href="/documentation/contact">Contact</a></li>
	<li><a href="/documentation/price">Price</a></li>
</ul>

</div>