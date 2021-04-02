<?php
require_once("config.php");
function Connect(){
  global $connectionString, $user, $pass;
  try{
    $pdo = new PDO($connectionString, $user, $pass);
    return $pdo;
  }
  catch (PDOExecption $e) {
    die ( $e->getMessage()  );
  }
}
?>
