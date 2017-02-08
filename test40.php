<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to generate an array of given length, the content of the array is integer numbers, increase by one from starting</title>
</head>
<body>

</body>
</html>
<script type="text/javascript">
	
function array_range(start, len) 
     {
		var arr = new Array(len);
		for (var i = 0; i < len; i++, start++) 
        {
			arr[i] = start;
		}
      		return arr;
}


console.log(array_range(1, 4));

console.log(array_range(-6, 4));
</script>