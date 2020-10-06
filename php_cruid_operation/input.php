<?php 
include "connection.php";

// var_dump($_POST);   
$input=$db->exec(" insert into siswa(nama,role) values('".$_POST['nama']."','".$_POST['role']."')");// exsekusi database kembali ke index

if($input)
{
    header("Location:index.php");
}

