<?php
	/*
	 * @file count6.php
	 * @location thesoftwarestudent/sandbox20170408/
	 * @author Raymond Byczko
	 * @company self
	 * @technology php
	 * @start_date 2017-04-08, April 8, 2017
	 * @purpose To experiment with the php string function count_chars.
	 * Specifically, a really long string with limited chars is given to count_chars.
	 * Lets see how count_chars reacts to really long strings?
	 * @note For mode 1 the amount of As is correctly reported as 10500.  The amount of
	 * Bs is reported as 1.
	 * @note The use of var_export with true is good for seeing the variable
	 * as a string (and therefore useful for debugging).
	 *
	 */
	echo '<pre>';
	echo 'count6.php'."\n";
	$tobecounted = '';
	for ($i=0; $i<1000; $i++)
	{
		$tobecounted .= 'AAAAA';
	}
	// 5000 As
	$tobecounted .= 'B';
	// 1 B
	for ($j=0; $j<1100; $j++)
	{
		$tobecounted .= 'AAAAA';
	}
	// 5x1100 As = 5500 As
	// Totals: 10500 As, 1 B
	$mode = 1;
	$ct_array = count_chars($tobecounted, $mode);
	$ve_ct_array = var_export($ct_array, true);
	// tobecounted is too long so just print first ten characters.
	echo 'tobecounted='.substr($tobecounted, 0, 10).'...'."\n";
	echo 've_ct_array='."\n".$ve_ct_array."\n";
	$len_ct_array = count($ct_array); 
	echo 'len_ct_array='.$len_ct_array."\n";
	echo '</pre>';
?>
