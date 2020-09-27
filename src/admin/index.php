<?php 

require('../lib/Authentication.php');
class IndexAdmin{
  function __construct() {
  } 

  public function main(){
    $authentication = new Authentication();
    $authentication->has_login();
    include('../pages/admin/index.php');
  }
}


$index = new IndexAdmin();
$index->main();
?>
