<div class="scene">

	<h1>Organization</h1>
	<p>Opening hours need to be specified in a datetim tag (Mo,We for specific days or Mo-We for including days)</p>
	

<code>&lt;div itemscope itemtype=&quot;http://schema.org/Organization&quot;&gt;
	
	&lt;div&gt;
		&lt;h1 itemprop=&quot;name&quot;&gt;&lt;p&gt;Granberg Restaurant&lt;/p&gt;&lt;/h1&gt;
		&lt;p itemprop=&quot;description&quot;&gt;we are a small restaurant in the center of Copenhagen where we serve selected french cuisine.&lt;/p&gt;
	&lt;/div&gt;

	&lt;div itemscope itemtype=&quot;http://schema.org/PostalAddress&quot;&gt;
		&lt;h2&gt;Address:&lt;/h2&gt;
		&lt;ul&gt;
			&lt;li itemprop=&quot;streetAddress&quot;&gt;Ny Adelgade 3&lt;/li&gt;
			&lt;li&gt;&lt;span itemprop=&quot;postalCode&quot;&gt;1264&lt;/span&gt;&lt;span itemprop=&quot;addressLocality&quot;&gt; Kbh. K&lt;/span&gt;&lt;/li&gt;
			&lt;li itemprop=&quot;addressLocality&quot;&gt;Copenhagen&lt;/li&gt;
			&lt;li itemprop=&quot;telephone&quot;&gt;(+45) 12 12 12 12&lt;/li&gt;
			&lt;li itemprop=&quot;email&quot;&gt;&lt;a href=&quot;mailto:#&quot;&gt;hallo@granberg.dk&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;


	&lt;div&gt;
		&lt;h2&gt;Opening hours:&lt;/h2&gt;
		&lt;ul&gt;
			&lt;li itemprop=&quot;openingHours&quot; datetime=&quot;Tu-Fr 10:00-22:00&quot;&gt;Monday - Friday 10 - 22&lt;/li&gt;
			&lt;li itemprop=&quot;openingHours&quot; datetime=&quot;Sa,So 11:00-02:00&quot;&gt;Weekend 11 - 02&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;

	&lt;div&gt;
		&lt;h2&gt;Where we are:&lt;/h2&gt;
		&lt;dl itemscope itemtype=&quot;http://schema.org/GeoCoordinates&quot;&gt;
			&lt;dt&gt;latitude&lt;/dt&gt;
			&lt;dd itemprop=&quot;latitude&quot;&gt;55.681159&lt;/dd&gt;
			&lt;dt&gt;longitude&lt;/dt&gt;
			&lt;dd itemprop=&quot;longitude&quot;&gt;12.58437&lt;/dd&gt;
		&lt;/dl&gt;
	&lt;/div&gt;

	&lt;div&gt;
		&lt;h2&gt;Get in touch:&lt;/h2&gt;
		&lt;ul itemscope itemtype=&quot;http://schema.org/ContactPoint&quot;&gt;
			&lt;li itemprop=&quot;name&quot;&gt;Muster Name&lt;/li&gt;
			&lt;li itemprop=&quot;contactType&quot;&gt;Owner&lt;/li&gt;
			&lt;li itemprop=&quot;telephone&quot;&gt;(+45) 12 12 12 12&lt;/li&gt;
			&lt;li itemprop=&quot;email&quot;&gt;&lt;a href=&quot;mailto:#&quot;&gt;hallo@granberg.dk&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;

&lt;/div&gt;</code>

</div>