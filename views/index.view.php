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
            <a href="logout">Logout</a>
        <?php endif; ?>

        </nav>

        <?php if(isset($_SESSION['username'])) : ?> 
          
          <h1> Welcome <?php echo $_SESSION['username']; ?> </h1>
          
          <form action='/picture' method='POST' enctype='multipart/form-data'>
             
              <label>description:</label><input type='text' name='desc'>
             
              <label>Image:</label><input type='file' name='img'>
              
              <button type='submit'>Submit</button>
  
          </form>
      
        <?php endif; ?>

        <div class='imageContainer'>
            <?php foreach ($images as $image) : ?>
                <div class='post'>
                    <div class='post2'>
                        <img src='uploadedFiles/<?php echo $image->image; ?>' alt='$image->id'>
                        <h3><?php echo $image->user; ?></h3>
                        <p>"<?php echo $image->description; ?>"</p>
                    </div>
                </div> 
            <?php endforeach; ?>
        </div>
                    
    </body>

</html>
