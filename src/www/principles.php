<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();


$page->bodyClass("principles");
$page->pageTitle("Principles");

$page->header();
$page->template("pages/principles.php");
$page->footer();

?>