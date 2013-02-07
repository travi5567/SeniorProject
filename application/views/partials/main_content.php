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
          <button onClick="openFolder();"><?php echo $row->folderName; ?></button>
        </div>
      <?php } ?>

  <?php foreach($foldername as $row) { ?>
        <div class="open">
          <a href="<?php base_url();?><?php echo $row->folderName; ?>"><?php echo $row->folderName; ?></a><br />
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