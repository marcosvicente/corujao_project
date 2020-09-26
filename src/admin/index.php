<?php 

require('login.php');

class IndexAdmin{
  function __construct() {
  } 

  public function main(){
    $login = new Login();
    $login->has_login(); 
  
    include('../pages/admin/index.php');
  }
}


$index = new IndexAdmin();
$index->main();
?>
