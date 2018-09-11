
<!DOCTYPE html>

<html lang='en-US'>

    <head>

        <title>test page</title>

        <meta charset='utf-8'>

        <meta name='viewport' content='width=device-width, intial-scale=1'>

        <!-- main css -->
        <link href='styles/main.css' rel='stylesheet'>

        <!-- font -->
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

    </head>

    <body>

        <?php if(!isset($_SESSION['username'])) : ?> 

        <div class='centered'>
            
            <form class='form' method='POST' action='/users' id='register'>

                <label>Register</label>

                <input type='text' name='username' placeholder='Username' required>
                <?php if (isset($error)){
                        echo $error;
                     }?>
                     
                <input type='password' name='password' placeholder='Password' required>

                <button type='submit'>Register</button>

            </form>
        
        </div>

        <?php endif; ?>


    </body>

</html>