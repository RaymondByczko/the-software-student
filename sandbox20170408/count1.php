<?php
	/*
	 * @file count1.php
	 * @location thesoftwarestudent/sandbox20170408/
	 * @author Raymond Byczko
	 * @company self
	 * @technology php
	 * @start_date 2017-04-08, April 8, 2017
	 * @purpose To experiment with the php string function count_chars.
	 * @note For mode 0, array indexes of 0 to 255 are returned, with
	 * counts in each value.  There were three groups of 11111111.
	 * All indexes, even those with counts of 0, are there.
	 * @note The use of var_export with true is good for seeing the variable
	 * as a string (and therefore useful for debugging).
	 *
	 */
	echo '<pre>';
	echo 'count1.php'."\n";
	$tobecounted = '0123456789abcdefghijABCDEFGHIJ';
	$mode = 0;
	$ct_array = count_chars($tobecounted, $mode);
	$ve_ct_array = var_export($ct_array, true);
	echo 'tobecounted='.$tobecounted."\n";
	echo 've_ct_array='."\n".$ve_ct_array."\n";
	echo '</pre>';
?>
