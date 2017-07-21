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
             
             <div class="row" style="margin-top:50px;">
                 
                    <div class="col-md-offset-4 col-md-4">
                        




                        <h1>Login Success</h1>
                        <p class="lead">Username: 
                            <?php echo $me['username']; ?>
                        </p>
                        
                        <p class="lead">Password:
                            <?php echo $me['password']; ?>
                        </p>

                        <h1>Get all users</h1>

                        <?php foreach($all as $a) { ?>
                        
                            <p>
                                Username: <?php echo $a['username']; ?>
                                Password: <?php echo $a['password']; ?>
                            </p>
                            
                        <?php } ?>

                        <h1>Register user</h1>

                        <form action="<?php echo base_url(); ?>lab/register" method="POST">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>

                    </div>

             </div>
            
        </div>
        
        <!--Javascript  -->
        <!-- Required by Bootstrap JS  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JS  -->
        <script src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    
    </body>
</html>