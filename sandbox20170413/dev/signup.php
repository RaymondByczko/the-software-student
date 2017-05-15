<?php
/*
 * @file signup.php
 * @location thesoftwarestudent/sandbox20170413/dev/
 * @author Raymond Byczko
 * @company self
 * @purpose This php page presents a signup form to register for
 * Oak Services.
 * @change_history 2017-04-14 April 14, 2017, Added file documentation, DOCTYPE, and
 * javascript validate file.
 * @change_history 2017-05-06 May 6, 2017, Added message area at top.
 * Inserted form into flex-item-b.  Added Home, Database buttons/links on bottom.
 * Added bootstrap stylesheets.
 */
?>
<!DOCTYPE html>
<html>
<head>
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
  <div class="flex-item-b">

<?php
require 'sandbox20170413/lib/OakForm.php';
$action='/sandbox20170413/dev/processoakredirect.php';
$method='POST';

$objOakForm = new OakForm($method, $action);
$objOakForm->validation(TRUE);
$objOakForm->output();
?>
  </div>
</div>
<button type="button" class="btn btn-lg btn-primary">Sample</button>
<a href="/sandbox20170413/dev/index.php" class="btn btn-lg btn-primary">Home</a>
<a href="/sandbox20170413/dev/database.php" class="btn btn-lg btn-primary">Database</a>
</div>
</body>
</body>
</html>
