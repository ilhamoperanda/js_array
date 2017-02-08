<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Get first and first n elements of an array</title>
</head>
<body>
</body>
</html>
JavaScript Code :

first =  function(array, n) {
      if (array == null) 
      return void 0;
    if (n == null) 
      return array[0];
    if (n < 0)
      return [];
    return array.slice(0, n);
  };

console.log(first([7, 9, 0, -2]));
console.log(first([],3));
console.log(first([7, 9, 0, -2],3));
console.log(first([7, 9, 0, -2],6));
console.log(first([7, 9, 0, -2],-3));