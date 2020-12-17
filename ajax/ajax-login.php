<?php

session_start();

$payload = file_get_contents('php://input');
$data = json_decode($payload); 


require_once('../util/_dbconnect.php');

    $username = $data->username;
    $password = $data->password;
    // $password = md5($data->password);

    $sth = $connection->prepare("SELECT * FROM `users` WHERE `username` = '{$username}' && `password` = '{$password}' ");
    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth->execute();
    $countSet = $sth->rowCount();
    
    if($countSet == 1){
            $_SESSION['username'] = $username;
            $_SESSION['loggedin'] = sha1($username.'CRYPT-VALUE');
            $resp = json_encode(array('status'=>'success', 'return_url'=>'welcome.php'));
            echo($resp);
    } else {
        $resp = json_encode(array('status'=>'error', 'msg'=>'Invalid User ID or Password'));
        echo($resp);
    }
?>