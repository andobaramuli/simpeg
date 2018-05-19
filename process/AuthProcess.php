<?php
  $authModel;
  require_once("../models/AuthModel.php");

  $authModel = new AuthModel();

  if($_POST){
    if(!empty($_POST['username']) && !empty($_POST['password'])){
      $result = $authModel->getUserAuth($_POST['username'],md5(TRIM($_POST['password'])));
      if(mysqli_num_rows($result) == 1){
        $data = mysqli_fetch_array($result);
        session_start();
        $_SESSION['namapengguna'] = $data['namapengguna'];
        $_SESSION['peranpengguna'] = $data['kodeperan'];
        $_SESSION['logged'] = 1;
        header("Location:../pages/dashboard.php");
      }else{
        header("Location:../index.php");
      }
    }else{
      header("Location:../index.php");
    }
  }else{
    header("Location:../index.php");
  }

?>
