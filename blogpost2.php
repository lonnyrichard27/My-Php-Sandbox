<?php
    require('db.php');

    // check for submit
    if(isset($_POST['submit'])) {
        // get the form data
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);

        $query = "INSERT INTO post(title, author,body) VALUES('$title', '$author', '$body')";
    
        if (mysqli_query($conn, $query)){
            header('Location:'.)
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP Blog Form</title>
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cerulean/bootstrap.min.css"> 
    </head>
    <body>
    <div class="container mt-5">
        <h1>Add Post</h1>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Author</label>
                <input type="text" name="author" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="body" class="form-control">
            </div>
            <input type="submit" name="submit" value="submit" class="btn btn-primary">
        </form>
        </div>
    </body>
</html>