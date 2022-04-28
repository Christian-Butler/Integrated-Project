<!-- <?php
require_once 'classes/DBConnector.php';

try {

    $categories = Get::all('categories');
    $authors = Get::all('authors');
} catch (Exception $e) {
    die("Exception: " . $e->getMessage());
}
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/grid.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Add Story</title>
</head>
<body>
<header >
        <div class="flex">
            <a href="index.php"><h2>Home</h2></a>
            <a href="addAuthorForm.php"><h2>Add Authors</h2></a>
            <a href="addStoryForm.php"><h2 class ="flex2">Add Story</h2></a>
            <a href="editStoryForm.php"><h2>Edit Story</h2></a>
            <a href="editAuthorForm.php"><h2>Edit Author</h2></a>
        </div>
</header>
<div class="container">
    <div class="width-6">
        <h1>Add a New Story</h1>
        <form method="POST" action="addStory.php">
            <div class="headline_error">
                <label>Headline</label><br>
                <input type="text" name="headline">
            </div>
            <div class = "short_heading_error">
                <label>Short Headline</label><br>
                <input type="text" name="short_heading">
            </div>
            <div class = "sub_heading_error">
                <label>Sub Heading</label><br>
                <input type="text" name="sub_heading">
            </div>
            <div class = "article_error">
                <label>Article</label><br>
                <input type="text" name="article">
            </div>
            <div class ="summary_error">
                <label>Summary</label><br>
                <input type="text" name="summary">
            </div>
            <div class ="date_error">
                <label>Date</label><br>
                <input type="text" name="date">
            </div>
            <div class= "time_error">
                <label>Time</label><br>
                <input type="text" name="time">
            </div>
            <div class="category_id_error">
                <label>Category</label><br>
                <input type="text" name="category_id">
            </div>
            <div class= "author_id_error">
                <label>Author</label><br>
                <input type="text" name="author_id">
            </div>
            <a href="index.php">Cancel</a>
            <input type="submit">
        </form>
    </div>


</div>
</body>
</html>