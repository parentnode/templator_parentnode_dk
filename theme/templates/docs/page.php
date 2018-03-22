<div class="scene docs i:scene">
	<h1>The Templator Page</h1>
	<p>
		The outermost <span class="htmltag">div#page</span> is called the Page node. This node will typically 
		be extended with JavaScript to act as an overall page flow controller. It can be a simple controller handling
		one or two dynamic elements in the footer or header or and complicated controller taking care of AJAX based 
		navigation and content loading, updating navigation and so forth. The 
		<a href="http://manipulator.parentnode.dk" target="_blank">Manipulator JavaScript library</a>
		offers a complete <a href="http://manipulator.parentnode.dk/pages/page-model" target="_blank">Page controller</a>
		designed for Templator.
	</p>

	<p>
		A standard Templator Page contains the four primary 
		shell nodes, <span class="htmltag">div#header</span>, <span class="htmltag">div#content</span>, 
		<span class="htmltag">div#navigation</span> and <span class="htmltag">div#footer</span>. The order is not random.
		The content actually goes before the navigation. Think about it - when someone navigates to a page, would it be 
		safe to assume that they are more more interested in the content than the navigation? 
		This is especially evident on the mobile phone, where the user probably don't want to scroll through a huge navigation before reaching the content.
	</p>
	<p>
		Think structure, not design.
	</p>

<code>&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
	&lt;title&gt;Templator - Markup Documentation&lt;/title&gt;
	&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=UTF-8&quot; /&gt;
	&lt;meta name=&quot;keywords&quot; content=&quot;HTML, JavaScript, CSS, framework, SEO&quot; /&gt;
	&lt;meta name=&quot;description&quot; content=&quot;Details do matter&quot; /&gt;
	&lt;meta name=&quot;viewport&quot; content=&quot;initial-scale=1, user-scalable=no&quot; /&gt;
&lt;/head&gt;

&lt;body&gt;

&lt;div id=&quot;page&quot;&gt;

	<a href="/docs/header">&lt;div id=&quot;header&quot;&gt;&lt;/div&gt;</a>
	<a href="/docs/content">&lt;div id=&quot;content&quot;&gt;&lt;/div&gt;</a>
	<a href="/docs/navigation">&lt;div id=&quot;navigation&quot;&gt;&lt;/div&gt;</a>
	<a href="/docs/footer">&lt;div id=&quot;footer&quot;&gt;&lt;/div&gt;</a>

&lt;/div&gt;

&lt;/body&gt;
&lt;/html&gt;</code>


</div>
