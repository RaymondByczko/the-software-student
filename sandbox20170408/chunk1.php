<?php
	/*
	 * @file chunk1.php
	 * @location thesoftwarestudent/sandbox20170408/
	 * @author Raymond Byczko
	 * @company self
	 * @technology php
	 * @start_date 2017-04-08, April 8, 2017
	 * @purpose To experiment with the php string function chunk_split.
	 * This experiment is predictable with chunk length of 5 and easy
	 * string (multiples of 10) for the string to be split.
	 * @note chunk_split works predictably by adding the end_part regularly.
	 *
	 */
	echo '<pre>';
	echo 'chunksplit1.php'."\n";
	$tobesplit = '0123456789abcdefghijABCDEFGHIJ';
	$chunk_len = 5;
	$end_part = 'END'."\n";
	$thesplit = chunk_split($tobesplit, $chunk_len, $end_part);
	echo 'tobesplit='.$tobesplit."\n";
	echo 'thesplit='."\n".$thesplit."\n";
	echo '</pre>';
?>
