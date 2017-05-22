<?php
/*
 * @file database_view.php
 * @location thesoftwarestudent/sandbox20170413/dev/
 * @author Raymond Byczko
 * @company self
 * @purpose This php page presents a way to view the database
 * associated with Oak Services.
 * @change_history 2017-05-02 May 02, 2017, Started this file.
 * Originally copied from database.php .
 * @change_history 2017-05-06 May 6, 2017, Added <empty> filler for
 * when fields are empty.
 */
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/oakstyle.css">
<script type="text/javascript" src="/sandbox20170413/js/oakvalidate.js"></script>
<link href="/sandbox20170413/extern/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="/sandbox20170413/extern/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>
<div class="std_oak_form">
<?php
require 'sandbox20170413/lib/OakDatabase.php';
require 'sandbox20170413/config/config_database.php';

$objOakDatabase = new OakDatabase(ConfigDatabase::file());
$objOakDatabase->open();
// The following can throw an exception.
// @todo log and provide backup page if exception.
$oakDatabaseResults = $objOakDatabase->select(NULL);
?>
<pre>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
	if (array_key_exists('message', $_GET))
	{
		echo $_GET['message'];
	}
	else
	{
		echo 'No message';
	}
}
?>
</pre>
</div>
<div>
<div class="row">
	<div class="col-md-2 col-style">submission_id</div>
	<div class="col-md-3 col-style">name</div>
	<div class="col-md-3 col-style">email</div>
	<div class="col-md-2 col-style">utc_time</div>
	<div class="col-md-2 col-style">local_time</div>
</div>
<?php
foreach ($oakDatabaseResults as $oakRow)
{

	$oakRowA = array();
	$oakRowA['submission_id']= $oakRow['submission_id']==''?'<empty>':$oakRow['submission_id'];
	$oakRowA['name'] 		= $oakRow['name']==''?'<empty>':$oakRow['name'];
	$oakRowA['email']		= $oakRow['email']==''?'<empty>':$oakRow['email'];
	$oakRowA['utc_time']	= $oakRow['utc_time']==''?'<empty>':$oakRow['utc_time'];
	$oakRowA['local_time']	= $oakRow['local_time']==''?'<empty>':$oakRow['local_time'];
?>
<div class="row">
	<div class="col-md-2 col-style"><?php echo $oakRowA['submission_id'];?></div>
	<div class="col-md-3 col-style"><?php echo $oakRowA['name'];?></div>
	<div class="col-md-3 col-style"><?php echo $oakRowA['email'];?></div>
	<div class="col-md-2 col-style"><?php echo $oakRowA['utc_time'];?></div>
	<div class="col-md-2 col-style"><?php echo $oakRowA['local_time'];?></div>
</div>
<?php
}
?>
</div>
<div class="flex-container" class="std_oak_div">
  <div class="flex-item">flex item 1</div>
  <div class="flex-item">flex item 2</div>
  <div class="flex-item">flex item 3</div>
</div>
<div>
<button type="button" class="btn btn-lg btn-primary">Sample</button>
<a href="/sandbox20170413/dev/database_create.php" class="btn btn-lg btn-primary">Create</a>
<a href="/sandbox20170413/dev/index.php" class="btn btn-lg btn-primary">Home</a>
</div>
</body>
</html>
