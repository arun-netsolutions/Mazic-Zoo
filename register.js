$(function(){
    var $registerform= $("#register");
    if($registerform.length){
  $registerform.validate({
      rules:{
         
          firstname:{
              required:true
          },
          lastname:{
            required:true
          },
          email:{
              required:true
          },
          password:{
              required:true
          },
          cpassword:{
              required:true
          },
         
          
      },
      messages:{
        firstname:{
            required:"Please Enter First Name",
        },
        lastname:{
            required:"Please Enter Your Lastname",
            },
 
            email:{
                required:"Please Enter Your Email",
                },
                password:{
                    required:"Please Enter Your Password",
                    },
                    cpassword:{
                        required:"Confirm Your Password",
                        },
                     
             
            }, 
            // errorPlacement:function(error,element){
            //     if(element.is(":floatingText ")){
            //        error.insertAfter(element.parents(".form-control")); 
            //     }
            // else{
            //     error.insertAfter(element);
            // }
            //  }
            

  })      
    }
})
// jQuery(login).validate({

// rules:{

// firstname:{
// required:true,
// },
// lastname:{
// required:true,
// },

// username:{
// required:true,
// },
// email:{
// required:true,
// },
// password:{
// required:true,
// },
// cpassword:{
// required:true,
// },
// role:{
// required:true,
// },

// },
// messages:{
// //email:"please enter your name",
// firstname:{
// required:"please enter your firstname",
// }, 
// lastname:{
// required:"please enter your lastname",
// },

// email:{
// required:"please enter your email address",
// },
// password:{
// required:"please enter your password",
// },
// cpassword:{
// required:"please enter your confirm password",
// },
// role:{
// required:"please select your role",
// },
// },

// });
// </script>
