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
 * @file secret/test.php
 * @filesource secret/test.php
 * @purpose This is a test file to see what happens when a php file
 * is accessed under the directory secret, while is under the influence
 * of .htaccess.  This file should be completely unavailable via the
 * web and only accessible by the server itself.
 * @start_date 2014-06-20 June 20, 2014
 * @change_history Started this file.
 */
?>
<?php
echo 'This is secret/test.php<br>';