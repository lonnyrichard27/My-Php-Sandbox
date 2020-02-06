<?php
    require('db.php');

    // create query
    $query = 'SELECT * FROM posts';

    // Get result
    $result = mysqli_query($conn, $query);
 
    // fetch data
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
        <h1>Posts</h1>
            <?php foreach ($posts as $post) : ?>
                <div class="well">
                    <h3><?php echo $post['title']; ?></h3>
                    <small>Created on <?php echo $post['create_at']; ?> by <?php echo $post['author']; ?></small>
                    <p><?php echo $post['body']; ?></p>
                    <a href="post.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Read more</a>
                </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>