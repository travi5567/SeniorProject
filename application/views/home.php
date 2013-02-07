<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1,user-scalable=yes,width=960" />
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php echo base_url();?>stylesheets/screen.css" media="screen, projection" type="text/css" />
  <script type="text/javascript" src="<?php echo base_url();?>assets/javascript/jquery.js"></script>
  
</head>
<body>
	<div id="container">
		<div id="top">
			<h1>DesignTrap</h1>
		</div>
    <div class="navdescription"><span>Home</span></div>
			<div class="projectFolders">
        <div class="folder">
          <span>Folder is awesome</span>
        </div>
        <div class="folder">
          <span>Folder is awesome</span>
        </div>
        <div class="folder">
          <span>Folder is awesome</span>
        </div>
        <div class="folder">
          <span>Folder is awesome</span>
        </div>
			</div>

      <div id="bottom">
      <div class="formWrapper">
        <form action="newFolder.php" id="newfolder">
          <input type="text" name="folderName" placeholder="Name of new Folder" />
          <input type="submit" value="CreateFolder" id="submit">
        </form>
      </div>
      <div class="formWrapper">
        <form action="deleteFolder.php" id="deletefolder">
          <input type="text" name="deletFolder" placeholder="Delete Folder" />
          <input type="submit" value="DeleteFolder" id="delete">
        </form>
      </div>
    </div>  
	</div><!-- End of container div -->
</body>
</html>
