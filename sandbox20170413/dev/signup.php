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
 */
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/oakstyle.css">
<script type="text/javascript" src="/sandbox20170413/js/oakvalidate.js"></script>
</head>
<body>
<div class="std_oak_form">
<?php
require 'sandbox20170413/lib/OakForm.php';
$action='/sandbox20170413/dev/processoak.php';
$method='POST';

$objOakForm = new OakForm($method, $action);
$objOakForm->validation(TRUE);
$objOakForm->output();
?>
</div>
</body>
</html>
