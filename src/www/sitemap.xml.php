<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");
print '<?xml version="1.0" encoding="UTF-8"?>';
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
		<loc>http://modulator.parentnode.dk/</loc>
		<lastmod><?= date("Y-m-d", filemtime(LOCAL_PATH."/templates/pages/front.php")) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
	</url>
	<url>
		<loc>http://modulator.parentnode.dk/principles</loc>
		<lastmod><?= date("Y-m-d", filemtime(LOCAL_PATH."/templates/pages/principles.php")) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
	</url>
	<url>
		<loc>http://modulator.parentnode.dk/docs</loc>
		<lastmod><?= date("Y-m-d", filemtime(LOCAL_PATH."/templates/docs/index.php")) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
	</url>
	<url>
		<loc>http://modulator.parentnode.dk/terms</loc>
		<lastmod><?= date("Y-m-d", filemtime(LOCAL_PATH."/templates/pages/terms.php")) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>1</priority>
	</url>
</urlset>