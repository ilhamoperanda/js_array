<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8 />
		<title>Display colors using ordinal numbers</title>
	</head>
	<body>
		<script type="text/javascript">
			
			var color = ["Blue ", "Green", "Red", "Orange", "Violet", "Indigo", "Yellow "];
		function Ordinal(n)
		{
		var o = ["th","st","nd","rd"],
		x = n%100;
		return x+(o[(x-20)%10]||o[x]||o[0]);
		}
		for(n = 0; n < color.length; n++){
		var ordinal = n + 1;
		var output = (Ordinal(ordinal) + " choice is " + color[n] + ".");
		console.log(output);
		}
		</script>
	</body>
</html>