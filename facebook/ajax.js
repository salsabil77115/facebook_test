$(document).ready(function(){
    $('#login_button').click(function() {
    
     var email = $("#emailid").val();
     var pass = $("#password").val();
    
     if(email !="" && pass !="")
     {
        $.ajax
        ({
            type:'post',
            url:'do_login.php',
            data:{
              do_login: true,
            email: email,
            password: pass
          },
          success: function(response) {
            if(response.trim() == 'ok'){
              window.location.href = "index.php";
            }else{
              $("#text_login").text(response);
            }
          }
        });
     }else{
        $("#text_login").text("please enter your email or mobile number");
     }
    })
    
    $('#sign_button').click(function() {
    
     var First_name = $("input[name=First_name]").val();
     var Last_name = $("input[name=Last_name]").val();
     var email = $("input[name=email]").val();
     var pass = $("input[name=pass]").val();
     var day = $("#day").find(":selected").text();
     var year = $("#year").find(":selected").text();
     var month = $("#month").find(":selected").text();
     var gender=$("input[name=Gender]").val();
    
     if(email != "" && pass !="" && First_name != "" && Last_name!= "" && day !="" && month !="" && year !="")
     {
     
      $.ajax
      ({
      type:'post',
      url:'signup.php',
      data:{
        do_signup:"do_signup",
       email:email,
       password:pass,
       day:day,
       year:year,
       month:month,
       First_name:First_name,
       Last_name:Last_name,
       gender:gender
      },
      success:function(response) {
          if(response==1)
          {
            window.location.href="index.php";
          }
          
          else if(response==2)
          {
        $(document).ready(function(){
            $("#text_sign").text("please fill all fields");
        
        });
          }else if(response==3){
          $(document).ready(function(){
            $("#text_sign").text("Invalid email format");
        
        });
          }else if(response==4){
          $(document).ready(function(){
            $("#text_sign").text("Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.");
        
        });
        }
      }
      });
    
     }
    
     return false;
    });
    
});
function disableBack() {
 window.history.forward();
  }
setTimeout("disableBack()", 0);
window.onunload = function () { null };
var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
       