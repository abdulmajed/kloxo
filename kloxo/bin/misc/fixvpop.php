<?php 

include_once "htmllib/lib/include.php"; 

$pass = slave_get_db_pass();
$salt = sha1(rand());

system("sh ../bin/misc/vpop.sh 'root' '$pass' lxpopuser " . $salt);

