<!DOCTYPE html>
<!--
Copyright (C) Raymond Byczko

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<?php
/**
  * @company self
  * @author RByczko
  * @file index.php
  * @filesource index.php
  * @purpose Start page of thesoftwarestudent
  * @start_date 2014-06-20
  * @change_history 2014-06-20 Started this file.
  */
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Welcome to thesoftwarestudent<br>
        <?php
        // put your code here
        if (isset($_ENV['REDIRECT_STATUS']))
        {
            echo '... redirect_status detected<br>';
        }
        else
        {
            echo '... no redirect_status detected<br>';
        }
         if (isset($_ENV['REDIRECT_URL']))
        {
            echo '... redirect_url detected: '.$_ENV['REDIRECT_URL'].'<br>';
        }
        else
        {
            echo '... no redirect_url detected<br>';
        }      
        ?>
    </body>
</html>
