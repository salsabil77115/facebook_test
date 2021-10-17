<!DOCTYPE html>
<html>
   <head>
   <title>Register Page </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="register.css?version=11">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
    </head>
    <body>
<div class="row">
<div class="column" style="margin-top:0px;">
<p class="pargragh">Facebook</p>
<p class="pargragh2">Recent logins</p>
<p class="pargragh3">Click your picture or add an account.</p>

    <div class="card">
      <img src="1.jpg" alt="John" style="width:100%">
      <div class="container">
      <h2>John Doe</h2>  
      </div>
    </div>

 </div>
 
<div class="column" style="margin-top:100px;">
     <div class="form-box">
  
        <form id="login"class="inputs" method="post">
 		<input name="Code" type="text" class="input-field" placeholder="Email address or phone number" id="emailid"  name="emailid">
        <input name="password" type="password" class="input-field" name="password" id="password"  placeholder="Password" >
        <br>
        <br>
        <div id="text_login">
        <?php 
        if(isset($_GET['log'])&&($_GET['log']==0)){
            echo "please log in first !";
            
        }
        ?>
        </div>                    
        <input type="submit" class="submit-btn" name="login" value="Log In" id="login_button">
        <br>
        <br>   
 		<a href="#" class="btn">Forgotten password?</a>
  	    <br>
        <hr class="new1">
        <br>
        <br>
		<a id="myBtn" class="submit-btn">Create New Account</a>
       </form>
             
      </div>
	</div>
 </div>
 
<div class="row">
 <div class="column" style="margin-left:600px;margin-top: 70px;">
    <a href="#" class="btn">Create a Page </a>for a celebrity, band or business.
 </div>
</div>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
      <span class="close">&times;</span>
  
  <div class="booking-form" >
  <h1>Sign Up</h1>
  <h5>It's quick and easy. </h5>
  <hr class="new1">
  <form  method="post">
     <input placeholder="First Name" type="text" id="namebox" name="First_name" />
	 <input placeholder="Last Name" type="text" id="namebox" name="Last_name" /> <br>
	 <input placeholder="Email address or mobile number" type="text"  name="email" id="mailbox" /><br>
	 <input placeholder="New password" type="password" id="mailbox" password="password" name="pass" /><br>
	 <p class="Date">Date of birth</p>
	 <select id="day" name="day">
    <option>day</option>
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="08">08</option>
    <option value="09">09</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
</select>
<select id="month" name="month">
    <option>month</option>
    <option value="01">January</option>
    <option value="02">February</option>
    <option value="03">March</option>
    <option value="04">April</option>
    <option value="05">May</option>
    <option value="06">June</option>
    <option value="07">July</option>
    <option value="08">August</option>
    <option value="09">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
</select>
<select id="year" name="year">
    <option>year</option>
    <option value="1940">1940</option>
    <option value="1941">1941</option>
    <option value="1942">1942</option>
    <option value="1943">1943</option>
    <option value="1944">1944</option>
    <option value="1945">1945</option>
    <option value="1946">1946</option>
    <option value="1947">1947</option>
    <option value="1948">1948</option>
    <option value="1949">1949</option>
    <option value="1950">1950</option>
    <option value="1951">1951</option>
    <option value="1952">1952</option>
    <option value="1953">1953</option>
    <option value="1954">1954</option>
    <option value="1955">1955</option>
    <option value="1956">1956</option>
    <option value="1957">1957</option>
    <option value="1958">1958</option>
    <option value="1959">1959</option>
    <option value="1960">1960</option>
    <option value="1961">1961</option>
    <option value="1962">1962</option>
    <option value="1963">1963</option>
    <option value="1964">1964</option>
    <option value="1965">1965</option>
    <option value="1966">1966</option>
    <option value="1967">1967</option>
    <option value="1968">1968</option>
    <option value="1969">1969</option>
    <option value="1970">1970</option>
    <option value="1971">1971</option>
    <option value="1972">1972</option>
    <option value="1973">1973</option>
    <option value="1974">1974</option>
    <option value="1975">1975</option>
    <option value="1976">1976</option>
    <option value="1977">1977</option>
    <option value="1978">1978</option>
    <option value="1979">1979</option>
    <option value="1980">1980</option>
    <option value="1981">1981</option>
    <option value="1982">1982</option>
    <option value="1983">1983</option>
    <option value="1984">1984</option>
    <option value="1985">1985</option>
    <option value="1986">1986</option>
    <option value="1987">1987</option>
    <option value="1988">1988</option>
    <option value="1989">1989</option>
    <option value="1990">1990</option>
    <option value="1991">1991</option>
    <option value="1992">1992</option>
    <option value="1993">1993</option>
    <option value="1994">1994</option>
    <option value="1995">1995</option>
    <option value="1996">1996</option>
    <option value="1997">1997</option>
    <option value="1998">1998</option>
    <option value="1999">1999</option>
    <option value="2000">2000</option>
    <option value="2001">2001</option>
    <option value="2002">2002</option>
    <option value="2003">2003</option>
    <option value="2004">2004</option>
    <option value="2005">2005</option>
    <option value="2006">2006</option>
    <option value="2007">2007</option>
    <option value="2008">2008</option>
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
</select>
<br>
<p class="gender">Gender</p>
<div class="wrapper">
 <input type="radio" name="Gender" id="option-1" value="Male">
 <input type="radio" name="Gender" id="option-2"  value="Female">
  <input type="radio" name="Gender" id="option-3"  value="custom">
 
   <label for="option-1" class="option option-1">
     <div class="dot"></div>
      <span>Male</span>
      </label>
   <label for="option-2" class="option option-2">
     <div class="dot"></div>
      <span>Female</span>
   </label>
     <label for="option-3" class="option option-3">
     <div class="dot"></div>
      <span>custom</span>
   </label>
</div>
 <p id="intro4">By clicking Sign Up, you agree to our <a href="#" class="term">Terms</a>, <a href="#" class="term">Data Policy</a> and <a class="term" href="#">Cookie Policy</a>. You may receive SMS notifications from us and can opt out at any time.</p>
<input type="submit" class="submit-btn" name="Sign Up" value="Sign Up" id="sign_button">
	<div id="text_sign" ></div>    
	 </form>
	</div>
  </div>
</div>
<script src="ajax.js?version=2" type="text/javascript"></script>

</body>
</html>
