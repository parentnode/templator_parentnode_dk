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

// form
else if(count($action) > 0 && $action[0] == "form") {

	$page->header(array("body_class" => "form"));
	$page->template("documentation/form.php");
	$page->footer();
	exit();

}

// address
else if(count($action) > 0 && $action[0] == "address") {

	$page->header(array("body_class" => "address"));
	$page->template("documentation/address.php");
	$page->footer();
	exit();

}

// geo_location
else if(count($action) > 0 && $action[0] == "geo_location") {

	$page->header(array("body_class" => "geo_location"));
	$page->template("documentation/geo_location.php");
	$page->footer();
	exit();

}

// contact
else if(count($action) > 0 && $action[0] == "contact") {

	$page->header(array("body_class" => "contact"));
	$page->template("documentation/contact.php");
	$page->footer();
	exit();

}

// price
else if(count($action) > 0 && $action[0] == "price") {

	$page->header(array("body_class" => "price"));
	$page->template("documentation/price.php");
	$page->footer();
	exit();

}

// review
else if(count($action) > 0 && $action[0] == "review") {

	$page->header(array("body_class" => "review"));
	$page->template("documentation/review.php");
	$page->footer();
	exit();

}

// actions
else if(count($action) > 0 && $action[0] == "actions") {

	$page->header(array("body_class" => "actions"));
	$page->template("documentation/actions.php");
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