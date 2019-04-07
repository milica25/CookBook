<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet"/>
    <link rel="stylesheet" href="css/style.css">
    <title>Edit Post Page</title>
</head>
<body id="editPostBody">
    <form action="editPost.php" method="POST">
    <input type="text" name="editText" value="{$currentPost}">
    <input type="hidden" name="postId" value="{$postId}">
    <input type="submit" name="save" id="saveChanges" value="Sačuvaj izmene">
    <a id="back" href="profile.php">vrati se nazad</a>
    </form>

</body>
</html>