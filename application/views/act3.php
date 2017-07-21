<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab #1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS -->
        <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
         <!-- Optional  -->
         <!-- <link href="../assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">  -->
    </head>
    <body>
        
        <div class="container">
            
            
            <div class="row" style="padding:20px;">
                
                <?php 

                // print_r($_SESSION);
                
                if(isset($_SESSION['nama'])) { 
                
                ?>

                <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Warning!</strong> Better check yourself, you're not looking too good.
                </div>

                <?php } ?>

            </div>
            

        </div>
        
        <!--Javascript  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    
    </body>
</html>