<div class="scene docs i:scene">
	<h1>Content</h1>
	<p>
		Templator distinguishes between shell elements and content elements. Shell elements being <span class="htmltag">div#header</span>, 
		<span class="htmltag">div#footer</span> and <span class="htmltag">div#navigation</span> - in other words elements
		which remain more or less static from one page to the next, as opposed to the content which changes. 
	</p>

	<code>&lt;div id=&quot;content&quot;&gt;
	&lt;div class=&quot;scene&quot;&gt;

		<a href="/docs#content_blocks">Content blocks</a></li>

	&lt;/div&gt;
&lt;/div&gt;</code>

	<p>
		The <span class="htmltag">div#content</span> is the outermost content wrapper. With Templator the actual content
		resides inside a <span class="htmltag">div.scene</span>. Templator is designed to accommodate high end, visual experiences
		using <a href="https://developer.mozilla.org/en-US/docs/Web/Guide/AJAX" target="_blan">AJAX</a> for updating content. 
		While the <span class="htmltag">div#content</span> element is static, the
		<span class="htmltag">div.scene</span> is what one would animate and replace when navigating to a new page. In 
		most cases a page only has one scene. In the case of a multiple scene "one pager" website, the additional scenes would be
		AJAX loaded into whatever page the user accesses first. This page initialization should be controlled by a global JavaScript
		<a href="http://manipulator.parentnode.dk/pages/page-model" target="_blank">Page controller</a>.
	</p>

	<div class="list">
		<h3>More markup</h3>
		<ul>
			<li><a href="/docs#general_page_layout">General page layout</a></li>
			<li><a href="/docs#content_blocks">Content blocks</a></li>
		</ul>
	</div>

</div>
