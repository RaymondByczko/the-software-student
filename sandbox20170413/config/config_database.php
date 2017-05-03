<?php
/*
 * @file config_database.php
 * @location sandbox20170413/config/
 * @purpose This stores the config for the Oak Website.  This will centralize
 * certain database config decisions.
 */
?>
<?php
class ConfigDatabase {
	public static function file()
	{
		return '../db/oakdatabase_v.sqlite';
	}
}
?>
