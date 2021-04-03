<?php
include("dbconnect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<div class="header">
<h2>Contact Form</h2>
</div>
<form id="form" class="form" action="user_process.php" method="POST" name="user">
<div class="form-control">
<label>Name</label>
 <input type="text" name="name" placeholder="Name" id="name">
 <small>Error Message</small>
 <br>
</div>

<div class="form-control">
<label>Email</label>
 <input type="email" name="email" placeholder="E-mail" id="email">
 <small>Error Message</small>
 <br>
</div>

<div class="form-control" id="city">
<label>City</label>
<br>
 <select name="city">
 <option value="">--Select--</option>
 <option value="Mumbai">Mumbai</option>
 <option value="Delhi">Delhi</option>
 <option value="Bangalore">Bangalore</option>
 <option value="Chennai">Chennai</option>
 <option value="Hyderabad">Hyderabad</option>
 <option value="Chandigarh">Chandigarh</option>
 <option value="Pune">Pune</option>
 <option value="Ahmedabad">Ahmedabad</option>
 <option value="Surat">Surat</option>
 <option value="Mangalore">Mangalore</option>
 </select>
 </br>
</div> 

<div class="form-control" >
<label >Mobile Number</label>
 <input type="text" name="mobile" placeholder="Mobile number" id="mobile">
 <small>Error Message</small>
 <br>
</div>

<div class="form-control" id="message">
<label>Message</label>
<br>
 <textarea name="msg" placeholder="Type your message"></textarea><br>
 <br>


<input class="submit1" type="submit" value="submit request">

 </form> 

 <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  



 
  <!-- <script type="text/javascript">
  function sendEmail(){
    var name = $("#name");
    var email = $("#email");
    var body = $("#body");
    var subject = $('#name');

    if(isNotEmpty(name)&&isNotEmpty(email)&&isNotEmpty(subject)&&isNotEmpty(body)){
      $ajax({
        url:'user_process.php',
        method: 'POST',
        dataType:'json',
        data:{
          name:name.val(),
          subject:subject.val(),
          email:email.val(),
          body:body.val(),
        }, 
      });
    }

  }
  
  </script> -->
  <script src="index.js"></script>
</body>
</html>