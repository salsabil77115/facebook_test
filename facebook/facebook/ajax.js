$(document).ready(function(){
    baseURL = window.location.protocol + "//" + window.location.host + "/facebook_test-main";
    $('#login_button').click(function() {
    
     var email = $("#emailid").val();
     var pass = $("#password").val();
    
     if(email !="" && pass !="")
     {
        $.ajax
        ({
            type:'post',
        //  url:'do_login.php',
            url: baseURL + '/api/login',
            data:{
              do_login: true,
              email: email,
              password: pass
          },
          success: function(response) {
            if(response.trim()== 'ok'){
          //window.location.href = "index.php";
             window.location.href = "/";

            }else{
              $("#text_login").html(response);
            }
          }
        });
     }else{
        $("#text_login").text("please enter your email or mobile number");
     }
  return false;

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
		        url: baseURL + '/api/signup',

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
        console.log(response)
          if(response.trim()=='ok'){
           // window.location.href="index.php";
            window.location.href="/";

          }else{
           $("#text_sign").html(response);

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
       