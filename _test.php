<?php

	if (isset($_SERVER["BLOG_ENV"])) {
		print "EUREKA! The value is: " . $_SERVER["BLOG_ENV"];
	} else {
		print "NOPE!";
	}

?>