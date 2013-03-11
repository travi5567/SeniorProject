<!DOCTYPE html>
<?php $this->load->view('partials/page_head'); ?> 
<body class="homepage" >
  
  <section id="container">
    <script>
      $(document).ready(function() {
          $('.bottom').on('click', '.goback', function(e) {
              //$('#uploadimage').hide();
              $('.open:visible').hide();
              $('li.goback').remove();
              $('ul.bottom li').css('width', '50%');
              $('ul.bottom ul li').css('font-size', '18px');
              
          });

            $('.projectFolders').on('click', '.folder', function() {
                $('#bottomnav ul').prepend('<li class="goback"><a>Go Home</a></li>');
                $('#bottomnav ul li').css('width', '33%');
                $('#bottomnav ul li').css('font-size', '14px');
            });

      });
    </script>


<!-- ****************** TOP NAVIGATION SECTION ********************--> 
<!-- ///////////////////////////////////////////////////////////// -->
    <section class="top opened">
      <div class="topcenter">
        <div class="nav">
          <ul>
            <li><a class="addfolderbtn">Add Note</a></li>
            <li><a class="deletefolderbtn">Delete Note</a></li>
          </ul>
        </div>
      </div>    
      <!-- <section class="navdescription"><span>Home</span></section> -->
      <section class="togglenav"><section class="center"><figure class="uparrow"></figure><h1>ADD OR DELETE NOTE</h1></section></section>
    </section>
    
<!-- ****************** PROJECT FOLDERS LOOP ********************--> 
<!-- /////////////////////////////////////////////////////////// -->
    <section class="projectFolders">
    <?php foreach($foldername as $row) { ?>
      <section class="folder <?php echo $row->folderName; ?>">
        <button class="<?php echo $row->folderName; ?> note"><?php echo $row->folderName; ?></button>
      </section>
      <script>
          $(function () {
            // When folder is clicked open it
            $('button.<?php echo $row->folderName; ?>').on('click', function() { 
                $('.open.<?php echo $row->folderName;?>').show();
                  // if folder is open and .homebtn doesnt already exist then Prepend homebtn button to nav
            });
          });
        </script>
    <?php } ?>
    </section>
<!-- ****************** OPENED FOLDERS LOOP MODULE ********************--> 
<!-- ///////////////////////////////////////////////////////////////// -->
    <?php foreach($foldername as $row) { ?>
      <section class="open <?php echo $row->folderName; ?>">
        <section class="textarea">
          <section id="edit_<?php echo $row->id;?>" class="edititable"  contenteditable="true">
            <strong>Enter yuor content here. To insert images, click the View images button above and drag your selected image into this box.</strong>
            <p>Thank you, for choosing DesignTrap</p>
          </section>
        </section>
        <!-- END OF CONTENT EDITITABLE -->
      </section>
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
      <section id="imagefiles">
        <section class="imagenav">
              <ul class="imagenav">
                <li class="viewimagesbtn">View Images</li>
                <li class="addimagebtn">Add Image</li>
                <li class="deleteimages">Delete Images</li>
              </ul>
          <section class="message"></section>
        </section>
        <section class="uploadsection">
          <section class="center">
            <!-- ****************** UPLOAD IMAGE MODULE ********************--> 
            <section id="uploadimages">
              <section class="fileupload">
                <?php echo form_open_multipart('home/do_upload');?>
                  <input type="file" name="userfile" class="file" />
                  <input type="submit" value="Add Image" class="submitimage" />
                </form>
              </section>
            </section>
            <!-- ////////////////////////////////////////////////////////////// -->
            <!-- ****************** DELETE IMAGES MODULE ********************-->
            <section id="deleteimagesmodule"> 
                <h2>Click on an image to delete the image.</h2>          
                  <ul class="deleteimagesmodule">
                    <?php foreach($imagename as $img) { ?>
                      <li>
                       <img src="<?php echo base_url();?>uploads/<?php echo $img->imageName; ?>" alt="<?php echo $img->imageName; ?>">
                       <?php echo anchor("home/deleteImage/$img->id", 'Delete');?>
                      </li>    
                   <?php } ?>
                  </ul>
            </section>
            <!-- ////////////////////////////////////////////////////////////// -->
            <!-- ****************** VIEW IMAGES MODULE ********************-->
            <section id="viewimages">
              <h2>Click on an image to add it to your note.</h2>
              <ul class="viewimages">
                <?php foreach ($imagename as $img) { ?>
                  <li class="imgdrag" draggable="true">
                    <img draggable="true" class="imagesize" src="<?php echo base_url();?>uploads/<?php echo $img->imageName; ?>" alt="<?php echo $img->imageName; ?>">
                  </li>
                <?php } ?>
              </ul> 
            </section>
            <!-- ////////////////////////////////////////////////////////////// -->
          </section>
        </section>
      </section>

     


<!-- ****************** DELETE FOLDER MODULE ********************--> 
<!-- ////////////////////////////////////////////////////////// -->
    <div id="deletefolder">
      <?php foreach($foldername as $row) { ?>
        <div class="folder">
          <h1 class="delete"><?php echo $row->folderName;?></h1>
          <?php echo anchor("home/deleteFolder/$row->id", 'Delete', 'class="confirmClick"', 'title="<?php echo $row->folderName;?>"');?>
        </div>
      <?php } ?>
    </div>


<!-- ****************** BOTTOM CREATE FOLDER INPUT MODULE ********************--> 
<!-- //////////////////////////////////////////////////////////////////////// -->
    <section id="bottom">
      <section class="formWrapper">
        <form accept-charset="utf-8" method="post" action="<?php echo base_url(); ?>index.php/home/create" id="cf_form">
          <input type="text" name="folderName" placeholder="Enter new Folder" class="required" required/>
          <?php echo form_submit('createFolder', 'Create Folder', 'id="submitfolder"'); ?>
        <?php echo form_close(); ?>
      <?php echo validation_errors('<p class="error">'); ?>
    </section>
    </section>

<!-- ****************** BOTTOMNAV (ADD IMAGE, SAVE NOTE) ********************--> 
<!-- //////////////////////////////////////////////////////////////////////// -->
    <section id="bottomnav">
      <nav class="bottom">
        <ul class="bottom">
          <li class="addimg"><a>Add Image</a></li>
          <li class="savenote"><a>Save Note</a></li>
        </ul>
      </nav>
    </section>


  </section><!-- End of container div -->
</body>
</html>
