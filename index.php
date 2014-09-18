<?php

require("_postmark.php");

$postmark = new Postmark("APIKEY","xx",'xx');

$result = $postmark->to("me@to.com")
	->subject( time() . " has made an order from your cask site")
	->plain_message("This is a plain text message.")
	->send();

if($result)
	print "sent"
?>