<?php
  require_once 'classes/DBConnector.php';

  try {

     foreach($categoryStories as $categoryStory){
            
      if ($categoryStory->id !== $_GET['id']){}}

      
    
      
    $data = [
      'headline' => $_POST['headline'],
      'short_heading' => $_POST['short_heading'],
      'sub_heading' => $_POST['sub_heading'],
      'article' => $_POST['article'],
      'summary' => $_POST['summary'],
      'date' => $_POST['date'],
      'time'=> $_POST ['time'],
      'category_id' => $_POST ['category_id'],
      'author_id' => $_POST ['author_id']
      ];
      
    Post::edit('stories',$id, $data);

    header("Location; index.php"); 
      
   
   } catch (Exception $e) {
    die("Exception: " . $e->getMessage());
  }
?>