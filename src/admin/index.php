<?php 

require('../lib/Authentication.php');
class IndexAdmin{
  function __construct() {
  } 

  public function main(){
    include('../pages/admin/index.php');
  }
}


$index = new IndexAdmin();
$index->main();
?>
