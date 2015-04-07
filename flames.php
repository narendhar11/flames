<?php

$fname = $_GET['fn'];
$sname =$_GET['sn'];

echo "http://graph.facebook.com/".$fname."/picture?type=square*http://graph.facebook.com/".$sname."/picture?type=square";

?>