
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

        <form method='POST' action='/users'>
            
            Username<input name = 'username'></input>

            Password<input name = 'password'></input>

            <button type='submit'>Submit</button>

        </form>

    </body>

</html>
