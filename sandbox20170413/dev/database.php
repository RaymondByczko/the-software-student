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
<link rel="stylesheet" type="text/css" href="../css/oakstyle.css">
<script type="text/javascript" src="/sandbox20170413/js/oakvalidate.js"></script>
</head>
<body>
<div class="std_oak_form">
<?php
require 'sandbox20170413/lib/OakDatabase.php';

// $dbfile='/sandbox20170413/db/oakdatabase_a.sqlite';
// $dbfile='oakdatabase_a.sqlite';
// $dbfile='/tmpdatabase/oakdatabase_a.sqlite';

$dbfile='../db/oakdatabase_a.sqlite';

$objOakDatabase = new OakDatabase($dbfile);
$objOakDatabase->open();
?>
<pre>
Database created.
</pre>
</div>
<div class="flex-container" class="std_oak_div">
  <div class="flex-item">flex item 1</div>
  <div class="flex-item">flex item 2</div>
  <div class="flex-item">flex item 3</div>
</div>
</div>
</body>
</html>
