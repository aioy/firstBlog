<!DOCTYPE html>

<html lang='en-US'>

    <head>

        <title>test page</title>

        <meta charset='utf-8'>

        <meta name='viewport' content='width=device-width, intial-scale=1'>
    
    </head>

    <body>

    <?php if(isset($_SESSION['username'])) : ?> 
          
        <h1> Welcome <?php echo $_SESSION['username']; ?> </h1>
        
        <form action='/picture' method='POST' enctype='multipart/form-data'>
           
            <label>description:</label><input type='text' name='desc'>
           
            <label>Image:</label><input type='file' name='img'>
            
            <button type='submit'>Submit</button>

        </form>
    
    <?php endif; ?>

    </body>

</html>
