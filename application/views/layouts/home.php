<!DOCTYPE html>
<?php $this->load->view('partials/page_head'); ?> 
<body class="homepage" onLoad="<?php foreach($foldername as $row) { ?>checkEdits_<?php echo $row->folderName; ?>(); <?php } ?>">
  <div id="container">
<!-- ****************** TOP NAVIGATION SECTION ********************--> 
<!-- ///////////////////////////////////////////////////////////// -->
    <div class="top">
      <div class="topcenter">
        <section class="nav"><a class="addfolder_btn">Add Folder</a><a class="deletefolder_btn" href="<?php echo base_url();?>index.php/home/delete">DeleteFolders</a><a class="deleteimage_btn" href="<?php echo base_url();?>index.php/home/gallery">DeleteImages</a></section>
      </div>    
      <div class="navdescription"><span>Home</span></div>
    </div>
  
<!-- ****************** PROJECT FOLDERS LOOP ********************--> 
<!-- /////////////////////////////////////////////////////////// -->
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
    </div>
<!-- ****************** OPENED FOLDERS LOOP MODULE ********************--> 
<!-- ///////////////////////////////////////////////////////////////// -->
    <?php foreach($foldername as $row) { ?>
      <div class="open <?php echo $row->folderName; ?>">
        <div class="top">
          <div class="topcenter">
            <section class="nav"><a class="gohome btn">Home</a><a class="addimagebtn btn">Add Image</a><a class="viewimagesbtn btn">View Images</a></section>
          </div>    
          <div class="navdescription"><span><?php echo $row->folderName;?></span></div>
        </div>
        <!-- END OF TOP NAV -->

        <div class="textarea">
          <div id="edit_<?php echo $row->id;?>" class="edititable" style="height: 200px; width: 300px;" contenteditable="true">
            <strong>Enter yuor content here. To insert images, click the View images button above and drag your selected image into this box.</strong>
            <p>Thank you, for choosing DesignTrap</p>
          </div>
        </div>
        <!-- END OF CONTENT EDITITABLE -->
      </div>
        <script type="text/javascript">
          $(function() {
            var someSection = document.getElementById('edit_<?php echo $row->id;?>');
              $(someSection).blur(function() {
                localStorage.setItem('edit_<?php echo $row->id;?>', this.innerHTML);
              });
          
              if(localStorage.getItem('edit_<?php echo $row->id;?>')) {
                someSection.innerHTML = localStorage.getItem('edit_<?php echo $row->id;?>');
              }
            });
        </script>
        <?php } ?>

<!-- ****************** IMAGE FILES LOOP MODULE ********************--> 
<!-- ////////////////////////////////////////////////////////////// -->
      <div id="imagefiles">
        <ul>
          <?php foreach ($imagename as $img) { ?>
            <li draggable="true">
              <img  class="image" src="<?php echo base_url();?>uploads/<?php echo $img->imageName; ?>" alt="<?php echo $img->imageName; ?>">
            </li>
          <?php } ?>
        </ul> 
      </div>

<!-- ****************** UPLOAD IMAGE MODULE ********************--> 
<!-- ////////////////////////////////////////////////////////// -->
    <div id="uploadimages">
      <h3>Upload you images to the gallery</h3>
      <p>click on the view images button to veiw your image gallery, you can then drag your image of choice to the edititable textbox</p>
      <div class="fileupload">
        <?php echo form_open_multipart('home/do_upload');?>
          <input type="file" name="userfile" class="file" />
            <br /><br />
          <input type="submit" value="Add Image" />
        </form>
      </div>
    </div>

<!-- ****************** BOTTOM CREATE FOLDER INPUT MODULE ********************--> 
<!-- //////////////////////////////////////////////////////////////////////// -->
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
</body>
</html>
