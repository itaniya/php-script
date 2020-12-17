<?php

$payload = file_get_contents('php://input');
$data = json_decode($payload); 

// Hold data in Variables
$username = $data->uname;
$pwd = $data->upass;
$cnf_pwd = $data->ucpass;

require_once('../util/_dbconnect.php');

$uaCheckSTH = $connection->prepare("SELECT * FROM `users` WHERE `username` = '{$username}'");
$uaCheckSTH->setFetchMode(PDO:: FETCH_OBJ);
$uaCheckSTH->execute();
$uCount = $uaCheckSTH->rowCount();

if($uCount == 0){

  $sth = $connection->prepare("INSERT INTO `users` (`username`, `password`) VALUES (:db_username, :db_pwd)");

    $sth->bindParam(':db_username', $username);
    $sth->bindParam(':db_pwd', $pwd);

    if($sth->execute()){
      $resp = json_encode(array('status'=>'success','msg'=>'Successfully Registerd', 'return_url'=>'welcome.php'));
        echo($resp);
    }else{
      $resp = json_encode(array('status'=>'error', 'msg'=>'Error occur while inserting record'));
        echo($resp);
    }

}else{
  $resp = json_encode(array('status'=>'info', 'msg'=>'Username is not available '));
   echo($resp);
}
?>