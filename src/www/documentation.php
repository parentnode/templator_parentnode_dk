<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");

$action = $page->actions();


$page->bodyClass("front");
$page->pageTitle("Giving your frontend head");


// form
if(count($action) > 0 && $action[0] == "form") {

	$page->header(array("body_class" => "form"));
	$page->template("documentation/form.php");
	$page->footer();
	exit();

}
// page
else if(count($action) > 0 && $action[0] == "page") {

	$page->header(array("body_class" => "page"));
	$page->template("documentation/page.php");
	$page->footer();
	exit();

}

// product
else if(count($action) > 0 && $action[0] == "product") {

	$page->header(array("body_class" => "product"));
	$page->template("documentation/product.php");
	$page->footer();
	exit();

}

// person
else if(count($action) > 0 && $action[0] == "person") {

	$page->header(array("body_class" => "person"));
	$page->template("documentation/person.php");
	$page->footer();
	exit();

}

// article
else if(count($action) > 0 && $action[0] == "article") {

	$page->header(array("body_class" => "article"));
	$page->template("documentation/article.php");
	$page->footer();
	exit();

}

// organization
else if(count($action) > 0 && $action[0] == "organization") {

	$page->header(array("body_class" => "organization"));
	$page->template("documentation/organization.php");
	$page->footer();
	exit();

}

// event
else if(count($action) > 0 && $action[0] == "event") {

	$page->header(array("body_class" => "event"));
	$page->template("documentation/event.php");
	$page->footer();
	exit();

}

// movie
else if(count($action) > 0 && $action[0] == "movie") {

	$page->header(array("body_class" => "movie"));
	$page->template("documentation/movie.php");
	$page->footer();
	exit();

}

else {

	$page->header();
	$page->template("documentation/index.php");
	$page->footer();
	exit();

}

?>