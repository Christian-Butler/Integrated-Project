<?php
  require_once 'classes/DBConnector.php';

  try {
      
    $data = [
        'first_name' => $_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'link' => $_POST['link']
      ];
      
    Post::edit('authors',$data);

    
    
  } catch (Exception $e) {
    die("Exception: " . $e->getMessage());
  }
  header("Location: index.php"); 
?>