<?php 

$conn = mysqli_connect('localhost','root','');
$db = mysqli_select_db($conn, 'superindo');

if(!$db){
    echo "Database Tidak Bisa Diakses!!";
}

?>