$(document).ready(function() {

/*************************************************************************************/
/*  DECLARED VARIABLES  */
/*************************************************************************************/
    var deletebtn = $(".delete");
    var folderopen = $(".open");
    var formwrapper = $(".formWrapper");
    var uploadimage = $('#uploadimages');
    var imagefiles = $('#imagefiles');
    var homebtn = $('a.addfolder_btn');


/*************************************************************************************/
/*  PREDETERMINED ACTIONS AND STATES  */
/*************************************************************************************/
    folderopen.hide();
    formwrapper.hide();
    uploadimage.hide();
    imagefiles.hide();


  
/*************************************************************************************/
/*  Functions and Statements  */
/*************************************************************************************/
  
  //Go to Home Page
  $('.gohome').bind('click', function()
    {
      imagefiles.hide();
      uploadimage.hide();
    });

/*************************************************************************************/
//show and hide the image upload content
  $('.addimagebtn').bind('click', function()
  {
    uploadimage.toggle();
  });

/*************************************************************************************/
//show and hide images stored in database
  $('.viewimagesbtn').bind('click', function()
  {
    imagefiles.toggle();
  });

/*************************************************************************************/
//show and hide the Delete content page
  $('.deletefolder').click(function ()
  {
    $(".delete").toggle();
  });

/*************************************************************************************/
//show and hide the image upload content
  $('.addfolder_btn').click(function ()
  {
    formwrapper.slideToggle();
  });

/*************************************************************************************/
//show and hide the image upload content
  $('span.exit').bind('click', function()
  {
    $this.parent.hide();
  });

/*************************************************************************************/
// Form Validation
  $("#cf_form").validate({
     rules: {
      name: {
         required: true,
         minlength: 3
         }
       }
   });

  // $('.open.James .edititable').css('background-color', 'blue');







});