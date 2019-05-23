<?php
mysql_connect("localhost","root","") or die("can not connect");
mysql_select_db('mytelephone');
if(isset($_POST['login']))
{
$user=$_POST['user'];
$pass=$_POST['pass'];
$q1=mysql_query("select user_name,password  from sign_in where user_name='$user' and password='$pass'");
$q2=mysql_num_rows($q1);
if($q2==1)
{
echo "<script>alert('transaction successfull,we will bring for you your product')</script>";

}
else
{
	
	echo "<script>alert('username or password is inncorect!')</script>";
}
}

?>
<html>
<head><title>User Login</title>
<style>
 
</style>
</head>
<body bgcolor="grey";>
<form action="userLogin.php" method="post">
 <fieldset style="width:700px; position: absolute; top: 160px; left: 300px; background:white;color:black;";>
     <center>
     <table width='75%'>
         <tr><td>User Name: </td><td><input type='text' name='user' style="width: 100%; height:40px; border: 2px solid #CCCCCC;"></td></tr>
         <tr><td>&nbsp;</td></tr>
         <tr><td>Pass Word: </td><td><input type='password' name='pass' style="width: 100%; height:40px; border: 2px solid #CCCCCC;"></td></tr>
         <tr><td>&nbsp;</td></tr>
         <tr><td>&nbsp;</td></tr>
         <tr><td colspan="2"><center><input type="submit" value="Login" name="login" style="width: 40%; height:40px; border: 2px solid lightgreen;">
		 </center></td><td><button type="button">
		 <a href="home_page.php" style="text-decoration: none;">Back</a></button></td></tr>
         
     </table>
     <span>are you new user? <i><a href="clientregistration.php">Register here</a></i></span>
     </center>
 </fieldset>
</form>
</body>
</html>