<html>
<body>
<?php
$con = mysql_connect("localhost", "mossyt", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("businessbe", $con);
$sql="INSERT INTO user (name, email, gender, comm, password)
VALUES
('$_POST[name]', '$_POST[email]', '$_POST[gender]', '$_POST[comm]', '$_POST[password]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
mysql_close($con)

?>

</body>

</html>