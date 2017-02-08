<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to create a specified number of elements and pre-filled string value array</title>
</head>
<body>

</body>
</html>
<script type="text/javascript">
	
function array_filled(n, val)
{
    return Array.apply(null, Array(n)).map(String.prototype.valueOf,val);
}

console.log(array_filled(3, 'default value'));
console.log(array_filled(4, 'password'));
</script>