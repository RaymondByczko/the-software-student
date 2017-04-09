<?php
	/*
	 * @file crc2.php
	 * @location thesoftwarestudent/sandbox20170408/
	 * @author Raymond Byczko
	 * @company self
	 * @technology php
	 * @start_date 2017-04-08, April 8, 2017
	 * @purpose To experiment with the php string function crc32.
	 * Specifically it is applied to two strings such that one is
	 * reversed of the other.
	 * @note Reversal produces different crc32 values.
	 * @note The various ways of displaying the crc32 value
	 * are all identical, whether a) var_export b) simple echo c) sprintf. 
	 * Interesting.
	 * @note The use of var_export with true is good for seeing the variable
	 * as a string (and therefore useful for debugging).
	 *
	 */
	echo '<pre>';
	echo 'crc2.php'."\n";
	$array_strings = array('AAAAABBBBB', 'BBBBBAAAAA');
	foreach ($array_strings as $somestring)
	{
		echo 'somestring='.$somestring."\n";
		$crc_value = crc32($somestring);
		
		$ve_crc_value = var_export($crc_value, true);
		echo '... ve_crc_value='."\n".$ve_crc_value."\n";
		echo '... crc_value='."\n".$crc_value."\n";
		$formatted_crc_value = sprintf("%u", $crc_value);
		echo '... formatted_crc_value='."\n".$formatted_crc_value."\n";
	}
	echo '</pre>';
?>
