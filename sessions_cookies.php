<?php
    if(isset($_POST['submit'])){
        // start the seesion
        session_start(); 

        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);

    }
?>
< !DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Session</title>
</head>
<body>
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="name" placeholder="please enter name">
    <br>
    <input type="text" name="email" placeholder="please enter email">
    <br>
    <input type="submit" name="submit" >
   </form>   
</body>
</html>