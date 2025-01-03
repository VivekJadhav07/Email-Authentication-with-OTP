<?php
session_start();
include("dbconnect.php");


if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "INSERT INTO users (user_email, user_password) VALUES ('$email', '$password')";
    $result = mysqli_query($con, $query);

    if($result){
    
        header("location: login.php?msg=Registration successful");
        exit(); 
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
</head>
<style>
.main{
background:#2B547E;
margin-left:150px;

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
   margin-left:60px;
   margin-top:20px;
   text-align:center;
   color:white;
   font-family: "Lucida Console", "Courier New", monospace;
  
   
  }
  .h{
margin-top:-40px;
margin-left:370px;

  }
.container{
margin-top:20px;
background:#728FCE;
width:900px;
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
  margin-left:250px;
  border:2px solid #151B54;
  border-radius:10px;
  box-shadow:3px 5px #2F539B;
}
.label1{

  font-family: Fantasy;
  margin-bottom:50px;
  font-style: bold;
  margin-left:250px;
  
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
.m{
margin-left:200px;
margin-top:100px;

}

  </style>
<body class="main">
<div class="container"> 
    <h1 class="h">Register</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label class="label1">Email:</label><br>
        <input type="email" name="email" required class="email_input"><br><br>
        <label class="label1">Password:</label><br>
        <input type="password" name="password" required class="email_input"><br><br>
     
<div class="btns">
<button type="submit" class="btn btn-success" value="Register">Verify OTP</button>
</div> 
</div>
    </form>
</body>
</html>
