<?php

/************
* File: dbconnect.php
* Purpose: open database connection
*************/

//open our database connection with the correct username & password
mysql_connect("localhost", "root", "")
or die("could not connect to the database because: " . mysql_error());

//change to the database we want to use
mysql_select_db("pitsofdoom")
or die ("could not switch to using database because:" . mysql_error());
?>