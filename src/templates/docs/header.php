<div class="scene docs">
	<h1>Header</h1>
	<p>
		The <span class="htmltag">div#header</span> node should contain only elements you want to present to the user before
		the actual content. Typically the content is the reason the user navigated to this page, so only elements which might
		be needed to improve access to content should reside here.
	</p>

	<code>&lt;div id=&quot;header&quot;&gt;
	&lt;ul class=&quot;servicenavigation&quot;&gt;
		&lt;li class=&quot;keynav navigation&quot;&gt;&lt;a href=&quot;#navigation&quot; rel=&quot;nofollow&quot;&gt;To navigation&lt;/a&gt;&lt;/li&gt;
		&lt;li class=&quot;keynav search&quot;&gt;&lt;a href=&quot;/search&quot; rel=&quot;search&quot;&gt;Search&lt;/a&gt;&lt;/li&gt;
		&lt;li class=&quot;keynav language en&quot;&gt;&lt;a href=&quot;?language=en&quot;&gt;English&lt;/a&gt;&lt;/li&gt;
		&lt;li class=&quot;keynav language da&quot;&gt;&lt;a href=&quot;?language=da&quot;&gt;Dansk&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;</code>

	<p>
		The <span class="htmltag">ul.servicenavigation</span> is a generic element which can reside in both the 
		<span class="htmltag">div#header</span> and the <span class="htmltag">div#footer</span>. In this example 
		we decided to put an anchor to the <span class="htmltag">div#navigation</span>, a search link and the language selector in
		the <span class="htmltag">div#header</span>. The <span class="htmltag">div#navigation</span> anchor provides easy access to
		the Navigation on old mobile phones and can be used as a Navigation toggle button on newer devices.
		The exact layout may vary slightly from site to site but less important items should be put in the 
		<span class="htmltag">div#footer</span>. You can always move them to the <span class="htmltag">div#header</span> 
		using JavaScript if this is required from a visual point of view. Remember visual presentation and content relevance
		is not always aligned. Content relevance should be prioritized when writing the HTML.
	</p>
	<p>
		The <span class="value">keynav</span> class on the <span class="htmltag">ul.servicenavigation</span> elements is an optional
		indicator to a JavaScript <a href="http://manipulator.parentnode.dk/docs/u-objects" target="_blank">Page controller</a>
		of keyboard accessibily relevance for visually impaired users. It does not have any functionality built in.
	</p>

	<div class="list">
		<h3>More markup</h3>
		<ul>
			<li><a href="/docs#general_page_layout">General page layout</a></li>
			<li><a href="/docs#content_blocks">Content blocks</a></li>
		</ul>
	</div>

</div>
