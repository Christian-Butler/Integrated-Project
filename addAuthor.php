<?php
  require_once 'classes/DBConnector.php';

  try {
      
    $data = [
        'first_name' => $_POST[''],
        'last_name' => $_POST[''],
        'link' => $_POST['']
      ];
      
    Post::create('author', $data);

    header("Location; index.php"); 
      
   
   } catch (Exception $e) {
    die("Exception: " . $e->getMessage());
  }
?>