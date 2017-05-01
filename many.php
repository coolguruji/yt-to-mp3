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

// MULTIPLE YOUTUBE VIDEO ID's SEPARATED BY COMMNA (,)
  $ids = 'lF-jPBnZ098,OmAlu5T44t8,GTJHrHHAElU';
  $response = $object->fetch($ids);

// To print array response 
  //print_r($response);

   foreach($response as $div) {

        echo '<center>Youtube to MP3 Link for: <b>'.$div['video_id'].' video id</b></center><br>';


        // FOR DIRECT HTML LINK
        if(isset($div['html'])) {
         echo "HTML LINK: " . $div['html'] . "<br/>";
        }

        echo "<br><hr><br>";

        // FOR A HREF LINK
        if(isset($div['link'])) {
         echo "A HREF LINK: " . $div['link'] . "<br/>";
        }

        echo "<br><hr><br>";

        // FOR JAVASCRIPT EMBED CODE
        if(isset($div['js'])) {
         echo "JS Embed code: " . $div['js'] . "<br/>";
        }

        echo "<br><hr><br>";

        // FOR IFRAME EMBED CODE
        if(isset($div['iframe'])) {
         echo "Iframe Embed code: " . $div['iframe'] . "<br/>";
        }

        echo "<br><hr><br>";

   }
?>
