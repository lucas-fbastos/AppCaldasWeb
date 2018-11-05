<?php 
session_start();
 if(!isset($_SESSION['userID'])){
          header('location: ../login/admin.php');
          exit();
      }
require_once('../sql/Sql.php');
$sql = New Sql;
 $user = $sql->selectId($_SESSION['userID']);

 ?>