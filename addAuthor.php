<?php
  require_once 'classes/DBConnector.php';

  try {
      
    $data = [
        'first_name' => "test",
        'last_name' => "test2",
        'link' => "asdggafgasfgaafad"
    ];
      
    Post::create('authors', $data);

    header("Location; index.php"); 
      
   
   } catch (Exception $e) {
    die("Exception: " . $e->getMessage());
    }
?>