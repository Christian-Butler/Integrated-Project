<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/grid.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Add Author</title>
</head>
<body>
<header >
        <div class="flex">
            <a href="index.php"><h2>Home</h2></a>
            <a href="addAuthorForm.php"><h2>Add Authors</h2></a>
            <a href="addStoryForm.php"><h2>Add Story</h2></a>
            <a href="editStoryForm.php"><h2>Edit Story</h2></a>
            <a href="editAuthorForm.php"><h2>Edit Author</h2></a>
        </div>
</header>
<div class="container">
    <div class="width-`12">
        <h1>Edit a Author</h1>
        <form method="POST" action="editAuthor.php">
            <div>
                <label>First Name</label><br>
                <input type="text" name="first_name">
            </div>
            <div>
                <label>Last Name</label><br>
                <input type="text" name="last_name">
            </div>
            <div>
                <label>Link</label><br>
                <input type="text" name="link">
            </div>
            <a href="index.php">Cancel</a>
            <input type="submit">
        </form>
    </div>


</div>
</body>
</html>