<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/oakstyle.css">
</head>
<body>
<div class="std_oak_form">
<?php
require 'sandbox20170413/lib/OakForm.php';
$action='/sandbox20170413/dev/processoak.php';
$method='POST';

$objOakForm = new OakForm($method, $action);
$objOakForm->validation(FALSE);
$objOakForm->output();
?>
</div>
</body>
</html>
