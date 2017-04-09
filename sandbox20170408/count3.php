<?php
	/*
	 * @file count3.php
	 * @location thesoftwarestudent/sandbox20170408/
	 * @author Raymond Byczko
	 * @company self
	 * @technology php
	 * @start_date 2017-04-08, April 8, 2017
	 * @purpose To experiment with the php string function count_chars.
	 * Specifically, an empty string is given to count_chars.
	 * @note For mode 1, array indexes with values of 0 are not present.
	 * Since it was an empty string, there are no entries in the array.
	 * The array is empty.
	 * @note The use of var_export with true is good for seeing the variable
	 * as a string (and therefore useful for debugging).
	 *
	 */
	echo '<pre>';
	echo 'count3.php'."\n";
	$tobecounted = '';
	$mode = 1;
	$ct_array = count_chars($tobecounted, $mode);
	$ve_ct_array = var_export($ct_array, true);
	echo 'tobecounted='.$tobecounted."\n";
	echo 've_ct_array='."\n".$ve_ct_array."\n";
	$len_ct_array = count($ct_array); 
	echo 'len_ct_array='.$len_ct_array."\n";
	echo '</pre>';
?>
