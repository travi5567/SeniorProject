<!DOCTYPE html>
<?php $this->load->view('partials/page_head'); ?> 
<body class="home">
  <div id="container"> 
    <div id="top">
      <div class="topcenter">
        <h2><a class="addfolder_btn">Add Folder</a></h2>
        <h2><a class="deletefolder_btn" href="<?php echo base_url();?>index.php/home/delete">DeleteFolders</a></h2>
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
        <div id="top">
          <div class="topcenter">
            <section class="nav"><a class="gohome">Home</a><a class="addimagebtn">Add Image</a><a class="viewimagesbtn">View Images</a></section>
          </div>    
          <div class="navdescription"><span><?php echo $row->folderName;?></span></div>
        </div>
        <div class="textarea">
          <div class="edititable" rows="20" cols="80" style="height: 200px" contenteditable="true" focus="true">
            Your Content Goes Here
          </div>
        </div>
      </div>       
    <?php } ?>

      <div id="imagefiles">
        <ul>
          <?php foreach ($imagename as $img) { ?>
            <li draggable="true">
              <img  class="image" src="<?php echo base_url();?>uploads/<?php echo $img->imageName; ?>" alt="<?php echo $img->imageName; ?>">
            </li>
          <?php } ?>
        </ul> 
      </div>

    <div id="uploadimages">
      <?php echo form_open_multipart('home/do_upload');?>
      <input type="file" name="userfile" size="20" />
        <br /><br />
      <input type="submit" value="Add Image" />
      </form>
    </div>
    <div id="bottom">
      <div class="formWrapper">
        <form accept-charset="utf-8" method="post" action="<?php echo base_url(); ?>index.php/home/create" id="cf_form">
          <input type="text" name="folderName" placeholder="Enter new Folder" class="required" required/>
          <?php echo form_submit('createFolder', 'Create Folder'); ?>
        <?php echo form_close(); ?>
      <?php echo validation_errors('<p class="error">'); ?>
    </div>  
  </div><!-- End of container div -->
</body>
</html>
