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
    <div class="alert">
      <h1>Upload Failed</h1>
      <h2><?php echo  '<p>' . $this->upload->display_errors() . '</p>'; ?></h2>
      <hr/>
      <a class="homebtn" style="text-indent: -5000px" href="<?php echo base_url(); ?>">Go Home</a>
    </div>
  </div>
</body>
</html>