<!DOCTYPE html> 
<html> 
<head> 
<meta charset=utf-8 /> 
<title>JS Bin</title> 
</head> 
<body> 
<p><a id="w3r" type="text/html" hreflang="en-us" rel="nofollow" target="_self" href="http://www.w3resource.com/">w3resource</a></p> 
<button onclick="getAttributes()">Click here to get the attribute's value</button>  
</body> 
</html>
JavaScript Code :

function getAttributes()
{
 var u = document.getElementById("w3r").href;
 alert('The value of the href attribute of the link is : '+u);
 var v = document.getElementById("w3r").hreflang;   
 alert('The value of the hreflang attribute of the link is : '+v);
 var w = document.getElementById("w3r").rel; 
  alert('The value of the rel attribute of the link is : '+w);
 var x = document.getElementById("w3r").target; 
  alert('The value of the taget attribute of the link is : '+x);
 var y = document.getElementById("w3r").type; 
  alert('The value of the type attribute of the link is : '+y);  
}