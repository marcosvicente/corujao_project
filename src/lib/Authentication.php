<?php 
require('../util/DB.php');

session_start();
class Authentication
{
  private function get_value_user() {
    $db = new DB();
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM corujao.usuario where email = '". $email ."';";
    $result = mysqli_query($db->connect_mysql(), $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  }
  public function make_login(){
    if ($_POST['senha'] == '123') {
      $_SESSION['email'] = $_POST['email'];
      $_SESSION['senha'] = $_POST['senha'];
      $_SESSION['login'] = true;
      return header("location: index.php");
    }else{
      return $error = "Usuario não encontrado";
    }
  }

  public function has_login() {
    if(isset($_SESSION["login"]) && $_SESSION["login"] === true){
      header("location: index.php");
      exit();
    }else{
      header("location: login.php");
      exit();

    }
  }
  public function logout(){
    session_unset();
    session_destroy();
    header("location: login.php");
  }
}
?>
