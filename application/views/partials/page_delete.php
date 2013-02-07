<div id="container">
    <div id="top">
      <a class="home" href="<?php echo base_url();?>home">Home</a><h1>DesignTrap</h1>
    </div>
    <div class="navdescription"><span>Delete Page</span></div>
      <div class="projectFolders">
      <?php foreach($foldername as $row) { ?>
        <div class="folder">
          <a href="<?php base_url();?><?php echo $row->folderName; ?>"><?php echo $row->folderName; ?></a><br />
          <div class="delete">
            <form>    
              <p>
                <label>Delete</label>
                <input type = "checkbox" id = "check_<?php echo $row->folderName; ?>"/>
              </p>
          </form>
          </div>
        </div>
      <?php } ?>
    </div>
      <div id="bottom">
      <div class="formWrapper">
         <div class="deletefolder">Delete Folders</div>
    </div>  
  </div><!-- End of container div -->