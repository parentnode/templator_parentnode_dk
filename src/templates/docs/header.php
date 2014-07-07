<div class="scene docs">
	<h1>Header</h1>
	<p>
		The <span class="htmltag">div#header</span> node should contain only elements you want to present to the user before
		the actual content. Typically the content is the reason the user navigated to this page, so only elements which might
		be needed to improve access to content should reside here.
	</p>
	<p>
		The <span class="htmltag">ul.servicenavigation</span> is a generic element which can reside in both the 
		<span class="htmltag">div#header</span> and the <span class="htmltag">div#footer</span>. In this example 
		we decided to put an anchor to the <span class="htmltag">div#navigation</span>, a search link and the language selector in
		the <span class="htmltag">div#header</span>. The <span class="htmltag">div#navigation</span> anchor provides a accessibility
		on old mobile phones and can be used as a toggle Navigation button on newer devices.
		The exact layout may vary slightly from site to site but less important items should be put in the <span class="htmltag">div#footer</span>. 
		You can always move them to the <span class="htmltag">div#header</span> using JavaScript if this is required from a visual point of view.
	</p>

<code>&lt;div id=&quot;header&quot;&gt;
	&lt;ul class=&quot;servicenavigation&quot;&gt;
		&lt;li class=&quot;keynav navigation&quot;&gt;&lt;a href=&quot;#navigation&quot; ref=&quot;nofollow&quot;&gt;To navigation&lt;/a&gt;&lt;/li&gt;
		&lt;li class=&quot;keynav search&quot;&gt;&lt;a href=&quot;/search&quot; ref=&quot;search&quot;&gt;Search&lt;/a&gt;&lt;/li&gt;
		&lt;li class=&quot;keynav language&quot;&gt;&lt;a href=&quot;/language&quot; ref=&quot;language&quot;&gt;Language&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;</code>

</div>
