<!doctype html>
  <html>
  <head>
  <meta charset="UTF-8">
  <title>Get And Style All Tags</title>
  </head>
  <body> 
  <p>[<a href="#" onMouseOver="highlight()" onMouseOut="return_normal()">On mouse over here bold words of the following paragraph will be highlighted</a>]</p> 
<p><strong>We</strong> have just started <strong>this</strong> section for the users (<strong>beginner</strong> to intermediate) who <strong>want</strong> to work with <strong>various</strong> JavaScript <strong>problems</strong> and write scripts online to <strong>test</strong> their JavaScript <strong>skill</strong>.</p>
  </body>
  </html>
JavaScript Code :

 //First create a list of all bold items 
var bold_Items;
window.onload = getBold_items();
 
// Collect all <strong> tags
function getBold_items() 
{
  bold_Items = document.getElementsByTagName('strong'); 
}
// iterate all bold tags and change color  
function highlight() 
{
   for (var i=0; i<bold_Items.length; i++)
   {                                                    
    bold_Items[i].style.color = "green";
    }
}

// On mouse out highlighted words become black
function return_normal()
{
  for (var i=0; i<bold_Items.length; i++) 
  {
       bold_Items[i].style.color = "black";
  }
}