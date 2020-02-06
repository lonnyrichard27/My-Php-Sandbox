<?php
    // error messages
    $msg = '';
    $msgClass = '';

    // check submit
    if(filter_has_var(INPUT_POST, 'submit')){
        // get the form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // check required fields
        if (!empty($email) && !empty($name) && !empty($message)) {
            // Passed
            // check email
            if (filter_var($email. FILTER_VALIDATE_EMAIL) === false) {
                // Failed
                $msg = 'Please use a valid email';
                $msgClass = 'alert-danger';
            }  else{
                // Passed
                // recipient Email
                $toEmail = 'support@hayden.com';
                $subject = 'Contact Request Form'.$name;
                $body = '<h2>Contact Request</h2>
                    <h4>Name</h4><p>'.$name.'</p>
                    <h4>Email</h4><p>'.$email.'</p>
                    <h4>Message</h4><p>'.$message.'</p>';
              
                // Email headers
                $headers = 'MIME-Version: 1.0'.'\r\n';
                $headers = $headers .'Content-Type:text/html;charset=UTF-8'.'\r\n';
                
                // Additional Headers
                $headers = $headers.'From:'.$name.'<'.$email.'>'.'\r\n';
                if(mail($toEmail, $subject, $body, $headers)){
                    // email sent
                    $msg = 'Your email has been sent';
                    $msgClass = 'alert-success';
                } else {
                    $msg = 'Your email was not sent';
                $msgClass = 'alert-danger';
                }
            }
        } else {
            // Failed
            $msg = 'Please use a valid email';
            $msgClass = 'alert-danger';
        }    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"> -->
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
    <title>PHP Login Form</title>
</head>
<body>
   <nav class="navbar navbar-default bg-dark">
       <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand text-white">Haydens Form</a>
            </div>
       </div>
   </nav>
   <main class="container mt-5">
   <?php if ($msg != ''): ?>
        <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
   <?php endif; ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Name</label>
            <!-- code in value is meant to make user data in other fields stay when other data is incorrect -->
            <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $name: ''; ?>" class="form-control" />        
        </div>
        <div class="form-group">
            <label>Email</label>
            <!-- code in value is meant to make user data in other fields stay when other data is incorrect -->
            <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email: ''; ?>">        
        </div>
        <div class="form-group">
            <label>Message</label>
            <!-- code in value is meant to make user data in other fields stay when other data is incorrect -->
            <textarea name="message" class="form-control" value="<?php echo isset($_POST['message']) ? $message: ''; ?>" ></textarea>        
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
   </main>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</body>
</html>