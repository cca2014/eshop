<?php

// This file contains the database access information. 
// This file establishes a connection to MySQL and selects the database.
// This script is begun in Chapter 7.

// Set the database access information as constants:
DEFINE ('DB_USER', 'cca2014');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', '127.11.62.1' );
DEFINE ('DB_NAME', 'c9');

// Make the connection:
$dbc = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Set the character set:
mysqli_set_charset($dbc, 'utf8');

// Omit the closing PHP tag to avoid 'headers already sent' errors!