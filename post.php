<?php
    require('db.php');

    // create query
    $query = 'SELECT * FROM posts WHERE id=';

    // Get result
    $result = mysqli_query($conn, $query);
 
    // fetch data
    $post = mysqli_fetch_assoc($result);

    //  free result
    mysqli_free_result($result);

    // close connection
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP Blog</title>
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cerulean/bootstrap.min.css"> 
    </head>
        <body>
            <div class="container mt-5">
                <h1><?php echo $post['title']; ?></h1>
                <small>Created on <?php echo $post['create_at']; ?> by <?php echo $post['author']; ?></small>
                <p><?php echo $post['body']; ?></p>
            </div>
        </body>
</html>