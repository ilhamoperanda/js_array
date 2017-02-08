<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Find duplicate values in a JavaScript array</title>
</head>
<body>
</body>
</html>
JavaScript Code :

function find_duplicate_in_array(arra1) {
  var i,
  len=arra1.length,
  result = [],
  obj = {}; 
  for (i=0; i<len; i++)
  {
  obj[arra1[i]]=0;
  }
  for (i in obj) {
  result.push(i);
  }
  return result;
  }
var arr = [1, 2, -2, 4, 5, 4, 7, 8, 7, 7, 71, 3, 6];
console.log(find_duplicate_in_array(arr));