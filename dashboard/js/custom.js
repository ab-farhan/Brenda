$(function(){

$(".feature").slideUp();
  $( "#about_hvr" ).on( "click", function() {
    $(".feature").slideToggle();
     $( "#about_hvr i.fa-angle-down" ).toggleClass( "fa-angle-up", 500 );
   });
   $(".service").slideUp();
     $( "#service_hvr" ).on( "click", function() {
       $(".service").slideToggle();
        $( "#service_hvr i.fa-angle-down" ).toggleClass( "fa-angle-up", 500 );
      });
      $(".project").slideUp();
        $( "#project_hvr" ).on( "click", function() {
          $(".project").slideToggle();
           $( "#project_hvr i.fa-angle-down" ).toggleClass( "fa-angle-up", 500 );
         });


// add-user validation
  $("#user_from").validate({
		// Specify the validation rules
		rules: {
		 name:"required",
     phone:{
       required:true,
       minlength:11,
       maxlength:16,
     },
     email:{
       required:true,
       email:true,
     },
     username:{
       required:true,
       minlength:6,
     },
     pass:{
       required:true,
       minlength:6,
     },
     cpass:{
       required:true,
       equalTo: "#u_pass",
     },


		},
		// Specify the validation error messages
		messages: {
      name:"Please Enter Your Name!",
      phone:{
        required:"Please Enter your Phone Number!",
        minlength:"Minimum Character is 11",
        maxlength:"Maximum Character is 16",
      },
      email:{
        required:"Please Enter Your Email!",
        email:"Enter Your Valid Email!",
      },
      username:{
        required:"Please Enter a User-Name!",
        minlength:"Minimum 6 Character Or More!",
      },
      pass:{
        required:"Please Enter a Password!",
        minlength:"More than 6 Character!",
      },
      cpass:{
        required:"Re-type Your Password!",
        equalTo: "Password Did't Match!",
      }

		},
		submitHandler: function (form) {
			form.submit();
		}
	});

});
