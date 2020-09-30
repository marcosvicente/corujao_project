<?php 
/**
 * 
 */
class Noticia
{
  
  public function main(){
    include('../pages/admin/noticia.php');
  }
}
$noticia = new Noticia();
$noticia->main();
?>
