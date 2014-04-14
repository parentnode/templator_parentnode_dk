<h2>Preview</h2>
	<p>Here is a quick preview of WTF-markup for a simple product - <a href="/documentation/product">see explanation here</a>.</p>
	
<code>&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
	&lt;title&gt;WTF - Markup Documentation&lt;/title&gt;
	&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=UTF-8&quot; /&gt;
	&lt;meta name=&quot;keywords&quot; content=&quot;HTML, JavaScript, CSS, framework, SEO&quot; /&gt;
	&lt;meta name=&quot;description&quot; content=&quot;Details do matter&quot; /&gt;
&lt;/head&gt;

&lt;body&gt;

&lt;div id=&quot;page&quot;&gt;

	&lt;div id=&quot;header&quot;&gt;&lt;/div&gt;

	&lt;div id=&quot;content&quot;&gt;
		&lt;div class=&quot;scene&quot;&gt;

			&lt;div class=&quot;product&quot; itemscope itemtype=&quot;http://schema.org/Product&quot;&gt;
				&lt;h1 itemprop=&quot;name&quot;&gt;Excepteur sint occaecat&lt;/h1&gt;
				&lt;div class=&quot;description&quot; itemprop=&quot;description&quot;&gt;
					&lt;p&gt;
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
						tempor incididunt ut labore et dolore magna aliqua.
					&lt;/p&gt;
				&lt;/div&gt;

				&lt;div class=&quot;offer&quot; itemprop=&quot;offers&quot; itemscope itemtype=&quot;http://schema.org/Offer&quot;&gt;
					&lt;dl&gt;
						&lt;dt class=&quot;price&quot;&gt;Price&lt;/dt&gt;
						&lt;dd class=&quot;price&quot; itemprop=&quot;price&quot;&gt;299&lt;/dd&gt;
					&lt;/dl&gt;

					&lt;form action=&quot;/cart&quot; class=&quot;buy&quot; method=&quot;post&quot;&gt;
						&lt;input type=&quot;hidden&quot; name=&quot;product&quot; value=&quot;1&quot; /&gt;
						&lt;ul class=&quot;actions&quot;&gt;
							&lt;li class=&quot;buy&quot;&gt;&lt;input class=&quot;button primary&quot; name=&quot;buy&quot; type=&quot;submit&quot; value=&quot;Add to cart&quot; /&gt;&lt;/li&gt;
						&lt;/ul&gt;
					&lt;/form&gt;
				&lt;/div&gt;

				&lt;div class=&quot;images&quot;&gt;
					&lt;ul&gt;
						&lt;li&gt;&lt;a href=&quot;/images/excepteur_sint_occaecat_1/250x.png&quot;&gt;Excepteur sint occaecat, Left&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;/images/excepteur_sint_occaecat_2/250x.png&quot;&gt;Excepteur sint occaecat, Front&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;/images/excepteur_sint_occaecat_3/250x.png&quot;&gt;Excepteur sint occaecat, Right&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;/images/excepteur_sint_occaecat_4/250x.png&quot;&gt;Excepteur sint occaecat, Back&lt;/a&gt;&lt;/li&gt;
					&lt;/ul&gt;
				&lt;/div&gt;
			&lt;/div&gt;
	 
		&lt;/div&gt;
	&lt;/div&gt;

	&lt;div id=&quot;navigation&quot;&gt;&lt;/div&gt;

	&lt;div id=&quot;footer&quot;&gt;&lt;/div&gt;

&lt;/div&gt;

&lt;/body&gt;
&lt;/html&gt;</code>