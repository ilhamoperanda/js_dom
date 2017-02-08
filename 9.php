<!DOCTYPE html>
<html><head>
<meta charset=utf-8 />
<style type="text/css">
body {margin: 40px;}
</style>   
<title>Count and display items of a dropdown list - w3resource</title>
</head><body><form>
<select id="mySelect">
<option>Red</option>
<option>Green</option>
<option>Blue</option>
<option>White</option>
</select>
<input type="button" onclick="getOptions()" value="Count and Output all items">
</form></body></html>
JavaScript Code :

function getOptions()
{
var x=document.getElementById("mySelect");
var txt1 = "No. of items : ";
var i;
l=document.getElementById("mySelect").length;  
txt1 = txt1+l;
for (i=0;i<x.length;i++)
  {
    txt1 = txt1 + "\n" + x.options[i].text;
  }
alert(txt1);
}