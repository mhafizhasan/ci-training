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
                
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" 
                    data-toggle="modal" data-target="#myModal">
                Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
                    aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
            
            
            <div class="row" style="padding:20px;">
                
                <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Link with href
                </a>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Button with data-target
                </button>
                <div class="collapse" id="collapseExample" style="padding-top:10px;">
                    <div class="well">
                        ...
                    </div>
                </div>

            </div>
            

            
            <div class="row" style="padding:20px;">
                
                <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Warning!</strong> Better check yourself, you're not looking too good.
                </div>

            </div>

            
            <div class="row" style="padding:20px;">
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panel title</h3>
                    </div>
                    <div class="panel-body">
                        Panel content
                    </div>
                </div>

            </div>
            
            
            

        </div>
        
        <!--Javascript  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    
    </body>
</html>