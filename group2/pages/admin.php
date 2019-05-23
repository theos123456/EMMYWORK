
<?php
mysql_connect("localhost","root","") or die("can not connect");
mysql_select_db('mytelephone') or die("not database was found");
if(isset($_POST['login']))
{
	$name=$_POST['t1'];
	$pass=$_POST['t2'];
	$q1=mysql_query("select *  from admin where name='$name' and password='$pass'") or die("error");
$q2=mysql_num_rows($q1);
	if($q2==true)
	{
        echo"<script>location.href='stock.php';</script>";

	}
	else
	{
		echo "<script>alert('Check if Admin name or Password is valid')</script>";
	}
}
?>

<!--<html>
<head><title>Admin Login</title></head>
<body bgcolor="grey";>
<form action="" method="post">
<center><h1 style="padding-top:90px;">Administrator Login</h1></center>
 <fieldset style="width:700px; position: absolute; top: 160px; left: 300px; background:white;color:black;";>
     <center>
     <table width='75%'>
         <tr><td>Admin Name: </td><td><input type='text' name='t1' style="width: 100%; height:40px; border: 2px solid #CCCCCC;"></td></tr>
         <tr><td>&nbsp;</td></tr>
         <tr><td>Pass Word: </td><td><input type='password' name='t2' style="width: 100%; height:40px; border: 2px solid #CCCCCC;"></td></tr>
         <tr><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td></tr>
         <tr><td colspan="2"><center><input type="submit" value="Login" name="login" style="width: 40%; height:40px; border: 2px solid lightgreen;"></center></td>
             <td><button type="button"><a href="home_page.php" style="text-decoration: none;">Back</a></button></td></tr>
     </table>
     </center>
 </fieldset>
</form>
</body>
</html> -->


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>



<button onClick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" action="">
    <div class="imgcontainer">
      <span onClick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../images/emmy1.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name='t1'>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name='t2'>
        
      <button type="submit" name="login">Login</button>
        <button type="submit" name="loginnn"><a href="home_page.php" style="text-decoration: none; color: white;">Back</a></button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onClick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
