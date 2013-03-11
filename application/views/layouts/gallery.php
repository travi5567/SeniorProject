<!DOCTYPE html>
<?php $this->load->view('partials/page_head'); ?> 
<body class="gallerypage">
  <div id="container">
<!-- ****************** TOP NAVIGATION SECTION ********************--> 
<!-- ///////////////////////////////////////////////////////////// -->
    <div class="top">
      <div class="topcenter">
        <section class="nav"><a href="<?php echo base_url();?>index.php/home" class="homebtn">Go Home</a><a class="addimagebtn">Add Image</a><a class="viewimagesbtn">View Images</a></section>
      </div>    
      <div class="navdescription"><span>Image Gallery</span></div>
      <button class="togglenav"><h1>NAVIGATION</h1></button>
    </div>

<!-- ****************** DELETE IMAGE MODULE ********************--> 
<!-- ////////////////////////////////////////////////////////// -->
      <div class="imagegallery">
        <div class="image">
          <ul>
            <?php foreach($imagename as $img) { ?>
              <li>
               <h1 class="deleteme"><img src="<?php echo base_url();?>uploads/<?php echo $img->imageName; ?>" alt="<?php echo $img->imageName; ?>"></h1>
               <?php echo anchor("home/deleteImage/$img->id", 'Delete', 'class="confirmClick"', 'title="<?php echo $img->imageName;?>"');?>
              </li>    
           <?php } ?>
          </ul>
        </div>
    </div>


<!-- ****************** IMAGE FILES LOOP MODULE ********************--> 
<!-- ////////////////////////////////////////////////////////////// -->
      <section id="imagefiles">
        <ul>
          <?php foreach ($imagename as $img) { ?>
            <li class="imgdrag" draggable="true">
              <img draggable="true" class="image" src="<?php echo base_url();?>uploads/<?php echo $img->imageName; ?>" alt="<?php echo $img->imageName; ?>">
            </li>
          <?php } ?>
        </ul> 
      </section>



<!-- ****************** UPLOAD IMAGE MODULE ********************--> 
<!-- ////////////////////////////////////////////////////////// -->
    <section id="uploadimages">
      <h3>Upload you images to the gallery</h3>
      <p>click on the view images button to veiw your image gallery, you can then drag your image of choice to the edititable textbox</p>
      <section class="fileupload">
        <?php echo form_open_multipart('home/do_upload');?>
          <input type="file" name="userfile" class="file" />
            <br /><br />
          <input type="submit" value="Add Image" />
        </form>
      </section>
    </section>


  </div><!-- End of container div -->
</body>
</html>
