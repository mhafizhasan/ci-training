
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
                Username: <a href="<?php echo base_url(); ?>lab/update/<?php echo $a['id']; ?>"> 
                                    <?php echo $a['username']; ?> 
                            </a>
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
            <button type="submit" class="btn btn-primary">Register</button>
        </form>

    </div>

</div>
 