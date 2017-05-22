<?php
/*
 * @file processoakredirect.php
 * @location thesoftwarestudent/sandbox20170413/dev/
 * @author Raymond Byczko
 * @company self
 * @purpose This php page processes an Oak form.  It is a 'redirect' version
 * of processoak.php
 * Oak Services.
 * @start_date 2017-05-06
 * @note This file was initially composed as processoak.php which was then
 * copied to this file (so that redirect works properly).
 * See processoak.php for background info.
 */
?>
<?php
require 'sandbox20170413/lib/OakForm.php';
require 'sandbox20170413/lib/OakDatabase.php';
require 'sandbox20170413/config/config_database.php';

$message_value = '';

if (OakForm::interface_check())
{
	$name = $_POST['oak_name'];
	$email = $_POST['oak_email'];

	$message_value .= 'info: interface check passed;';
	$message_value .= 'The post variables:';
	$message_value .= 'oak_name='.$_POST['oak_name'].', ';
	$message_value .= 'oak_email='.$_POST['oak_email'].';';

	try {
		$dbfile = ConfigDatabase::file();
		$message_value .= 'dbfile='.$dbfile.';';

		$oakDatabaseObj = new OakDatabase($dbfile);
		$oakDatabaseObj->open();

		$ins_result = $oakDatabaseObj->insert_submission($name, $email);
		if ($ins_result == 'INSERT:submissionok')
		{
			$message_value .= 'insert submission ok;';
		}
		else
		{
			$message_value .= 'insert submission failed;';
		}
	}
	// This should also catch a) RuntimeException b) PDOException.
	catch (Exception $e)
	{
				$message_value .= 'exception:'.$e->getCode().';';
	}
}
else
{
	$message_value .= 'info: interface check failed; ';
	$message_value .= 'The form code is not supplying the correct named variables; ';
	$message_value .= 'Unable to insert; ';
}

// header('Location: http://thesoftwarestudent.dev/sandbox20170413/dev/signup.php?message='.'message_value8');
header('Location: http://thesoftwarestudent.dev/sandbox20170413/dev/signup.php?message='.$message_value);
exit();
?>
