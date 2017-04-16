<?php
/*
 * @file database.php
 * @location thesoftwarestudent/sandbox20170413/dev/
 * @author Raymond Byczko
 * @company self
 * @purpose This php page presents a signup form to register for
 * Oak Services.
 * @change_history 2017-04-14 April 14, 2017, Added file documentation, DOCTYPE, and
 * javascript validate file.
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

// $dbfile='/sandbox20170413/db/oakdatabase_a.sqlite';
// $dbfile='oakdatabase_a.sqlite';
// $dbfile='/tmpdatabase/oakdatabase_a.sqlite';

$dbfile='../db/oakdatabase_c.sqlite';

$objOakDatabase = new OakDatabase($dbfile);
$objOakDatabase->open();
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
<div class="flex-container" class="std_oak_div">
  <div class="flex-item">flex item 1</div>
  <div class="flex-item">flex item 2</div>
  <div class="flex-item">flex item 3</div>
</div>
<div>
<button type="button" class="btn btn-lg btn-primary">Sample</button>
<a href="/sandbox20170413/dev/database_create.php" class="btn btn-lg btn-primary">Create</a>
<a href="/sandbox20170413/dev/database_view.php" class="btn btn-lg btn-primary">View</a>
</div>
</body>
</html>
