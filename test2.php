<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>JS array Clone</title>
   </head>
   <body>
      <script type="text/javascript">
         array_Clone = function(arra1) {
         return arra1.slice(0);
         };
         console.log(array_Clone([1, 2, 4, 0]));
         console.log(array_Clone([1, 2, [4, 0]]));
      </script>
   </body>
</html>