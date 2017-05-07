<?php

// Defining class
  class ytapi {
 
    public $json;
    public $jsonData;

       public function fetch($id) {
         // FETCHING DATA FROM SERVER
       $jsonData = file_get_contents("http://api.youtube6download.top/api/?id=$id");
       $json = json_decode($jsonData,TRUE);
       return($json);
   }

 }
 ?>
