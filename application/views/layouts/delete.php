<!DOCTYPE html>
<?php $this->load->view('partials/page_head'); ?> 
<body>
  <div id="container">
    <div id="top">
      <div class="topcenter">
       <h2><a class="homebtn" href="<?php echo base_url();?>">Home</a></h2>
      </div>
      <div class="navdescription"><span>Delete Page</span></div>
    </div>
    
      <div class="projectFolders">
      <?php foreach($foldername as $row) { ?>
        <div class="folder">
          <button><?php echo $row->folderName; ?></button>
          <div class="delete">
            <form name="delete" method="post" action="<?php echo base_url(); ?>index.php/home/folderdeleted">    
              <p>
                <input name="checkbox" value="<?php echo $row->folderName; ?>" type = "checkbox" id = "check_<?php echo $row->folderName; ?>"/>
                <?php echo form_submit('deleteFolder', 'Delete'); ?>
              </p>
          </form>
          </div>
        </div>
      <?php } ?>
    </div>
  </div><!-- End of container div -->
</body>
</html>
