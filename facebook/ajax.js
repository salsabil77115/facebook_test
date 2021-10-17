$(function(){

$('#login_button').click(function() {

 var email=$("#emailid").val();
 var pass=$("#password").val();
 if(email!="" && pass!="")
 {
  $.ajax
  ({
  type:'post',
  url:'do_login.php',
  data:{
   do_login:"do_login",
   id:email,
   password:pass
  },
  success:function(response) {
  if(response=="success")
  {
    window.location.href="index.php";
  }
  
  else
  {
	alert(response);
$(document).ready(function(){
    $("#text_login").text("Wrong Details");
 
});
  }
  }
  });
 }

 else
 {
 
$(document).ready(function(){
    $("#text_login").text("Please Fill All The Details");
 
});
 }

 return false;
})

$('#sign_button').click(function() {

 var First_name=$("input[name=First_name]").val();
 var Last_name=$("input[name=Last_name]").val();
 var email=$("input[name=email]").val();
 var pass=$("input[name=pass]").val();
 var day=$("#day").find(":selected").text();
 var year=$("#year").find(":selected").text();
 var month=$("#month").find(":selected").text();
 var gender=$("input[name=Gender]").val();
 var atposition=email.indexOf("@");  
 var dotposition=email.lastIndexOf(".");  
 if(email!="" && pass!=""&&First_name!=""&&Last_name!=""&&day!=""&&month!=""&&year!="")
 {
 if(pass.length<6){  
   $(document).ready(function(){
    $("#text_sign").text("Password must be at least 6 characters long.");
 
});
 
  }
  else if(atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){
  $(document).ready(function(){
    $("#text_sign").text("Please enter a valid e-mail address  \n contain @,.com \n or right phone number");
 
});
    
  }
  else{
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
  if(response=="success")
  {
    window.location.href="index.php";
  }
  
  else
  {
$(document).ready(function(){
    $("#text_sign").text("Wrong Details");
 
});
  }
  }
  });

 }}

 else
 {
 
$(document).ready(function(){
    $("#text_sign").text("Please Fill All The Details");
 
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
       