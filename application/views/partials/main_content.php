<body class="home">
<div id="container">
    <div id="top">
      <div class="topcenter">
        <h2><a class="addbtn">Add Folder</a></h2>
        <h2><a class="deletebtn" href="<?php echo base_url();?>index.php/home/delete">DeleteFolders</a></h2>
      </div>    
      <div class="navdescription"><span>Home</span></div>
    </div>
    
      <div class="projectFolders">
      <?php foreach($foldername as $row) { ?>
        <div class="folder <?php echo $row->folderName; ?>">
          <button class="<?php echo $row->folderName; ?>"><?php echo $row->folderName; ?></button>
        </div>
        <script>
            $(function () {
              $('button.<?php echo $row->folderName; ?>').bind('click', 
                function() { $('.open.<?php echo $row->folderName;?>').show() });

              $('.gohome').bind('click', 
                function() { $('.open.<?php echo $row->folderName;?>').hide() });
            });
        </script>
      <?php } ?>

  <?php foreach($foldername as $row) { ?>
        <div class="open <?php echo $row->folderName; ?>">
          <h1><?php echo $row->folderName; ?></a></h1>
          <a class="gohome">Home</a><a class="addimagebtn">Add Image</a>
          <div class="textarea">
            <div class="edititable"contenteditable="true" focus="true">
              Your Content Goes Here
            </div>
          </div>
        </div>
      <?php } ?>
 </div>
      <div id="bottom">
      <div class="formWrapper">
        <form accept-charset="utf-8" method="post" action="<?php echo base_url(); ?>index.php/home/create" id="cf_form">
          <input type="text" name="folderName" placeholder="Enter new Folder" class="required" required/>
        <?php echo form_submit('createFolder', 'Create Folder'); ?>
        <?php echo form_close(); ?>
        <?php echo validation_errors('<p class="error">'); ?>
    </div>
    </div>  
  </div><!-- End of container div -->