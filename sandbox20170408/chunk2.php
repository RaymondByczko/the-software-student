<?php
	/*
	 * @file chunk2.php
	 * @location thesoftwarestudent/sandbox20170408/
	 * @author Raymond Byczko
	 * @company self
	 * @technology php
	 * @start_date 2017-04-08, April 8, 2017
	 * @purpose To experiment with the php string function chunk_split.
	 * This experiment is to find out what happens if the chunk length is
	 * longer than the string to be split.
	 * The string to be split is 30 characters.
	 * The chunk length is 50.
	 * @note chunk_split simply appends, once, the end part.
	 *
	 */
	echo '<pre>';
	echo 'chunk2.php'."\n";
	$tobesplit = '0123456789abcdefghijABCDEFGHIJ';
	$chunk_len = 50;
	$end_part = 'END'."\n";
	$thesplit = chunk_split($tobesplit, $chunk_len, $end_part);
	echo 'tobesplit='."\n".$tobesplit."\n";
	echo 'thesplit='."\n".$thesplit."\n";
	echo '</pre>';
?>
