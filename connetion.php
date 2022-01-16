<?php
// $hostname='localhost';
// $username='root';
// $password='yogita@84';
// $db='form';
$hostname='31.220.110.201';
$username='u964538868_testForStudy';
$password='JainamJain@12345678';
$db='u964538868_testForStudy';
$conn=new mysqli($hostname,$username,$password,$db);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Successfuly conected";
}

?>