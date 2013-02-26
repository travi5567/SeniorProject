<!DOCTYPE html>
<?php $this->load->view('partials/page_head'); ?> 
<body class="gallerypage">
  <div id="container">
    <!-- ****************** TOP NAVIGATION SECTION ********************--> 
<!-- ///////////////////////////////////////////////////////////// -->
    <div class="top">
      <div class="topcenter">
        <section class="nav"><a href="<?php echo base_url();?>index.php/home" class="homebtn">Go Home</a></section>
      </div>    
      <div class="navdescription"><span>Delete Image Page</span></div>
    </div>
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
  </div><!-- End of container div -->
</body>
</html>
