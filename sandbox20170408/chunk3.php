<?php
	/*
	 * @file chunk3.php
	 * @location thesoftwarestudent/sandbox20170408/
	 * @author Raymond Byczko
	 * @company self
	 * @technology php
	 * @start_date 2017-04-08, April 8, 2017
	 * @purpose To experiment with the php string function chunk_split.
	 * This experiment is to find out what happens if the end_part is
	 * an empty string.
	 * @note chunk_split simply returns the same string without effect.
	 *
	 */
	echo '<pre>';
	echo 'chunk3.php'."\n";
	$tobesplit = '0123456789abcdefghijABCDEFGHIJ';
	$chunk_len = 5;
	$end_part = '';
	$thesplit = chunk_split($tobesplit, $chunk_len, $end_part);
	echo 'tobesplit='."\n".$tobesplit."\n";
	echo 'thesplit='."\n".$thesplit."\n";
	echo '</pre>';
?>
