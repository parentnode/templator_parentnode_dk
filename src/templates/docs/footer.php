<div class="scene docs">
	<h1>Footer</h1>
	<p>
		The <span class="htmltag">div#footer</span> node should contain elements which are of secondary nature. Relevant on
		all pages but not important enough to keep in the top of the page from an accessibility point of view. Any navigational 
		elements should be kept in a <span class="htmltag">ul.servicenavigation</span>. More content elements such as 
		copyright or contact information can be added to the <span class="htmltag">div#footer</span> as needed.
	</p>

<code>&lt;div id=&quot;footer&quot;&gt;
	&lt;ul class=&quot;servicenavigation&quot;&gt;
		&lt;li class=&quot;terms&quot;&gt;&lt;a href=&quot;/terms&quot;&gt;Terms&lt;/a&gt;&lt;/li&gt;
		&lt;li class=&quot;press&quot;&gt;&lt;a href=&quot;/press&quot;&gt;Press&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
	&lt;div class=&quot;copyright&quot;&gt;&lt;p&gt;Copyright 2014, parentNode&lt;/p&gt;&lt;/div&gt;
&lt;/div&gt;</code>

	<p>
		It is a common practice to move <span class="htmltag">ul.servicenavigation</span> nodes into the 
		<span class="htmltag">div#header ul.servicenavigation</span> using JavaScript if this is required from 
		a visual point of view.
	</p>

	<div class="list">
		<h3>More markup</h3>
		<ul>
			<li><a href="/docs#general_page_layout">General page layout</a></li>
			<li><a href="/docs#content_blocks">Content blocks</a></li>
		</ul>
	</div>

</div>
