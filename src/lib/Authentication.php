<?php 
require('../util/DB.php');
class Authentication
{
  public function make_login(){
    session_start();
    if ($_POST['password'] == '123') {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['password'] = $_POST['password'];
      $_SESSION['login'] = 'login';
      return header("location: index.php");
    }else{
      return $error = "Usuario não encontrado";
    }
  }

  public function has_login() {
    session_start();
    if ($_SESSION['login'] != 'login') {
      header("location: login.php");
      die();
      return true;
    }else{
      return false;
    }
  }
  public function logout(){
    session_unset();
    session_destroy();
  }
}
?>
