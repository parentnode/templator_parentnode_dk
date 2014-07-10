<div class="scene docs">
	<h1>Navigation</h1>
	<p>
		The <span class="htmltag">div#navigation</span> contains the primary navigation element of the site. This can be 
		presented in a nested structure if needed. The full navigation should be contained in this structure, including 
		the secondary and tertiary navigation levels. If you are working with a very large sum of navigation elements which
		could potentially slow down initial page loading sublevels of navigation could be loaded using AJAX.
	</p>

<code>&lt;div id=&quot;navigation&quot;&gt;
	&lt;ul class=&quot;navigation&quot;&gt;
		&lt;li class=&quot;front&quot;&gt;&lt;a href=&quot;/&quot;&gt;Frontpage&lt;/a&gt;&lt;/li&gt;
		&lt;li class=&quot;docs&quot;&gt;
			&lt;h6&gt;Documentation&lt;/h6&gt;
			&lt;ul class=&quot;subjects&quot;&gt;
				&lt;li class=&quot;front&quot;&gt;&lt;a href=&quot;/&quot;&gt;Frontpage&lt;/a&gt;&lt;/li&gt;
			&lt;/ul&gt;
		&lt;/li&gt;
		&lt;li class=&quot;principles&quot;&gt;&lt;a href=&quot;/principles&quot;&gt;Principles&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;</code>

	<p>
		The <span class="htmltag">div#navigation</span> should be positioned after <span class="htmltag">div#content</span>
		in the <span class="htmltag">div#page</span> hierarchy because when looking at HTML from a Mobile First perspective
		you don't want the user to scroll past a massive navigation before reaching the actual content. However it is a
		common pratice to rearrange the DOM with JavaScript on desktop devices to place the 
		<span class="htmltag">div#navigation</span> in front of <span class="htmltag">div#content</span>.
	</p>
	<p>
		The <span class="htmltag">div#navigation</span> should not contain any service navigation elements. These should be
		placed in a <span class="htmltag">ul.servicenavigation</span> in the <span class="htmltag">div#header</span> or
		the <span class="htmltag">div#footer</span> depending on user relevance.
	</p>

	<div class="list">
		<h3>More markup</h3>
		<ul>
			<li><a href="/docs#general_page_layout">General page layout</a></li>
			<li><a href="/docs#content_blocks">Content blocks</a></li>
		</ul>
	</div>

</div>
