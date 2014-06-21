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
/**
 * The syslog for the sessionl application.  Accordingly its called ssyslog.
 * @param string $msg Contains the message sent to this applications
 * own 'syslog'.
 */
function ssyslog($msg)
{
    $logdir = dirname(__FILE__);
    $logfile = $logdir.'/logs/ssyslog';
    error_log($msg."\n", 3, $logfile);
}
