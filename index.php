<?php
include("components/master.php");
include("functions/master.php");
include("functions/buku.php");

use rpl\Master;












$func = new Buku();
$func->created_at = "2018-08-18";
$test = $func->getData();
var_dump($func,$test);
?>