<?php 
require('../lib/Authentication.php');

class Login extends Authentication{
    public function main() {
        $authentication = new Authentication();
        $authentication->make_login();
        include('../pages/admin/login.php');
    }
}


$login = new Login();
$login->main();
?>
