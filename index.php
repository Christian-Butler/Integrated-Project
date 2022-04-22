<?php

require_once 'classes/DBConnector.php' ;

try {
 
    $worldStories = Get::byCategory('World', 4);
    $sportStories = Get::byCategory('Sport', 6);
    $opinionStories = Get::byCategory('Opinion', 1); 

} catch (Exception $e) {
    die("Exception: " . $e->getMessage());
}
//  echo "<pre>";
//  print_r($errors);
//  echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<title> Home Page </title>

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
            <!-- creating a loop to display the main article -->
         <?php foreach($opinionStories as $opinionStory) { 
            $author = GET::byId('authors',$opinionStory->author_id); ?>
            <h4 class="tag">Opinion</h4>
            <h1>
            <a href="article.php?id=<?= $opinionStory->id ?>"><?= $opinionStory->headline ?> </a><?= $opinionStory->headline ?> <!-- Vladimir Putin sits atop a crumbling pyramid of power -->
            </h1>
            <p class="sub">
                <span><?= $author->first_name; ?> <?=$author->last_name; ?> </span>
                <?=$opinionStory->time ?> <?=$opinionStory->date ?><!-- By Max Lawton-27th Feb 2022 -->
            </p>
            <p>
             <a href="article.php?id=<?= $opinionStory->id ?>"> 
               <?= substr($opinionStory->article ,0,1081) ?>...
            </p></a>
        <?php }?>
        </div>

        <div class="width-6 nestedHalf">
        <?php foreach($worldStories as $worldStory){    ?>
            <div class="width-1">
                <h4 class="tag">World</h4>
                <h3>
                 <a href="article.php?id=<?=$worldStory->id?>"><?= $worldStory->headline ?></a><?=$worldStory->headline?>
                </h3>
                <p>
                <a href="article.php?id=<?= $worldStory->id ?>"> 
                   <?=substr($worldStory->article ,0,206) ?>...
                </p></a>
            </div>
       
            <?php  } ?>
        </div>





      <!-- creating a loop to displat a row of sport stories -->
       <div class="width-12 nested">
        <?php foreach($sportStories as $sportStory){    ?>
     

           
        
            <div class="width-2 ">
                <h4 class="tag">Sport</h4>
                <h2 class= "sport-margin">
                <a href="article.php?id=<?=$sportStory->id?>"><?=$sportStory->headline ?></a><?= $sportStory->headline ?>
                </h2>
                <p>
                <a href="article.php?id=<?= $sportStory->id ?>"> 
                <?=substr($sportStory->article ,0,148)?>...
                </p></a>
            
         
            </div>
        <?php  } ?>
    </div>

 </div>
</body>

</html>