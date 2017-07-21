<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab #1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap Optional Css  -->
        <link href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    </head>
    <body>
        
        <div class="container">
             
             <?php $this->load->view($content); ?>

            
        </div>
        
        <!--Javascript  -->
        <!-- Required by Bootstrap JS  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JS  -->
        <script src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    
    </body>
</html>