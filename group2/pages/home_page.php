<?php
session_start();
$conn=mysqli_connect('localhost','root','','mytelephone') or die('Connection fails');
$query=mysqli_query($conn,"select * from stock") or die("selecting error");

?>
<!doctype html>
<!DOCTYPE html>
<html>
<head>
<title>www.tungatelephone.com</title>
<style>
 .all{
width: 1340px;
height: 1140px;

	}
	.head{
width: 1340px;
height: 100px;
background: #009688;
	}
.containner{
width: 1340px;
height: 440px;
margin-top: 3px;

	}
#body{
width: 200px;
height: 440px;
background: #009688;
margin-top: 3px;
float: left;
	}
#body1{
width: 100px;
height: 370px;
background:#009688;
margin-left: 20px;
	}
#bodyb{
width: 1140px;
height: 440px;
background:#009688;
float: right;
margin-top: 0px;
background-image: url(../images/capture.jpg);
background-size: cover;
background-repeat: no-repeat;
background-position: center;
animation: slide 20s infinite;
	}
@keyframes slide{
25%{
background: url(../images/nokia/Capture1.JPG);
          }   
50%{
background: url(../images/tecno/Capture.JPG);
    }
    
75%{
background: url(../images/infinix/Capturei.JPG);
    } 
100%{
background: url(../images/samsung/Captures1.JPG);
} 
}
#footer{
width: 1340px;
height: 400px;
background: #009688;

margin-top: 3px;
	}
    #f1{
width: 450px;
height: 400px;
background: #009688;
float: left;
color: white;

	}
        #f2{
width: 450px;
height: 400px;
background: #009688;
float: left;
            color: white;
	}
        #f3{
width: 440px;
height: 400px;
background: #009688;
float: left;
            color: white;
	}
#end{
width: 1340px;
height: 400px;
background:black;
    color: white;
	}
    .fend
	{
		height:300px;
		width: 300px;
		float: left;
		background-color:black;
		color: grey;
		margin-right: 35px;
		
		 
		border-radius: 5px;
		margin-top:10px; 





	}
	#last
	{
		width: 1340px;
		height:30px; 
		color: grey;
		}
    
	.link{
color: white;margin-left: 14px;
font-size: 18px;
text-decoration: none;	
	}
	#di1{
width: 200px;
height: 100px;
float: left; 
	}
	#di2{
width: 100px;
height: 100px;
float: left; 
	}
	#di3{
width: 1040px;
height: 100px;
background: #009688; 
        float: left;
	}
	#di31{
width: 400px;
height: 60px;
background: #009688;
margin-top: 3px;
        margin-bottom: 35px;
float: left;
 
	}
    	#search{
width: 350px;
height: 60px;
margin-top: 3px;
            margin-bottom: 35px;
float: left;
background: #009688;
            margin-left: 40px;
 
	}
#go{
 margin-top: 10px;
padding: 5px;
    font-size: 14px;
    border-color: blue;
	}
	.link1{
color: white;margin-left: 20px;
font-size: 25px;
text-decoration: none;
        padding: 20px;
	}
    
#s1{
float: left;
margin-top: 10px;
width: 300px;
margin-right: 0px;
height: 25px;
border-radius: 0px;
border-color:red;
    margin-left: 10px;
}
    #cart{
float: left;
margin-top: 30px;
width: 70px;
margin-right: 0px;
height: 55px;
border-radius: 0px;
border-color:red;
    margin-left: 10px;
        background: #009688;
}
    #so{
        margin-top: 30px;
        width: 160px;
        height: 55px;
        background: #009688;
        float: left;
        margin-left: 10px;
    }
    .h{color: white;}
</style>
</head>
<div class="all">
 <div class="head">
  <div id="di1"><p style="color: white; font-size: 25px;padding: 10px 0px 0px 10px;">
    Tunga<br>Telephone</p></div>
  <div id="di2"><img src="../images/logo.PNG" style="width: 100px;  height: 100px;"></div>
  <div id="di3">
