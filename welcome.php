<!--
welcome.php ფაილი
-->
<!DOCTYPE html>
<html>
<head>
	<title>მეორე გვერდი</title>
</head>
<body>
მოგესალმებით,
თქვენი დაბადების თარიღია:
<?php 
print_r ($_GET["year"]);
print_r ($_GET["month"]);
print_r ($_GET["day"]);

?> 

</body>
</html>
