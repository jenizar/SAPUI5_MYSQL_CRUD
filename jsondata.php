<?php
mysql_connect("127.0.0.1","root","");
mysql_select_db("sap"); 

$sth = mysql_query("SELECT * FROM personal");
$rows = array();
while($r = mysql_fetch_assoc($sth)) {
    $rows[] = $r;
}
$baris = array('UserSet' => $rows);
print json_encode($baris);
?>