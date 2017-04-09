<?php
	/*
	 * @file count2.php
	 * @location thesoftwarestudent/sandbox20170408/
	 * @author Raymond Byczko
	 * @company self
	 * @technology php
	 * @start_date 2017-04-08, April 8, 2017
	 * @purpose To experiment with the php string function count_chars.
	 * @note For mode 1, array indexes with values of 0 are not present.
	 * There were three groups of 11111111.
	 * The index have values from 48-57 inclusive, 65-74 inclusive, 97-106 inclusive.
	 * @note The use of var_export with true is good for seeing the variable
	 * as a string (and therefore useful for debugging).
	 *
	 */
	echo '<pre>';
	echo 'count2.php'."\n";
	$tobecounted = '0123456789abcdefghijABCDEFGHIJ';
	$mode = 1;
	$ct_array = count_chars($tobecounted, $mode);
	$ve_ct_array = var_export($ct_array, true);
	echo 'tobecounted='.$tobecounted."\n";
	echo 've_ct_array='."\n".$ve_ct_array."\n";
	echo '</pre>';
?>
