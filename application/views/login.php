<div class="row" style="margin-top:50px;">
                 
    <div class="col-md-offset-4 col-md-4">
        
        <?php echo validation_errors(); ?>

        <form action="<?php echo base_url(); ?>lab/authenticate" method="POST">
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