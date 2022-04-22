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
        </div>
</header>
<div class="container">
    <div class="width-6">
        <h1>Add a New Story</h1>
        <form method="POST" action="addAuthor.php">
            <div>
                <label>Headline</label><br>
                <input type="text" name="headline">
            </div>
            <div>
                <label>Short Headline</label><br>
                <input type="text" name="short_headline">
            </div>
            <div>
                <label>Sub Heading</label><br>
                <input type="text" name="sub_heading">
            </div>
            <div>
                <label>Article</label><br>
                <input type="text" name="article">
            </div>
            <div>
                <label>Summary</label><br>
                <input type="text" name="summary">
            </div>
            <div>
                <label>Date</label><br>
                <input type="text" name="date">
            </div>
            <div>
                <label>Time</label><br>
                <input type="text" name="time">
            </div>
            <div>
                <label>Category</label><br>
                <input type="text" name="category_id">
            </div>
            <div>
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