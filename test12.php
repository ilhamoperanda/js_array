<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Compute the sum and product of an array of integers</title>
</head>
<body>
<script type="text/javascript">
	var array = [1, 2, 3, 4, 5, 6],
    s = 0,
    p = 1,
    i;
for (i = 0; i < array.length; i += 1) 
   {
    s += array[i];
    p *= array[i];
    }
console.log('Sum : '+s + ' Product :  ' +p); 
</script>
</body>
</html>