<div id="di31">
      <marquee behavior="alternate"><br><h1 class="h">Enjoy from </h1></marquee>
    </div>
    <div id="search">
      <marquee behavior="alternate"><br><h1 class="h"> working with Us</h1></marquee>  
    </div>
      <div id="so"><a href="https://www.facebook.com/akilahinstitute" class="social"><img src="../images/f.png" width="50" height="30"></a>
           <a href="https://twitter.com/akilahinstitute" class="social"><img src="../images/t.png" width="50" height="30"></a>
      <a href="https://www.instagram.com/akilahinstitute/" class="social"><img src="../images/i.png" width="50" height="30"></a>
         
      </div>
      <div id="cart"><button type="button"><img src="../images/cart1.png" width="50" height="30"> </button>
          

    </div>
    </div>
    
  </div>
    <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>

<div class="topnav">
  <a class="link1" href="sign_in.php">Sign in</a>
  <a href="userLogin.php" class="link1">Login</a>
    <a href="admin.php" class="link1">Admin</a>
  <div class="search-container">
    <form action="result.php" method="post">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
</body>
</html>
  <div class="containner">
<div id="body">
<br><br><br><div id="body1"><a href="nokia.php?id=<?php echo"nokia";?>" class="link">Nokia</a><br><br><br><br><br><br>
<a href="nokia.php?id=<?php echo"tecno";?>" class="link">Tecno</a><br><br><br><br><br><br>
<a href="nokia.php?id=<?php echo"infinix";?>" class="link">Infinix</a><br><br><br><br><br><br>
<a href="nokia.php?id=<?php echo"samsung";?>" class="link">samsung</a><br><br><br><br><br><br>

</div></div>
<div id="bodyb"></div>
</div>


<div id="footer">
    <div id="f1"><br><br><h1 class="color">What we Serve</h1>
				<h2>Serving with quality and sufficiency</h2>
				<h2>We are a company open to serve<br> the needs of the clients and provide<br> solutions that can help people<br> understand the technology.</h2></div>
    <div id="f2"><br><br><h1>Our Mission</h1>
				<h2>Providing High-quality telephones and<br> services fulfilling the needs in <br>development and technology by being<br> one of the best companies wherever<br> we are.</h2></div>
    <div id="f3"><br><br><h1>Our Vision</h1>
				<h2><li>To satisfy the clients need and desired service</li></h2>
				<h2><li>To develop not only the service but also the skills of the employees</li></h2>
				<h2><li>And be known in our field of business</li></h2></div>
    
</div>
    <div id="end">
    <div class="fend">
    	<h1>Categories</h1>
    	<h4><a href="nokia.php" class="link">Nokia</a></h4>
    	<h4><a href="tecno.php" class="link">Tecno</a></h4>
    	<h4><a href="infinix.php" class="link">Infinix</a></h4>
    	<h4><a href="samsung.php"  class="link">Samsung</a></h4>
    	


    </div>
        <div> 
    <div class="fend">
        
               <h1>Quick Link</h1>
    	<h4><a href="sign_in.php" class="link1">Sign in</a> </h4> 
    	<h4> <a href="result.php" class="link1">Login</a>   </h4>
    	<h4><a href="admin.php" class="link1">Admin</a></h4>
    	</div>
    <div class="fend"><h1>Our Address</h1>
    	<h4>Rwanda/Kigali/Nyarugenge</h4>
    	<h4>Nyarugenge street ST 75 KN</h4>
    	<h4>Tel:0786264487/0726969854</h4>
    	<h4>Email:<a href="#">hakizaphilius@gmail.com</a></h4>


    </div>
    <div class="fend"><h1> Sacial Media</h1>

<h4><a href="https://www.facebook.com/akilahinstitute" class="social"><img src="../images/f.png" width="25" height="30"></a>FaceBook</h4>
<h4><a href="https://twitter.com/akilahinstitute" class="social"><img src="../images/t.png" width="25" height="30"></a>Twitter</h4>
<h4> <a href="https://www.instagram.com/akilahinstitute/" class="social"><img src="../images/i.png" width="25" height="30"></a>Instagram</h4>

    </div>
      <div id="last"><marquee bahavior ="alternate"><h1>Made By Group 2  Computer Science Year 3</h1></marquee></div>
</div>
    </div>
    
    



<!DOCTYPE html>
<html>
<head>
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>


</html>