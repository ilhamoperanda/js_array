<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Insert dashes (-) between even numbers</title>
</head>
<body>
</body>
</html>
JavaScript Code :

var num=window.prompt();
var str = num.toString();
var result = [str[0]];
  
for(var x=1; x<str.length; x++)
  {
    if((str[x-1]%2 === 0)&&(str[x]%2 === 0))
     {
      result.push('-', str[x]);
     }
    else
     {
      result.push(str[x]);
     }
  }
console.log(result.join(''));