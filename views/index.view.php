<!DOCTYPE html>

<html lang='en-US'>

    <head>

        <title>test page</title>

        <meta charset='utf-8'>

        <meta name='viewport' content='width=device-width, intial-scale=1'>
    
    </head>

    <body>

        <nav>
            
            <ul>
                <li><a href='/about'>about</a></li>
                
                <li><a href='/contact'>contact</a></li>
                
            </ul>

        </nav>


        <?php foreach ($users as $user) : ?>
            <li><?= $user->name; ?></li>
        <?php endforeach; ?>

        <h3>Submit Username</h3>

        <form method='POST' action='/users' id='register'>
            
            Username<input type='text' name='username' required>
            <?php if (isset($error)){
            echo $error; }?>

            Password<input type='password' name='password' required>

            <button type='submit'>Submit</button>

        </form>

        <form method='POST' action='/login'>
            
            <label for='username'>Username :</label>
            <input type='text' name='username' required>
 
            <label for='password'>Password :</label>
            <input type='password' name='password' required>

             <?php if (isset($loginError)){
            echo $loginError; }?>


            <button type='submit'>Submit</button>
        
        </form>

        <!-- <script src='registerFail.js'></script> -->
    </body>

</html>
