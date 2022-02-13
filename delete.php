<?php 
require_once('./Requires/header.php');
require('./DataBase/DataBase.php'); ?>

deleted
<?php
var_dump(dirname(__FILE__));
if($_GET['send'] == "del"){
 $id = $_GET['id'];
 $sql =" DELETE FROM posts WHERE id = ?";
 $stmt = $pdo->prepare($sql);
 
 $stmt->execute([$id]);
header("Location:show.php",true);


 }else {
     echo "failed";
 } ?>
 <?php require_once('./Requires/footer.php'); ?>
