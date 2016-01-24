<?php
require_once("check.inc");
$usr = mysql_real_escape_string($_POST['username']);
$pas = mysql_real_escape_string($_POST['passcode']);
check($usr,$pas);
?>
