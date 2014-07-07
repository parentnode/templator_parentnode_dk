<div class="scene docs">

	<h1>Sharing</h1>
	
	<p>Robin writes a comments about sharing.</p>

	<?
	$curr_url = urlencode("http://modulator.parentnode.dk");
	$img = urlencode("http://modulator.parentnode.dk/img/logo_sharing.png");
	$title = urlencode("#Modulator");
	$desc = urlencode("This is the text which will apear in the description box.");
	$fb_url = 'https://www.facebook.com/dialog/feed?app_id=587947967920015&amp;display=popup&amp;link='. $curr_url .'&amp;picture='. $img .'&amp;name='. $title .'&amp;caption=&amp;description='. $desc .'&amp;redirect_uri='. $curr_url;
	$twitter_url = 'http://twitter.com/home?status=Modulator:+'. $curr_url;
	$pinterest_url = 'http://pinterest.com/pin/create/button/?url'. $curr_url .'&media='. $img .'&description='. $title;
	?>

	
<code>&lt;ul class=&quot;sharing&quot;&gt;

&lt;li class=&quot;facebook&quot;&gt;&lt;a href=&quot;<?= $fb_url ?>&quot; target=&quot;_blank&quot;&gt;Facebook&lt;/a&gt;&lt;/li&gt;

&lt;li class=&quot;twitter&quot;&gt;&lt;a href=&quot;<?= $twitter_url ?>&quot; target=&quot;_blank&quot;&gt;Twitter&lt;/a&gt;&lt;/li&gt;

&lt;li class=&quot;pinterest&quot;&gt;&lt;a href=&quot<?= $pinterest_url ?>&quot; target=&quot;_blank&quot;&gt;Pinterest&lt;/a&gt;&lt;/li&gt;

&lt;li class=&quot;mail&quot;&gt;&lt;a href=&quot;mailto:?subject=#Modulator&amp;body=<?= $curr_url ?>;&quot;&gt;Email&lt;/a&gt;&lt;/li&gt;


&lt;/ul&gt;</code>

</div>