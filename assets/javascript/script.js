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



/*************************************************************************************/
/*  Drag N Drop Functions  */
/*************************************************************************************/
      // var dt = event.dataTransfer;
      //   dt.mozSetDataAt("image/png", stream, 0);
      //   dt.mozSetDataAt("application/x-moz-file", file, 0);
      //   dt.setData("text/uri-list", imageurl);
      //   dt.setData("text/plain", imageurl);
     //let the gallery items be draggable
      //$('#imagefiles ul li').draggable();

     // $('.textarea .edititable').droppable({
     //   accept: "#imagefiles ul li",
     //   activeClass: "red",
     //   drop: function() {
     //         alert('dropped');
     //   }
     // });
     
        // function handleDragStart(e) {
        //     this.style.opacity = '0.4';  // this / e.target is the source node.
        //   }

        //   var imgicon = document.querySelectorAll('#imagefiles ul li');
        //     [].forEach.call(imgicon, function(img) {
        //    img.addEventListener('dragstart', handleDragStart, false);
        //   });





});