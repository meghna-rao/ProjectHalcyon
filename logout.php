<?php


session_start();//session is a way to store information (in variables) to be used across multiple pages.
session_destroy();
header("Location: moodjournallogin.html");//use for the redirection to some page
?>
