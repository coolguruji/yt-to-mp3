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

// Creating object
  $object = new ytapi();

// YOUTUBE VIDEO ID
  $response = $object->fetch('lF-jPBnZ098');

// To print array response 
  //print_r($response);

        // FOR DIRECT HTML LINK
        if(isset($response['data']['html'])) {
         echo $response['data']['html'];
        }

        // FOR A HREF LINK
        if(isset($response['data']['link'])) {
         echo $response['data']['link'];
        }

        // FOR JAVASCRIPT EMBED CODE
        if(isset($response['data']['js'])) {
         echo $response['data']['js'];
        }

        // FOR IFRAME LINK EMBED CODE
        if(isset($response['data']['iframe'])) {
         echo $response['data']['iframe'];
        }
?>
