<?php 
/**
 * 
 */

require('../lib/Authentication.php');
class Logout{

  public function main() {
    $authentication = new Authentication();
    $authentication->logout();

  }
}
$logout = new logout();
$logout->main();
?>
