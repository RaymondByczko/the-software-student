<?php
/*
 * @file processoak.php
 * @location thesoftwarestudent/sandbox20170413/dev/
 * @author Raymond Byczko
 * @company self
 * @purpose This php page processes an Oak form.
 * Oak Services.
 * @change_history 2017-05-02 May 02, 2017,  Added ability to insert submission into database.
 * Used centrally decided config for database file, via ConfigDatabase.
 */
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/oakstyle.css">
</head>
<body>
<div class="std_oak_form">
<?php
require 'sandbox20170413/lib/OakForm.php';
require 'sandbox20170413/lib/OakDatabase.php';
require 'sandbox20170413/config/config_database.php';

if (OakForm::interface_check())
{

	$name = $_POST['oak_name'];
	$email = $_POST['oak_email'];

	echo '<pre>';
	echo 'info: interface check passed'."\n";
	echo 'The post variables:'."\n";
	echo $_POST['oak_name']."\n";
	echo $_POST['oak_email']."\n";
	echo '</pre>';

	$dbfile = ConfigDatabase::file();
	echo '<pre>';
	echo 'dbfile='.$dbfile;
	echo '</pre>';
	$oakDatabaseObj = new OakDatabase($dbfile);
	$oakDatabaseObj->open();
	$oakDatabaseObj->insert_submission($name, $email);

}
else
{
	echo '<pre>';
	echo 'info: interface check failed'."\n";
	echo 'The form code is not supplying the correct named variables'."\n";
	echo '</pre>';
}

?>
</div>
</body>
</html>
