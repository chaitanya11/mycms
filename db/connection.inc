<?php

function estcon($host,$usr,$pascode){
@mysql_connect($host,$usr,$pascode) or die("Connection Not Established");
}

function selcdb($dbname){
@mysql_select_db($dbname) or die("Database Not Selected");
}
