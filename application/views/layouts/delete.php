<!DOCTYPE html>
<?php $this->load->view('partials/page_head'); ?> 
<body class="deletepage">
  <div id="container">
    <!-- ****************** TOP NAVIGATION SECTION ********************--> 
<!-- ///////////////////////////////////////////////////////////// -->
    <div class="top">
      <div class="topcenter">
        <section class="nav"><a href="<?php echo base_url();?>index.php/home" class="homebtn">Go Home</a></section>
      </div>    
      <div class="navdescription"><span>Delete Page</span></div>
    </div>
      <div class="projectFolders">
      <?php foreach($foldername as $row) { ?>
        <div class="folder">
          <h1 class="deleteme"><?php echo $row->folderName;?></h1>
          <?php echo anchor("home/deleteFolder/$row->id", 'Delete', 'class="confirmClick"', 'title="<?php echo $row->folderName;?>"');?>
        </div>
        <script>
          $(".confirmClick").click( function() { 
            if ($(this).attr('title')) {
                var question = 'Are you sure you want to ' + $(this).attr('title').toLowerCase() + '?';
            } else {
                var question = 'Are you sure you want to do this action?';
            }
            if ( confirm( question ) ) {
                [removed].href = this.src;
            } else {
                return false;
            }
          }); 
        </script>
      <?php } ?>
    </div>
  </div><!-- End of container div -->
</body>
</html>
