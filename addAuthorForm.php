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
<div class="container">
    <div class="width-6">
        <h1>Add a New Author</h1>
        <form method="POST" action="addAuthor.php">
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