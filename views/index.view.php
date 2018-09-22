<!DOCTYPE html>

<html lang='en-US'>

    <head>

        <title>test page</title>

        <meta charset='utf-8'>

        <meta name='viewport' content='width=device-width, intial-scale=1'>
    
        <!-- Bootstrap -->
        <!-- <link href='styles/bootstrap.min.css' rel='stylesheet'> -->

        <!-- main css -->
        <link href='styles/main.css' rel='stylesheet'>

        <!-- font -->
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

    </head>

    <body>

        <nav class='main-nav'>

        <?php if(!isset($_SESSION['username'])) : ?> 
            
            <ul class="nav-obj">
                <li class="nav-link">
                    <a class="" href='/loginForm'>Login</a>
                </li>
                
                <li class ='nav-link'>
                    <a class="" href='/register'>Register</a>
                </li>
                
            </ul>
        <?php endif; ?>

        <?php if(isset($_SESSION['username'])) : ?> 
            <a id='logout' href="logout">Logout</a>
        <?php endif; ?>

        </nav>

        <?php if(isset($_SESSION['username'])) : ?> 

            <div class='online'>
            
                <h1> Welcome <?php echo $_SESSION['username']; ?> </h1>
                
                <form action='/picture' method='POST' enctype='multipart/form-data'>
                    
                    <label>description:</label><textarea rows='5' cols='35' name='desc'></textarea>
                    
                    <label>Image:</label><input type='file' name='img'>
                    
                    <input type="submit" value="Submit">
        
                </form>

            </div>
        
        <?php endif; ?>

        <div class='imageContainer'>
            <?php foreach ($images as $image) : ?>
                <div class='post'>
                    <div class='post2'>
                        <img src='uploadedFiles/<?php echo $image->image; ?>' alt='$image->id'>
                        <h3><?php echo $image->user; ?></h3>
                        <p>"<?php echo $image->description; ?>"</p>
                        <?php if(isset($_SESSION['username']) && $_SESSION['username'] == $image->user) : ?> 
                            <form class='postDelete' action='/delete' method='POST'>
                                <input type='hidden' name='deletePost' value='<?php echo $image->id; ?>'>
                                <input type='hidden' name='image' value='uploadedFiles/<?php echo $image->image ?>'>
                                <input type="submit" value="Delete">
                            </form>
                            <form class='postEdit' action='/update' method='POST'>
                                <input type='hidden' name='updateId' value='<?php echo $image->id; ?>'>
                                <input type='text' name='newDesc'>
                                <input type="submit" value="Edit">
                            </form>
                        <?php endif; ?>
                    </div>
                </div> 
            <?php endforeach; ?>
        </div>
                    
    </body>

</html>