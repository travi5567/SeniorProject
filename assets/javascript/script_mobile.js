$(document).ready(function() {

/*************************************************************************************/
/*  DECLARED VARIABLES  */
/*************************************************************************************/
    var deletebtn = $(".delete");
    var folderopen = $(".open");
    var formwrapper = $(".formWrapper");
    var uploadimage = $('#uploadimages');
    var imagefiles = $('#imagefiles');
    var homebtn = $('a.addfolderbtn');
    var viewimagesbtn = $('a.viewimagesbtn');
    var addimagebtn = $('a.addimagebtn');
    var imagegallerybtn = $('.imagegallerybtn');
    var topnav = $('.top');
    var togglenav = $('.togglenav');
    var deletefolder = $('#deletefolder');
    var deleteimage = $('.deleteimages');
    var deleteimages = $('#deleteimages');
/*************************************************************************************/
/*  PREDETERMINED ACTIONS AND STATES  */
/*************************************************************************************/
    folderopen.hide();
    formwrapper.hide();
    uploadimage.hide();
    imagefiles.hide();
    deleteimages.hide();
    deletefolder.hide();
    $('#deleteimagesmodule').hide();

    var height = $(document).height();
    $('#container').css('height', height);
    $('.projectFolders').css('height', height);


(function($) {
    $.fn.clickToggle = function(func1, func2) {
        var funcs = [func1, func2];
        this.data('toggleclicked', 0);
        this.click(function() {
            var data = $(this).data();
            var tc = data.toggleclicked;
            $.proxy(funcs[tc], this)();
            data.toggleclicked = (tc + 1) % 2;
        });
        return this;
    };
}(jQuery));

  $('.nav').on('click', 'li', function() {
    var topnavposition = topnav.css('marginTop');
    if(topnavposition == '0px'){
      topnav.animate({marginTop: '-50px'}, 500).find(togglenav).removeClass('opened').find('.uparrow').css('background-position', 'right');
    }
  });


togglenav.clickToggle(function() {
    topnav.animate({marginTop: '0px'}, 500).find(togglenav).addClass('opened').find('.uparrow').css('background-position', 'left');
}, function() {
    topnav.animate({marginTop: '-50px'}, 500).find(togglenav).removeClass('opened').find('.uparrow').css('background-position', 'right');
});


/*************************************************************************************/
/*  Functions and Statements  */
/*************************************************************************************/
//Go to Home Page
  // $('.gohome').on('click', function()
  //   {
  //     imagefiles.hide();
  //     uploadimage.hide();
  //   });

/*************************************************************************************/
//show and hide the image upload content
  $('.addimagebtn').on('click', function()
  {
    if( $(this).hasClass('current'))
      {$(this).removeClass('current');
    } else {
      $('ul.imagenav li').removeClass('current');
      $(this).addClass('current');
      addimagebtn.toggleClass('addimagebtnactive');
      $('#deleteimagesmodule').hide();
      $('#viewimages').hide();
      $('#uploadimages').show();
  }
  });

/*************************************************************************************/

/*************************************************************************************/
//When you click on gallery button, open up the gallery section('#imagefiles')
  $('li.addimg').on('click', function()
  {
    var o = $(this).html();
    if(o === '<a>Add Image</a>') {
      $(this).empty();
      $(this).prepend('<a>Exit</a>');
    } else{
      $(this).empty();
      $(this).prepend('<a>Add Image</a>');
    }
    $('.message').empty();
    $('#imagefiles').toggle();
    $('#viewimages ul li').css('border', 'none');
  });

/*************************************************************************************/
//EXIT Gallery function
  $('.viewimagesbtn').on('click', function() {
      if( $(this).hasClass('current'))
        {$(this).removeClass('current');
      } else {
        $('ul.imagenav li').removeClass('current');
      $(this).addClass('current');
      $('#uploadimages').hide();
      $('#deleteimagesmodule').hide();
      $('#viewimages').show();
    }
  });

/*************************************************************************************/
//show and hide the DeleteFolder content
  $('.deletefolderbtn').on('click', function()
  {
    deletefolder.toggle();
  });

/*************************************************************************************/
//show and hide the Delete content page
  $('.deletefolder').click(function ()
  {
    $(".delete").toggle();
  });

/*************************************************************************************/
//show and hide the Delete content page
  deleteimage.click(function ()
  {
    if( $(this).hasClass('current'))
      {$(this).removeClass('current');
    } else {
      $('ul.imagenav li').removeClass('current');
     $(this).addClass('current');
     $('#viewimages').hide();
     $('#uploadimages').hide();
     $('#deleteimagesmodule').show();
    }
  });

/*************************************************************************************/
//show and hide the image upload content
  $('.addfolderbtn').click(function () {
    formwrapper.slideToggle();
  });

/*************************************************************************************/

//Grab the image selected and insert image into the open folder
  //$('#imagefiles ul li img').addSwipeEvents(function(evt, touch) {
  $('ul.viewimages li img').click(function() {
       //Get the source of the image that was clicked
      $('.message').empty();
      var img = $(this).attr('src');
      //grab the visible div and the div with class edititable within it and append image
      $(".open:visible").find('.edititable').append(
        $("<img />", {
            src: img,
            style: "width: 10%;"
            })
        );

        if($('.open').is(':visible')) {
          $(this).parent('li').css('border', '1px solid #fff');
          $('.message').append('<p class="ms_imginserted">Image has been added to note</p>');
        } else {
          $(this).parent('li').css('border', '1px solid red');
          $('.message').append('<p class="ms_error">A note must be open to add an image</p>');
      }
      //alert('Image file:' + '' + img + '' + 'has been added.');
    });



/*************************************************************************************/
//show and hide the image upload content
    $('ul.deleteimagesmodule li img').click(function() {
       //Get the source of the image that was clicked
      $('.message').empty();
        if($('.open').is(':visible')) {
          $(this).parent('li').css('border', '1px solid red');
          $('.message').append('<p class="ms_imginserted">Image has been deleted</p>');
        } else {
          $(this).parent('li').css('border', '1px solid red');
          $('.message').append('<p class="ms_error">A note must be open</p>');
      }
      //alert('Image file:' + '' + img + '' + 'has been added.');
    });














});