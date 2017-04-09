<?php
	/*
	 * @file crc3.php
	 * @location thesoftwarestudent/sandbox20170408/
	 * @author Raymond Byczko
	 * @company self
	 * @technology php
	 * @start_date 2017-04-08, April 8, 2017
	 * @purpose To experiment with the php string function crc32.
	 * Specifically it is applied to two strings that are very long
	 * and identical except for the very first character. 
	 * @note The crc32 values of each are unique and distinct from each
	 * other.  It only takes one character!
	 * @note The various ways of displaying the crc32 value
	 * are all identical, whether a) var_export b) simple echo c) sprintf. 
	 * Interesting.
	 * @note The use of var_export with true is good for seeing the variable
	 * as a string (and therefore useful for debugging).
	 *
	 */
	echo '<pre>';
	echo 'crc3.php'."\n";
	/// Lets build one long string (50,000 characters).
	$longstring = '';
	for ($i=0; $i<1000; $i++)
	{
		$longstring .= 'CCCCC';
	};
	/// Prepend 'A' to the long string to create a new one.
	/// Prepend 'B' to the same long string to create another new one.
	$array_strings = array('A'.$longstring, 'B'.$longstring);
	foreach ($array_strings as $somestring)
	{
		/// print out only the first ten characters because the string is so long.
		echo 'somestring='.substr($somestring, 0, 10)."...\n";
		$crc_value = crc32($somestring);
		
		$ve_crc_value = var_export($crc_value, true);
		echo '... ve_crc_value='."\n".$ve_crc_value."\n";
		echo '... crc_value='."\n".$crc_value."\n";
		$formatted_crc_value = sprintf("%u", $crc_value);
		echo '... formatted_crc_value='."\n".$formatted_crc_value."\n";
	}
	echo '</pre>';
?>
