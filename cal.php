<!DOCTYPE html>
<html>
<head>
	
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="geocal.png">
<meta name="description" content="GeoCal is an application that performs lightning-fast Mensuration calculations of Geometry." />


<title>GeoCal Result</title>

<style>

body
{
background-size: cover;
background-repeat: no-repeat;
background-position: center;
background-attachment: fixed;
}

footer{

width: 100%;
text-align: center;
color: teal;


}


</style>

<body>
<center>


<a href="index.php"> 
<img src="geocal.png" alt="GeoCal" height=110 width=140></a>
<h2></h2>

<div>

<form method=POST action=index.php>

<br><br><br><b>


<?php

//Inputs for Triangle
$b1=$_POST['b1'];
$h1=$_POST['h1'];
$angle=$_POST['angle'];
$area=$_POST['a1'];

//Inputs for Circle
$radius=$_POST['rad'];
$arc=$_POST['arc'];
$cenAngle=$_POST['cen'];

//Inputs for Solid
$solidLen=$_POST['len'];
$solidWid=$_POST['wid'];
$solidHei=$_POST['hei'];
$solidArea=$_POST['sarea'];

//Inputs for Cylinder
$cyHeight=$_POST['cyhei'];
$cyRadius=$_POST['cyrad'];





if($b1>0 && $h1>0 && $angle==0)
{
	//calculating Area
	echo "Area of triangle is: " . (1 / 2) * $b1 * $h1;
}

elseif($area>0 && $h1>0)
{
	//calculating Base
	echo "Base (one arm) is: " . 2 / $h1;
	
}

elseif($angle>0 && $area==0)
{

	$ar=(1/2) * $h1 * $b1;
	$b=($ar * sin(deg2rad(60)));
	echo $b;
	
}

elseif($area>0 && $b1>0 && $angle==0)
{
	echo "Height (one arm) is: " . 2 / $b1;
	
}


//computing circles

elseif($radius>0 && $cenAngle==0)
{
	echo "Area of circle is: " . 3.14167 * $radius * $radius;
	echo "<br><br> Perimeter is: " . 2 * 3.14167 * $radius;
	
}

elseif($arc>0 && $cenAngle==0)
{
	echo "Angle at the center is: " . ($arc * 180) / (3.14167 * $radius) . " degree.";
	echo "<br><br> Perimeter is: " . 2 * 3.14167 * $radius . " unit.";
	
}

elseif($radius>0 && $cenAngle>0)
{	
	echo "Arc length is: " . (3.14167 * $radius * $cenAngle) / 180 . " unit.";
	echo "<br><br> Perimeter is: " . 2 * 3.14167 * $radius . " unit.";
	
}

//solid calculations

elseif($solidHei>0 && $solidLen>0 && $solidArea==0)
{
	echo "Volume of Solid is: " . $solidLen * $solidHei * $solidWid;
	echo "<br><br> Total Surface Area is: " . 2 * ($solidLen * $solidHei +$solidHei * $solidWid +$solidLen * $solidWid);
	echo "<br><br>Diagonal length is: " . sqrt( pow($solidLen,2) + pow($solidHei,2) + pow($solidWid,2) );
}


//cylinder computations

elseif($cyRadius>0 && $cyHeight>0)
{	
	echo "Base Area is: " . (3.14167 * pow($cyRadius,2)) / 180 . " unit.";
	echo "<br><br>Area of Curved Surface is: " . 2 * 3.14167 * $cyRadius * $cyHeight . " unit.";
	echo "<br><br>Total Surface Area is: " . 2 * 3.14167 * $cyRadius * ($cyRadius + $cyHeight) . " unit.";
	echo "<br><br>Volume is: " . 3.14167 * pow($cyRadius,2) * $cyHeight . " unit.";
	
}




//final message when improper inputs are inserted
else{
	echo "<h2>Kindly, enter the values properly and retry.</h2>.";
}


?>
<br><br><br><br>

<button style="background-color:red;width:81;height:65" onClick="index.php"><b>Calculate Again</b></button>
<br><br><br><br><br><br><br>

</form>

</div>

<br>

Developed by: <br><br>

<font face="harrington">Farial Mahmod</font>
<br><br>

<a href="https://softwarewall.code.blog"> 
<img src="tishanswall.jpg" alt="Blog" height=25 width=25></a> 

 &nbsp;

<a href="https://www.linkedin.com/in/farial-mahmod"> 
<img src="linkedin.png" alt="Linkedin" height=25 width=25></a> 

 &nbsp;

<a href="https://twitter.com/farial04">
<img src="twitter.png" alt="Twitter" height=25 width=25> </a> 

</body>

</html>