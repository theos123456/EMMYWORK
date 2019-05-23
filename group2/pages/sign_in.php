<?php
mysql_connect("localhost","root","") or die("can not connect");
mysql_select_db('mytelephone');
if(isset($_POST['send']))
{
$fname=$_POST['fn'];
$sname=$_POST['sn']; 
$coun=$_POST['c'];
$sit=$_POST['s'];
$iden=$_POST['i'];
$em=$_POST['e'];
$use=$_POST['u'];
$pas=$_POST['p'];
if(empty($fname) || empty($sname) || empty($coun) || empty($sit)
|| empty($iden) || empty($em) || empty($use) || empty($pas) )	
echo("fail to connect"); 
else{
$q1="insert into sign_in(first_name,second_name,country,city,identity,e_mail,user_name,password)
values('".$fname."','".$sname."','".$coun."','".$sit."','".$iden."'
,'".$em."','".$use."','".$pas."')";
$q2=mysql_query($q1);
if($q2==true)
{
echo "<script>alert('your have been successfully registered!')</script>";
header('location:userLogin.php');
}
else
{
echo("fail");	
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>TUNGATELEPHONE</title>
<script>
function validate()
{
var firstname=/^[A-Za-z]+$/;
var secondname=/^[A-Za-z]+$/;
var city=/^[A-Za-z]+$/;
var nationalID=/^[0-9]+$/;
var email=/^[0-9]+$/;
var usern=/^[A-Za-z]+$/;
var v1=document.getElementById("fname").value;
var v2=document.getElementById("sname").value;
var v3=document.getElementById("co").value;
var v4=document.getElementById("ci").value;
var v5=document.getElementById("id").value;
var v6=document.getElementById("em").value;
var v7=document.getElementById("us").value;
var v8=document.getElementById("pa").value;
var v9=document.getElementById("rpa").value;
if(!v1.match(firstname))
{
alert("invalid first name");
document.getElementById("fn").value='';
return false;
}
if(!v2.match(secondname))
{
alert("invalid second name");
document.getElementById("sn").value='';
return false;
}
if(v3.value="")
{
document.getElementById("co").innerHTML='invalid country name';
return false;
}
if(!v4.match(city))
{
alert("invalid city");
document.getElementById("ci").value='';
return false;
}
if(!v5.match(nationalID))
{
alert("incorrect id");
document.getElementById("id").value='';
return false;
}
if(v5.length<16 || v5.length>16)
{
alert("invalid national id");
document.getElementById("id").value='';
return false;
}
if(v6.indexOf('@')<=0)
{
alert('your e_mail is invalid');
document.getElementById("em").value='';
return false;
}
if(v6.indexOf(".") <= 0 || v6.indexOf(".") == '') 
{
alert("your e_mail is invalid");
return false;
}
if(!v7.match(usern))
{
alert("invalid username");
document.getElementById("us").value='';
return false;
}

if(v8=="")
{
alert("invalid password");
return false;	
}
    if(v9!=v8)
{
alert("retype password well");
document.getElementById("pa").value='';
return false;	
}
else{
	return true;
	
}
}

</script>
</head>
<body>

<center><fieldset style="width:600px;height:695px; margin-top:20px; align:center;background-color:white;color:black;">
<h1>Create account</h1>
<form action="sign_in.php" method="post">
<table style="margin-top: 0px;">
<tr><td><b><h4>First name:</h4></b></td><td><input type="text" name="fn" id="fname" placeholder="First name"style=height:20px;width:300px;></td></tr>
<tr><td><b><h4>Second name:</h4></b></td><td><input type="text" name="sn" id="sname" placeholder="Second name"style=height:20px;width:300px;></td></tr>
<tr><td><b><h4>Country:</h4></b></td> <td><select style=height:20px;width:300px; name="c" id="co">
    <option>Rwanda</option>
    <option>Burundi</option>
    <option>Uganda</option>
    <option>Tanzania</option>
    <option>Kenya</option>
    </select> </td></tr>
<tr><td><b><h4>City:</h4></b></td><td><input type="text" name="s" id="ci" placeholder="city"style=height:20px;width:300px;></td></tr>
<tr><td><b><h4>ID:</h4></b></td><td><input type="text" name="i" id="id" placeholder="type your national id"style=height:20px;width:300px;></td></tr>
<tr><td><b><h4>E-mail:</h4></b></td><td><input type="text" name="e" id="em" placeholder="e-mail"style=height:20px;width:300px;></td></tr>
<tr><td><b><h4>Username:</h4></b></td><td><input type="text" name="u" id="us" placeholder="Create username"style=height:20px;width:300px;></td></tr>
<tr><td><b><h4>Password:</h4></b></td><td><input type="password" name="p" id="pa" placeholder="Create password" style=height:20px;width:300px;></td></tr>
<tr><td><b><h4>Confirm password:</h4></b></td><td><input type="password" name="m" id="rpa" placeholder="Retype password" style=height:20px;width:300px;></td></tr>

<tr>
    <td><input type="submit" value="Register" name="send" onclick="return validate()"></td>
    <td ><input type="reset" name="save" value="Delete"></td>
    <td><button type="button"><a href="home_page.php" style="text-decoration: none;">Back home</a></button></td>
</tr>
</table>
</form>
    
    </fieldset>
    </center>
    </body>
</html>
 




