<?php
/*
 * @file database_create.php
 * @location thesoftwarestudent/sandbox20170413/dev/
 * @author Raymond Byczko
 * @company self
 * @purpose This php page creates a database.
 * Oak Services.
 * @change_history 2017-04-14 April 14, 2017, Added file documentation, DOCTYPE, and
 * javascript validate file.
 */
?>
<?php
require 'sandbox20170413/lib/OakDatabase.php';

// $dbfile='/sandbox20170413/db/oakdatabase_a.sqlite';
// $dbfile='oakdatabase_a.sqlite';
// $dbfile='/tmpdatabase/oakdatabase_a.sqlite';

$dbfile='../db/oakdatabase_t.sqlite';

$objOakDatabase = new OakDatabase($dbfile);
$objOakDatabase->open();
$objOakDatabase->create();
$message_value = 'Database+created';
$ins_result=$objOakDatabase->insert_submission('raymond', 'ray@email.com');

$message_value .= ';'.$ins_result;
// header('Location: http://thesoftwarestudent.dev/sandbox20170413/dev/database.php?message=Database+created');
header('Location: http://thesoftwarestudent.dev/sandbox20170413/dev/database.php?message='.$message_value);
exit();
?>
