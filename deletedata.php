<?php
mysql_connect("127.0.0.1","root","");
mysql_select_db("sap"); 
$email = $_POST['Email'];
$query = "DELETE FROM personal WHERE email = '$email'";
mysql_query($query) or die ("Query save failed : ". mysql_error());
?>