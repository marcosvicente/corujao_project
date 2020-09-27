<?php 

require('../lib/Authentication.php');
class IndexAdmin{
  public function main(){
    $authentication = new Authentication();

    include('../pages/admin/index.php');
  }
}


$index = new IndexAdmin();
$index->main();
?>
