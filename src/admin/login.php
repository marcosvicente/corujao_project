<?php 
    /**
     * 
     */

    require('../util/ConnectMysql.php');
    class Login extends ConnectMysql{
        
        public function make_login(){
            $conn = new ConnectMysql();
            $this->get('admin');
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
                return header("location: login.php");
                die();
            }else{
            
            }
        }
        public function logout(){
            session_unset();
            session_destroy();
        }
        public function main() {
            $this->has_login();
            include_once('../pages/admin/login.php');
        }

    }


$login = new Login();
$login->main();
?>
