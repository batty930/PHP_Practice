var checkEye = document.getElementById("checkEye");
      var floatingPassword =  document.getElementById("floatingPassword");
      checkEye.addEventListener("click", function(e){
        if(e.target.classList.contains('fa-eye')){
        
          e.target.classList.remove('fa-eye');
          e.target.classList.add('fa-eye-slash');
          floatingPassword.setAttribute('type','text')
        }else{
          floatingPassword.setAttribute('type','password');
          e.target.classList.remove('fa-eye-slash');
          e.target.classList.add('fa-eye')
        }
      });


   $("#checkEye").click(function () {
        if($(this).hasClass('fa-eye')){
          $("#floatingPassword").attr('type', 'text');
        }else{
          $("#floatingPassword").attr('type', 'password');

        }
        $(this).toggleClass('fa-eye').toggleClass('fa-eye-slash');
      }); 

      