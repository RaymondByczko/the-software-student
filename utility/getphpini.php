<?php
/* 
 * Copyright (C) Raymond Byczko
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
?>
<?php
/**
 * @company self
 * @author RByczko
 * @file utility/getphpini.php
 * @filesource getphpini.php
 * @purpose To retrieve a copy of php.ini; useful in shared hosting,
 * when you need to copy it to a directory and can't use php_value in
 * .htaccess.
 * @note This operation is noted in the application log.
 * @start_date 2014-06-20 June 20
 * @change_history 2014-06-20 June 20 Started this file.
 */
?>
<?php
require_once dirname(__FILE__).'/../logger.php';
$dt = date(DATE_ATOM);
ssyslog(__FILE__.'; Secure op getphpini.php started at: '.$dt);
echo 'getphpini.php-start<br>';
$fdi = dirname(__FILE__);
echo '...fdi='.$fdi.'<br>';
$ret_copy = copy('/usr/local/lib/php.ini', $fdi.'/php.ini.copy');
if ($ret_copy == false)
{
    echo '...unable to complete operation.  Logging result.';
}
else
{
    echo '...successfully completed operation.<br>';
}
ssyslog(__FILE__.'; ret_copy='.$ret_copy);
echo 'getphpini.php-end<br>';
ssyslog(__FILE__.'; Secure op getphpini.php ended at: '.$dt);
