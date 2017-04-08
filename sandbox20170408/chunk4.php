<?php
	/*
	 * @file chunk4.php
	 * @location thesoftwarestudent/sandbox20170408/
	 * @author Raymond Byczko
	 * @company self
	 * @technology php
	 * @start_date 2017-04-08, April 8, 2017
	 * @purpose To experiment with the php string function chunk_split.
	 * This experiment is to find out what happens if the end_part is
	 * an empty string and knowing the result (the value of returned string
	 * is equal to the given one), lets see if they are the same object
	 * by using ===.
	 * @note It turns out they are the same object. 
	 *
	 */
	echo '<pre>';
	echo 'chunk4.php'."\n";
	$tobesplit = '0123456789abcdefghijABCDEFGHIJ';
	$chunk_len = 5;
	$end_part = '';
	$thesplit = chunk_split($tobesplit, $chunk_len, $end_part);
	echo 'tobesplit='."\n".$tobesplit."\n";
	echo 'thesplit='."\n".$thesplit."\n";
	if ($tobesplit === $thesplit)
	{
		echo 'tobesplit and thesplit are the same object'."\n";
	}
	else
	{
		echo 'tobesplit and thesplit are not the same object'."\n";
	}
	echo '</pre>';
?>
