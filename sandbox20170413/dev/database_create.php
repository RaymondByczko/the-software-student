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
 * @change_history 2017-05-02 May 2, 2017, Used centrally decided config for database file,
 * via ConfigDatabase.
 */
?>
<?php
require 'sandbox20170413/lib/OakDatabase.php';
require 'sandbox20170413/config/config_database.php';

$dbfile = ConfigDatabase::file();

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
