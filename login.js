$(function(){
    var $loginform= $("#login");
    if($loginform.length){
  $loginform.validate({
      rules:{
         
        
          email:{
              required:true
          },
          password:{
              required:true
          },
          
         
          
      },
      messages:{
       
            email:{
                required:"Please Enter Your Email",
                },
                password:{
                    required:"Please Enter Your Password",
                    },
                     
             
            }, 
           

  })      
    }
})
