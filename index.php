<!doctype html>
<html lang="en">
  <head>
    
    <title>OTP Login Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> 
</head>
<style>
  .main{
background:#2B547E;


  }
  .a1{
margin-left:-100px;
  

  }
  .xy{
    background:#112458    ;
   width:1000px;
   height:70px;
   border:3px solid white;
   border-radius:10px;
   margin-left:180px;
   margin-top:20px;
   text-align:center;
   color:white;
   font-family: "Lucida Console", "Courier New", monospace;
  
   
  }
  .h{
margin-top:-70px;
margin-left:220px;

  }
.container{
margin-top:20px;
background:#728FCE;
width:900px;
margin-left:130px;
height:500px;
padding:100px;
border:5px solid #151B54;
border-radius:30px;
box-shadow:10px 10px;

}
.i{

  width:350px;
  height:400px;
 
  
}
.email{
margin-left:300px;
margin-top:-300px;


}
.email_input{
  width:400px;
  height:40px;
  background:white;
  border:2px solid #151B54;
  border-radius:10px;
  box-shadow:3px 5px #2F539B;
}
.label1{

  font-family: Fantasy;
  margin-bottom:10px;
  font-style: bold;
  
}
.btns{

  margin-left:400px;
  margin-top:50px;
  
}
.btn-success{
  height:40px;
  width:100px;
  border:2px solid white;
  border-radius:10px;
 color:white;
  background:#0D2C81;
  box-shadow:2px 3px black;
  
  
}
a{
  color:white;
  text-decoration:none;
}

  </style>
  <body class="main">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <div class="xy" role="alert">
 <?php
if(isset($_REQUEST['msg']))
  echo $_REQUEST['msg'];
?>
</div>
    

    

    <div class="container"> 
    
    
    <h1 class="h">VERIFY YOUR OTP LOGIN</h1>
    <div class="a1">
    <img src="login_karo.png" class="i">
    
    </div>
    <div class="email">
         <form action="send_otp.php" method="post">
  <label for="exampleFormControlInput1" class="label1">Enter Email</label>
  <input type="email" class="email_input" name="user_email" id="user_email" placeholder="name@example.com">
</div>
<div class="btns">
<button type="submit" class="btn-success">Send OTP</button>
<button class="btn-success">
<a href="registration.php" >Register</a></button>
 
    </div>
    
    

</form>


</body>
</html>