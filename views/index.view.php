<!DOCTYPE html>

<html lang='en-US'>

    <head>

        <title>test page</title>

        <meta charset='utf-8'>

        <meta name='viewport' content='width=device-width, intial-scale=1'>
    
        <!-- Bootstrap -->
        <link href='styles/bootstrap.min.css' rel='stylesheet'>

    </head>

    <body>

        <nav>
            
            <ul>
                <li><a href='/about'>about</a></li>
                
                <li class ='text-primary'><a href='/contact'>contact</a></li>
                
            </ul>

        </nav>


        <?php foreach ($users as $user) : ?>
            <li><?= $user->name; ?></li>
        <?php endforeach; ?>

        <?php if(!isset($_SESSION['username'])) : ?> 

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

        <?php endif; ?>
                    
        <?php if(isset($_SESSION['username'])) : ?> 
            <a href="logout">Logout</a>
        <?php endif; ?>

        <?php if(isset($_SESSION['username'])) : ?> 
          
          <h1> Welcome <?php echo $_SESSION['username']; ?> </h1>
          
          <form action='/picture' method='POST' enctype='multipart/form-data'>
             
              <label>description:</label><input type='text' name='desc'>
             
              <label>Image:</label><input type='file' name='img'>
              
              <button type='submit'>Submit</button>
  
          </form>
      
        <?php endif; ?>

         <?php foreach ($images as $image) : ?>
            <div>
                <img src='uploadedFiles/<?php echo $image->image; ?>' alt='$image->id'>
            </div> 
        <?php endforeach; ?>
                    
    </body>

</html>
