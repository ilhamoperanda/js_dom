<!DOCTYPE html> 
<html> 
<head> 
<style type="text/css"> 
body {margin: 30px;} 
</style>  
<meta charset=utf-8 /> 
<title>Remove items from a dropdown list</title> 
</head><body><form> 
<select id="colorSelect"> 
<option>Red</option> 
<option>Green</option> 
<option>White</option> 
<option>Black</option> 
</select> 
<input type="button" onclick="removecolor()" value="Select and Remove"> 
</form></body></html>
JavaScript Code :

function removecolor()
{
var x=document.getElementById("colorSelect");
x.remove(x.selectedIndex);
}