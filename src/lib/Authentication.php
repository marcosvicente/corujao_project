<?php 
require('../util/DB.php');

session_start();
class Authentication
{
  public function make_login(){
    $email = $_POST['email'] ;
    $data = $this->get_value_user($email);
    if ($_POST['senha'] === $data['senha'] && $_POST['email'] === $data['email']) {
      $_SESSION['email'] = $_POST['email'];
      $_SESSION['name'] = $data['nome'];
      $_SESSION['senha'] = $_POST['senha'];
      $_SESSION['login'] = true;
      return header("location: index.php");
    }else{
      echo "Usuario não encontrado";
    }
  }
 private function get_value_user($email) {
    $db = new DB();
    $sql = "SELECT * FROM corujao.usuario where email = '". $email ."';";
    $result = mysqli_query($db->connect_mysql(), $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    print_r($row);
    return $row;
  }

  public function has_login() {
    if (isset($_SESSION["login"])){
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
