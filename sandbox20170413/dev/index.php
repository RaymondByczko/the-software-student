<?php
/*
 * @file index.php
 * @location thesoftwarestudent/sandbox20170413/dev/
 * @author Raymond Byczko
 * @company self
 * @purpose This php page presents the starter page for
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
<div class="flex-container-b" class="std_oak_div">
  <div class="flex-item-b"><a href="/sandbox20170413/dev/signup.php" class="btn btn-lg btn-primary">Signup</a></div>
  <div class="flex-item-b"><a href="/sandbox20170413/dev/database.php" class="btn btn-lg btn-primary">Database</a></div>
  <div class="flex-item-b"><a href="/sandbox20170413/dev/about.php" class="btn btn-lg btn-primary">About</a></div>
</div>
<div>
<a href="/sandbox20170413/dev/database.php" class="btn btn-lg btn-primary">Database</a>
<a href="/sandbox20170413/dev/signup.php" class="btn btn-lg btn-primary">Signup</a>
</div>
</body>
</html>
