<div class="scene principles i:scene">

	<div class="article" itemscope itemtype="http://schema.org/Article">
		<h1 itemprop="headline">The principles <br />of Templator</h1>

		<ul class="info">
			<li class="published_at" itemprop="datePublished" content="<?= date("Y-m-d", filemtime(__FILE__)) ?>"><?= date("Y-m-d, H:i", filemtime(__FILE__)) ?></li>
			<li class="modified_at" itemprop="dateModified" content="<?= date("Y-m-d", filemtime(__FILE__)) ?>"></li>
			<li class="author" itemprop="author">Martin Kæstel Nielsen</li>
			<li class="main_entity share" itemprop="mainEntityOfPage" content="<?= SITE_URL."/principles" ?>"></li>
			<li class="publisher" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
				<ul class="publisher_info">
					<li class="name" itemprop="name">parentnode.dk</li>
					<li class="logo" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
						<span class="image_url" itemprop="url" content="<?= SITE_URL ?>/img/logo-large.png"></span>
						<span class="image_width" itemprop="width" content="720"></span>
						<span class="image_height" itemprop="height" content="405"></span>
					</li>
				</ul>
			</li>
			<li class="image_info" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
				<span class="image_url" itemprop="url" content="<?= SITE_URL ?>/img/logo-large.png"></span>
				<span class="image_width" itemprop="width" content="720"></span>
				<span class="image_height" itemprop="height" content="405"></span>
			</li>
		</ul>

		<div class="articlebody" itemprop="articleBody">
			<p>
				Templator wants to help you create what you want, regardless of what you want. As frontend/creative developers
				we are faced with a multitude of challenges ranging from design idiocy, varying browser processing and rendering
				speed, support of different devices and form factors and restrictions imposed by predefined and often meaningless 
				CMS output. The worst HTML is made by backend developers who take HTML for granted. 
			</p>
			<p>
				The design you are going to implement is likely to evolve, even before your current project is finished, and 
				surely the design update scheduled next year will bring about even bigger changes. So you might as well leave 
				it out of the equation and just think of content and semantics. CSS and JavaScript will take care of the rest.
				Manipulator strives to make it easier for you as a frontend developer and at the same time decrease complexity
				for the backend developer.
			</p>

			<h2>Content, Design and Functionality</h2>
			<p>
				The idea of fully 
				<a href="http://en.wikipedia.org/wiki/Separation_of_presentation_and_content" target="_blank">separating Content, Design and Functionality</a>
				has been around for long. It has been considered anything from an absolute necessity to an utopian ideal. Supporters
				are fighting for semantic content and opponents for unconstrained design. It would be nice to be able to please both
				sides, but it is too complicated and probably just can't be done, right? Well, Templator begs to differ.
			</p>
			<p>
				Think of HTML as XML. Use it to structure your content semantically and forget about the design and interface 
				functionality. The backend should merely work as a minimal and fully semantic content API. Use regular links to
				connect the pieces. All of a sudden you have every bit of information available right there in your DOM ready for you
				to build your desired interface using just JavaScript and CSS.
			</p>

			<h2>Mobile First</h2>
			<p>
				Think <a href="http://www.uxmatters.com/mt/archives/2012/03/mobile-first-what-does-it-mean.php">Mobile First</a> 
				when you structure your content - even if you are not building a mobile optimized website. 
				Why? Because there simply isn't any reason not to. If you evade the mobile considerations, you degrade the 
				accessibility of your content. Thinking mobile first forces you to forget the desktop design and focus on your 
				actual content. Your markup will become simpler and more flexible. Considering the growth of mobile phones with 
				internet access outpace desktops and tablets it will be wise to incorporate this approach sooner rather than later.
			</p>

			<h2>Semantic HTML and SEO</h2>
			<p>
				Templator implements <a href="http://schema.org" target="_blank">Schema.org</a> for extended semantics. Schema has
				been adapted by 
				<a href="http://en.wikipedia.org/wiki/Schema.org" target="_blank">Google, Yahoo and Microsoft</a>
				which makes it the broadest supported semantic model available. When using Templator markup you automatically 
				achieve the highest level of Search engine optimization from a code point of view, but you still need to bring 
				your own content to the party.
			</p>

			<h2>Progressive enhancement</h2>
			<p>
				As a frontend programmer you might want to think of your HTML as a content database. Remember the DOM is a fully 
				queryable data structure. Query your data, manipulate and extend. Don't overload the DOM by default. Make it 
				fit your design using JavaScript. Progressive enhancement means modifying the DOM to extend complexity. The simpler
				your starting point is, the easier the manipulation will be for each device segment. The more advanced your target 
				browser is, the more manipulation it can handle. It all adds up.
			</p>

			<h2>Less is more</h2>
			<p>
				Always keep your markup as tight as possible. This way you get the smallest and the fastest load. It really boosts
				performance, especially on devices with less processing power. If your markup is minimal, nice and clean, querying
				data is much faster and manipulation is actually easier to implement and read when you return for that next update.
				Less markup means more accessibility for both Search Engines and JavaScript manipulation.
			</p>

			<h2>Additional levarage</h2>
			<p>
				<a href="http://detector.parentnode.dk" target="_blank">Detector</a> is your one-stop solution to support all 
				HTML capable devices on earth and lowering your development complexity at the same time.
			</p>
			<p>
				<a href="http://manipulator.parentnode.dk" target="_blank">Manipulator</a> is an extremely flexible, performance 
				optimized open source JavaScript library and framework, designed to work with Templator markup and Detector segments.
			</p>
			<p>
				<a href="http://janitor.parentnode.dk" target="_blank">Janitor</a> is an open source PHP content management 
				and distribution developer toolkit, designed to work with Templator, Detector and Manipulator.
			</p>
		</div>
	</div>

</div>
