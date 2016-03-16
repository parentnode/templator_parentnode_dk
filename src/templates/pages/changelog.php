<?php
$this->bodyClass("gettingstarted");
$this->pageTitle("It's just improvements");
?>
<div class="scene changelog i:scene">

	<div class="article i:article" itemscope itemtype="http://schema.org/Article">
		<h1 itemprop="headline">Changelog</h1>

		<ul class="info">
			<li class="published_at" itemprop="datePublished" content="<?= date("Y-m-d", filemtime(__FILE__)) ?>"><?= date("Y-m-d, H:i", filemtime(__FILE__)) ?></li>
			<li class="modified_at" itemprop="dateModified" content="<?= date("Y-m-d", filemtime(__FILE__)) ?>"><?= date("Y-m-d, H:i", filemtime(__FILE__)) ?></li>
			<li class="author" itemprop="author">Martin Kæstel Nielsen</li>
			<li class="main_entity share" itemprop="mainEntityOfPage"><?= SITE_URL."/" ?></li>
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

			<h2>Version 2</h2>
			<ul class="changes">
				<li>
					Added snippet and boilerplate download
				</li>
				<li>
					Updated Schema properties
				</li>
				<li>
					Renamed project to Templator
				</li>
				<li>
					Added standalone snippet and boilerplate Github repository
				</li>
			</ul>

		</div>
	</div>
</div>
