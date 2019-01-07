<?php

ob_start();
session_start();
if(!isset($_SESSION['USER_ID']))
   {
        header("Location: index.php");
        exit;
   }
   ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="description" content="QRCode scanner" />
  <meta name="keywords" content="qrcode,scanner,barcode, javascript" />
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <meta name="language" content="English" />
  <meta name="copyright" content="Lazar Laszlo (c) 2011" />
  <meta name="Revisit-After" content="1 Days"/>
  <meta name="robots" content="index, follow"/>
<title>Web QR</title>

<style type="text/css">
body{
    width:100%;
    text-align:center;
}
img{
    border:0;
}
#main{
    margin: 15px auto;
    background:white;
    overflow: auto;
    width: 100%;
}
#header{
    background:white;
}
#mainbody{
    background: white;
    width:100%;
}
#footer{
    background:white;
}
#mp1{
    text-align:center;
    font-size:35px;
}
#header ul{
    margin-bottom:0;
    margin-right:40px;
}
#header li{
    display:inline;
    padding-right: 0.5em;
    padding-left: 0.5em;
    font-weight: bold;
    border-right: 1px solid #333333;
}
#header li a{
    text-decoration: none;
    color: black;
}
p.quote1{

    font-weight:bold;
    margin-left:10%;
    margin-right:10%;
    color: black;
}
a{
	color: black;
}

div.button{
    border: 2px solid #333333;;
    border-radius:15px;
    width:100px;
    cursor:pointer;
    font-weight:bold;
}

</style>
<script type="text/javascript">

function create()
{
    var data=document.getElementById("data").value;
    document.getElementById("qrimage").innerHTML="<img src='https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl="+encodeURIComponent(data)+"'/>";
}

</script>
</head>

<body >
<div id="main">
<div id="header">
<p id="mp1">
QR Code scanner SHL
</p>
<ul>
<li><a href="index.php">Scannear</a></li>
<li><a href="create.php">Crear</a></li>
</ul>
</div>
<div id="mainbody">
<p style="font-size:25px;text-align:center;">Crear Codigo QR SHL</p>
<table border="0" align="center">
<tr><td>
<p style="font-size:20px;text-align:center;">Ingrese la URL o el texto:</p>
<textarea cols="40" rows="3" id="data"></textarea>
</td></tr>
<tr><td align="center">
<div class="button" onclick="create()">Crear</div>
</td></tr>
<tr><td align="center">
<div id="qrimage">
</div>
</td></tr>

</table>
</div>
<div id="footer">
<br>
<h5 align="center">Copyright &copy; 2018 Gruas SHL <a href="#"></a></h5>
</div>
</div>
</body>

</html>
