<?php 
// Put all post data into their own variables
extract($_POST);

// (1) Verify that all info was provided
// (2) Verify that a valid phone number was provided

if($first_name !='' && $last_name !='' && $email !='' && $phone !='' && is_valid_phone($phone)) {
	// Open the data file for appending
	$file = fopen('../data/contacts.txt', 'a+');
	
	// Create a timestamp
	$timestamp = time();
	
	// Apend entered onformation to the file
	fwrite($file,"$first_name,$last_name,$email,$phone,$timestamp\n");
	
	// Close the data file
	fclose($file);
	
	// Redirect to the list of contacts
	header('Location:../?p=contacts');
}

/**
 * Validated that a phone number is numeric and has 10 digits
 * @param String $phone
 * @return True of the number is valid, false otherwise
 */

function is_valid_phone($phone) {
	if(strlen($phone) ==10 && is_numeric($phone)) {
		return true;
	} else {
		return false;
	}
}
?>