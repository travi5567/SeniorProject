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

<?php echo form_open_multipart('upload/do_upload');?>

<input type="file" name="userfile" size="20" />
<br /><br />
<input type="submit" value="upload" />

</form>

</body>
</html>

