<?php
mysql_connect("127.0.0.1","root","");
mysql_select_db("sap"); 
$email = $_POST['Email'];
$firstname = $_POST['Firstname'];
$lastname = $_POST['Lastname'];
$age = $_POST['Age'];
$address = $_POST['Address'];
$query = "UPDATE personal SET firstname = '$firstname', lastname = '$lastname', age = '$age', address = '$address' WHERE email = '$email'";
mysql_query($query) or die ("Query save failed : ". mysql_error());
?>