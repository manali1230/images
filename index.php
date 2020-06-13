<html>
<body>
<h1>LOCKDOWN</h1>
<h3>We should go out but safely</h3>
<?php
   $cloudant_url=`head -n1 path.txt`;          
   $img_path="https://".$cloudant_url."/open.png";
   echo "<br>";
   echo "<img src='{$img_path}' width=100 height=100>";
?>
</body>
</html>
