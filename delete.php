<?php 

echo $_GET['id'];

include_once('conection.php');

$qeu="delete from Emp where id=:id";
$st=$db->prepare($qeu);
$st->execute(array(
        'id'=>$_GET['id']
    ));
header('location:allemp.php');
?>