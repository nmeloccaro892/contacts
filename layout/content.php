<?php

// Use the 'p' parameter value in the QS for the
// page, if it is set in the QS

// to check whether or not a variable is set
// in PHP, use the function isset(VAR_NAME)
if(isset($_GET['p'])) {
	$page = $_GET['p'];
} else {
	$page = 'contacts';
}

include("pages/$page.php"); ?>