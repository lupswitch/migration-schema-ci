<!DOCTYPE html>
<html lang="es">
    <head>
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="Jonathan">     
        
        <title>Schema codeigniter</title>
            
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?= $this->libschema->getTemplate();?>">
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
        <script type="text/javascript">
            $.base_url = function( url ){return '<?= base_url();?>' + url };
            $.site_url = function( url ){return '<?= site_url();?>/' + url };
        </script>
        
    </head> 

    <body cz-shortcut-listen="true">
            
        <div class="container-fluid" >
            
            <div class="row">
                <div class="col-md-2">
                </div>   
                <div class="col-md-8">  
                    <form
                        action="<?= site_url('/app-admin/schema/login/');?>" 
                        autocomplete="off"  id="form-login"
                        class="form-horizontal jumbotron well" 
                        method="post" style="max-width:400px;margin:30px auto;">
                                            
                        <input style="display:none;" name="input_display_none[]" type="text">
                        <input style="display:none;" name="input_display_none[]" type="password">
                            
                        <h3>Access from config file</h3>
                        <div>
                            <input name="user" type="text" id="User"  class="form-control" placeholder="User"  autofocus="true"> 
                        </div>  
                        <div> 
                            <input name="password" type="password" class="form-control" placeholder="Password" >
                        </div>
                        <br>   
                        <div>   
                            <button class="btn btn-primary btn-block" type="submit">Login</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>  
    </body>


</html>
