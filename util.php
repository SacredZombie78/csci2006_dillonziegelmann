<?php
require_once("config.php");
function Connect(){
  try{
    $pdo = new PDO($connectionString, $user, $pass);
  }
  catch (PDOExecption $e) {
    die ( $e->getMessage()  );
  }
}
?>
