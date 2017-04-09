<?php
	/*
	 * @file count7.php
	 * @location thesoftwarestudent/sandbox20170408/
	 * @author Raymond Byczko
	 * @company self
	 * @technology php
	 * @start_date 2017-04-08, April 8, 2017
	 * @purpose To experiment with the php string function count_chars.
	 * Specifically, lets see how mode 3 works?
	 * @note The mode 3 for count_chars works mostly as expected.  However,
	 * the returned string is in alphabetical order, and not in encountered
	 * order.  Interesting.
	 * @note The use of var_export with true is good for seeing the variable
	 * as a string (and therefore useful for debugging).
	 *
	 */
	echo '<pre>';
	echo 'count7.php'."\n";
	$tobecounted = 'AABBCCAEEEEDzx';
	// Get a string with unique characters.
	$mode = 3;
	$unique_chars = count_chars($tobecounted, $mode);
	// This should be 'ABCEDzx'.
	
	$ve_unique_chars = var_export($unique_chars, true);
	echo 'tobecounted='.$tobecounted."\n";
	echo 've_unique_chars='."\n".$ve_unique_chars."\n";
	echo '... should be: ABCEDzx if in encountered order'."\n";
	echo '... should be: ABCDExz if in alphabetical order'."\n";

	$len_unique_chars = count($unique_chars); 
	echo 'len_unique_chars='.$len_unique_chars."\n";
	echo '</pre>';
?>
