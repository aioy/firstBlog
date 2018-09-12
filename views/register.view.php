
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
                <!-- username is taken error message -->
                <?php if (isset($error)) : ?>
                        <h2><?php echo $error ?></h2>
                <?php endif; ?>


                <?php if (isset($loginError)){
                echo $loginError; }?>

   
                <input type='password' name='password' placeholder='Password' required>

                <button type='submit'>
                    <span>Register</span>
                </button>

                <p>or <a href='/loginForm'>login</a></p>

            </form>
        
        </div>

        <?php endif; ?>


    </body>

</html>