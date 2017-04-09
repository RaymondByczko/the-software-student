<?php
	/*
	 * @file count4.php
	 * @location thesoftwarestudent/sandbox20170408/
	 * @author Raymond Byczko
	 * @company self
	 * @technology php
	 * @start_date 2017-04-08, April 8, 2017
	 * @purpose To experiment with the php string function count_chars.
	 * Specifically, a short string with limited chars is given to count_chars.
	 * @note For mode 1, array indexes with values of 0 are not present.
	 * The experiment works as expected with counts of 4, 2, and 6 respectively
	 * for indexes 65, 66, 67 respectively.
	 * @note The use of var_export with true is good for seeing the variable
	 * as a string (and therefore useful for debugging).
	 *
	 */
	echo '<pre>';
	echo 'count4.php'."\n";
	$tobecounted = 'AAAABBCCCCCC';
	$mode = 1;
	$ct_array = count_chars($tobecounted, $mode);
	$ve_ct_array = var_export($ct_array, true);
	echo 'tobecounted='.$tobecounted."\n";
	echo 've_ct_array='."\n".$ve_ct_array."\n";
	$len_ct_array = count($ct_array); 
	echo 'len_ct_array='.$len_ct_array."\n";
	echo '</pre>';
?>
