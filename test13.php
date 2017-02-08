<!DOCTYPE html>
<html>
   <head>
      <meta charset=utf-8 />
      <title>JS Bin</title>
      <style>
         body {padding-top:50px}
      </style>
   </head>
   <body>
      <input type="text" id="text1"></input>
      <input type="button" id="button1" value="Add" onclick="add_element_to_array();"></input>
      <input type="button" id="button2" value="Display" onclick="display_array();"></input>
      <div id="Result"></div>
      <script type="text/javascript">
         var x = 0;
         var array = Array();
         function add_element_to_array()
         {
         array[x] = document.getElementById("text1").value;
         alert("Element: " + array[x] + " Added at index " + x);
         x++;
         document.getElementById("text1").value = "";
         }
         function display_array()
         {
         var e = "<hr/>";
         
         for (var y=0; y<array.length; y++)
         {
         e += "Element " + y + " = " + array[y] + "<br/>";
         }
         document.getElementById("Result").innerHTML = e;
         }
      </script>
   </body>
</html>