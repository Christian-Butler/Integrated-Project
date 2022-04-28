<?php

require_once 'classes/DBConnector.php' ;

try {
 
    // $main_id = $_GET[`id`];
    $mainStory = GET::byId('stories', $_GET['id']);

    $category= Get::byId('categories', $mainStory->category_id);

    $categoryStories = Get::byCategory($category->name);

} catch (Exception $e) {
    die("Exception: " . $e->getMessage());  
}


//  echo "<pre>";
//  print_r($errors);
//  echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Article Page</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/grid.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<header>
<div class="flex">
            <a href="index.php"><h2>Home</h2></a>
            <a href="addAuthorForm.php"><h2>Add Authors</h2></a>
            <a href="addStoryForm.php"><h2>Add Story</h2></a>
            <a href="editStoryForm.php"><h2>Edit Story</h2></a>
            <a href="editAuthorForm.php"><h2>Edit Author</h2></a>
        </div>
</header>

<body>
    <div class="container">
    
        <div class="width-6">
            <!-- creating a function to pull the article from the database -->
          <?php
            $author = GET::byId('authors',$mainStory->author_id); ?>
            <h4 class="tag"><?= $category->name?></h4>
            <h1>
               <?= $mainStory->headline ?> <!-- Vladimir Putin sits atop a crumbling pyramid of power -->
            </h1>
            <h2>
                <?= $mainStory->short_heading?>
            <h2>
            <p class="sub">
                
                <span><?= $author->first_name; ?> <?=$author->last_name; ?> </span>
                <?php echo  $time = date("g:i", strtotime($mainStory -> time));  ?>  <?=$mainStory->date?><!-- By Max Lawton-27th Feb 2022 -->
            </p>
            <p>
               <?=$mainStory->article?>
          <?php ?>
        </div>
       <!-- creating a loop passing through story id  -->
        <div class="width-6 nestedHalf">
        <?php foreach($categoryStories as $categoryStory){
            
            if ($categoryStory->id !== $_GET['id']){

            
            ?>

            <div class="width-1">
                <h4 class="tag"><?= $category->name?>
               
            </h4>
                <h3>
                  <?= $categoryStory->headline ?> 
                </h3>
                <p>
                   <?=substr($categoryStory->article ,0,206) ?>...
                </p>
            </div>
       
            <?php  }} ?>
        </div>
    </div>
</body>
</html>