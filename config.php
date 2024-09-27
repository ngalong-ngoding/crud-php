<?php
/**
 * using mysqli_connect for database connection
 */

 $databaseHost = 'lpcalhost';
 $databaseName = 'crud_db';
 $databaseUsername = 'root';
 $databasePassword = '';

 $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

 ?> 
 