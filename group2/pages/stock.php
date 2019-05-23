<?php
Session_start();
mysql_connect("localhost","root","") or die("can not connect");
mysql_select_db('mytelephone');
if(isset($_POST['send']))
{
$pna=$_POST['pname'];
$pmod=$_POST['pmodel'];
$ppric=$_POST['pprice'];    
$pqua=$_POST['pquantity']; 
$pimg=$_POST['img'];
if(isset($_FILES['img']) && $_FILES['img']['name']!="")
	{
	$photo_name=$_FILES['img']['name'];
	$photo_temp=$_FILES['img']['tmp_name'];
	$photo_size=$_FILES['img']['size'];
	$folder=$target_dir = '../uploads/';
	$res=$target_dir.$photo_name;
	$number=0;
	while(file_exists($res))
	{
	$number++;
	$photo_ext=".jpg" or ".gif" or ".png" or ".bmp" or ".jpeg";
	$name1=str_replace($photo_ext," ",$photo_name);
	$new_name=$name1."(".$number.")";
	$new_name_ext=$folder . $new_name . $photo_ext;
	$res=$new_name_ext;
	}
	$result=move_uploaded_file($photo_temp,$res);
	}
	//upload
	//connect server
	//connect database
	$_SESSION['front']=@$res;

if(empty($pna) || empty($pmod) || empty($ppric) || empty($pqua))
echo("fail to connect"); 
else{
$q1="insert into stock(Product_name,Product_model,Price,Product_image,Quantity)
values('".$pna."','".$pmod."','".$ppric."','".$_SESSION['front']."','".$pqua."')" or die(mysql_error());
$q2=mysql_query($q1);
if($q2==true)
{
echo "<script>alert('your have been successfully inserted!')</script>";
}
else
{
echo mysql_error();	
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
var productname=/^[A-Za-z]+$/;
var productquantity=/^[0-9]+$/;
var productprice=/^[0-9]+$/;
var v1=document.getElementById("prname").value;
var v2=document.getElementById("pq").value;
var v3=document.getElementById("pp").value;

if(!v1.match(productname))
{
alert("invalid name");
document.getElementById("prname").value='';
return false;
}
if(!v2.match(productquantity))
{
alert("invalid quantity");
document.getElementById("pq").value='';
return false;
}
if(!v3.match(productprice))
{
alert("invalid price");
document.getElementById("pp").value='';
return false;
}
}
</script>
</head>
<body>

<center><fieldset style="width:600px;height:355px; margin-top:20px; align:center;background-color:white;color:black;">
<form action="stock.php" method="post" enctype="multipart/form-data">
<table style="margin-top: 0px;">
<tr><td><b><h4>Product_name:</h4></b></td><td><input type="text" name="pname" id="prname" placeholder="product_name"style=height:20px;width:300px;></td></tr>

<tr><td><b><h4>Product_model:</h4></b></td><td><input type="text" name="pmodel"   placeholder="product_model"style=height:20px;width:300px;></td></tr>
    <tr><td><b><h4>Price:</h4></b></td><td><input type="text" name="pprice" id="pp" placeholder="price for one phone"style=height:20px;width:300px;></td></tr>
<tr><td><b><h4>Quantity:</h4></b></td><td><input type="text" name="pquantity" id="pq" placeholder="type quantity"style=height:20px;width:300px;></td></tr>
<tr><td><b><h4>Image:</h4></b></td><td><input type="file" name="img" ></td></tr>

   <tr> <td><input type="submit" value="Send" name="send" onclick="return validate()"></td>
    <td ><input type="reset" name="save" value="Reset"></td>
    <td><button type="button"><a href="home_page.php">Back home</a></button></td>
</tr>
</table>
</form>
    
    </fieldset>
    </center>
    </body>
</html>
 




