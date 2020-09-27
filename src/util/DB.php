<?php

class DB{
   public function connect_mysql() {
      $servername = "localhost";
      $username = "root";
      $password = "123";
      try {
         return $conn = new mysqli($servername, $username, $password);
      } catch (Exception $e) {
         die("Connection failed: " . $conn->connect_error);
      }
   }

   private function create_db($name) {
      // Create database
      $sql = "CREATE DATABASE IF NOT EXISTS $name";
      try {
         $this->connect_mysql()->query($sql);
      } catch (Exception $e) {
         die("Error creating database: " . $this->connect_mysql()->error);
      }
   }



}
?>
