
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
                <li><a href='/about.php'>about</a></li>
                <li><a href='/contact.php'>contact</a></li>
                
            </ul>

        </nav>

        <ul>

            <?php foreach($posts as $post): ?>

                <li>

                    <?php echo $post->comment; ?>

                </li>

            <?php endforeach; ?>
    
        </ul>

    </body>

</html>
