<!DOCTYPE html>
<html>
<head>
  <title>Folder Created</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1,user-scalable=yes,width=960" />
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php echo base_url();?>stylesheets/screen.css" media="screen, projection" type="text/css" />
  <script type="text/javascript" src="<?php echo base_url();?>assets/javascript/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/javascript/script.js"></script>
</head>
<body>
  <div id="container">
    <div id='login_form'>
        <form action='<?php echo base_url();?>login/process' method='post' name='process'>
            <h2>User Login</h2>
            <br />
            <?php if(! is_null($msg)) echo $msg;?>   
            <hr>
            <div>         
            <p><label for='username'>Username</label>
            <input type='text' name='username' id='username' size='25' /></p>
        
            <p><label for='password'>Password</label>
            <input type='password' name='password' id='password' size='25' /></p>                            
        
            <input type='Submit' value='Login' />      
            </div>      
        </form>
    </div>
  </div>
</body>
</html>