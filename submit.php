<?php


$payload = file_get_contents('php://input');
$data = json_decode($payload); 

// $showAlert = false;
$showError = false;
if(ISSET($_POST['submit'])){ 

  //Checkwhether this username Exists
  $existSqL = "SELECT * FROM `users` WHERE username = '$data->uname'";
  $result = mysqli_query($conn, $existSqL);
  $numExistRows = mysqli_num_rows($result);
  if($numExistRows > 0){
    $showError = "username Already Exists";
  }

  
else{
  if(($data->upass == $data->ucpass)){
    $sql = "INSERT INTO `users` (`username`, `password`, `date`) VALUES ('$data->uname', '$data->upass', CURRENT_TIMESTAMP)";
    $result = mysqli_query($conn, $sql);
    if($result){
    //   $showAlert = true;
    }
  }
  else{
     $showError = "passwords donot match";
  }
}

}
?>