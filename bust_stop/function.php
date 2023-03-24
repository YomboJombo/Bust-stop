<?php
// Function to convert date from 'YYYY-MM-DD HH:MM:SS' to 
// DD-MM-YYYY for the purpose of output display only.
function formatDate($date)
{
	// Get the constituent components of the date.
	$year = substr($date, 0, 4);
	$month = substr($date, 5, 2);
	$day = substr($date, 8, 2);
	$hour = substr($date, 11,2);
	$minute = substr($date, 14, 2);
	
	$newFormat = $day . "/" . $month . "/" . $year ;

	return $newFormat ;
}

// Function to re-arrange a name from full name to 
// Initial + Lastname
function rearrangeName($name)
{
	// Get the position of the space character in the name
	$firstname = ($name [0] ) ;
	
	// use strpos to locate the space inside the name, and display name
	// that is one 1 character ahead
	// Pick the space within the name using strpos
	// And then display the new name 
	$lastname = substr($name, strpos($name, " ")+1) ;
	
	// $newName holds the data for the format 
	$newName = $firstname . " " . $lastname ;
	
	// Return the new formatted name
	return $newName ;
}
?>