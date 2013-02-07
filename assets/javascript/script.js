
$(document).ready(function() {


// DECLARED VARIABLES
    var deletebtn = $(".delete");
    var folderopen = $(".open");
    var formwrapper = $(".formWrapper");

// PREDETERMINED ACTIONS AND STATES
    folderopen.hide();
    formwrapper.hide();


// Functions and Statements
  $('.deletefolder').click(function () {
           $(".delete").toggle();
        });

   $('.addbtn').click(function () {
          $(this).show('highlight',{color: '#C8FB5E'},'fast');
           formwrapper.slideToggle();

        });

  $("#cf_form").validate({
     rules: {
      name: {
         required: true,
         minlength: 3
         }
       }
   });
});