<!DOCTYPE html>
<html>
<head>
	
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="geocal.png">
<meta name="description" content="GeoCal is an application that performs lightning-fast Mensuration calculations of Geometry." />


<title> GeoCal </title>

<style>


body{
background-color: plum;

}	


triangle{
position: relative;
left: 142px;
top: 59px;
color: ;
}


circle{
	
position: relative;

padding: 10px;

left: 420px;
bottom: 161px;
border:
background-size: ;
	
}

solid{
	
position: relative;

left: 711px;
bottom: 346px;
border: px;

}


cylinder{
	
position: relative;

left: 970px;
bottom: 563px;
	
}


footer{

text-align: center;

}

</style>

</head>


<body>

<center>
<a href="index.php"> 
<img src="geocal.png" alt="GeoCal" height=110 width=140>
</a>
</center>

<form method=POST action=cal.php >
<b>


<triangle>


<font color="green" face="verdana"><i>&emsp;&emsp;&emsp;&emsp;
Triangle</i></font>
<br><br>

Base: &nbsp;&nbsp;&nbsp;<input type="text" name="b1" min=0><br><br>

Height: <input type="text" name="h1" min=0><br><br>

Angle:&nbsp;&nbsp;<input type="text" name="angle" min=0><br><br>

Area: &nbsp;&nbsp;&nbsp;<input type="text" name="a1" min=0><br><br>


&emsp;&ensp;&emsp;&emsp;&emsp;
<button style="background-color:rebeccapurple;width:81;height:25" onClick="cal.php"><b>Calculate</b></button>
<br>


</triangle>




<circle>

<font color="tomato" face="verdana"><i><b>&emsp;&emsp;&emsp;&emsp;
Circle</b></i></font><br><br>

Radius: &nbsp;&nbsp;<input type="text" name="rad" min=0><br><br>

Angle: &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cen" min=0><br><br>

Arc: &nbsp;&nbsp;&nbsp;&emsp;<input type="text" name="arc" min=0><br><br>

&emsp;&ensp;&emsp;&emsp;&emsp;
<button style="background-color:rebeccapurple;width:81;height:25" onClick="cal.php"><b>Calculate</b></button>
<br>

</circle>




<solid>

<font color="olive" face="verdana"><i>&emsp;&emsp;&emsp;&emsp;
Solid</i></font><br><br>

Length: &nbsp;&nbsp;<input type="text" name="len" min=0><br><br>
Width: &nbsp;&nbsp;&nbsp;<input type="text" name="wid" min=0><br><br>
Height: &nbsp;&nbsp;<input type="text" name="hei" min=0><br><br>
Area: &emsp;&nbsp;<input type="text" name="sarea" min=0><br><br>

&emsp;&ensp;&emsp;&emsp;&emsp;
<button style="background-color:rebeccapurple;width:81;height:25" onClick="cal.php"><b>Calculate</b></button>

<br>
</solid>



<cylinder>

<font color="chartuse" face="verdana"><i>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Cylinder</i></font><br><br>


Height: &nbsp;&nbsp;<input type="text" name="cyhei" min=0><br><br>
Radius: &nbsp;&nbsp;<input type="text" name="cyrad" min=0><br><br>

&emsp;&emsp;&emsp;&emsp;&emsp;
<button style="background-color:rebeccapurple;width:81;height:25" onClick="cal.php"><b>Calculate</b></button>

<br>
</cylinder>

</form>

</body>

</html>