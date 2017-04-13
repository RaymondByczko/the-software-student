<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/oakstyle.css">
</head>
<body>
<div class="std_oak_form">
<?php
require 'sandbox20170413/lib/OakForm.php';

if (OakForm::interface_check())
{
	echo '<pre>';
	echo 'info: interface check passed'."\n";
	echo 'The post variables:'."\n";
	echo $_POST['oak_name']."\n";
	echo $_POST['oak_email']."\n";
	echo '</pre>';
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
