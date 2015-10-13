<?php
/*$con = mysql_connect("localhost","root","");
echo "paso la coneccion";
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("colonial", $con);
$unam=$_POST['username'];
$password=$_POST['pass'];


$sql="select *from user";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
$result=mysql_query($sql,$con);
while($row = mysql_fetch_array($result))
  {
$uname=$row['username'];
$pass=$row['password'];
$t=$row['type'];

if((strcmp($unam,$uname)==0)&&(strcmp($password,$pass)==0))
{

echo "success";
echo $t;
if($t==0)
{   
	session_start();
		$_SESSION['name']=$unam;
		$_SESSION['type']=0;
	header("Location: nuevopedido.html");
}
if($t==1)
{
	session_start();
		$_SESSION['name']=$unam;
		$_SESSION['type']=1;
	header("Location: hotel_user.php");
}

if($t==2)
{session_start();
		$_SESSION['name']=$unam;
		$_SESSION['type']=2;
	header("Location: user.php");
}
}


}
mysql_close($con);*/

$username=$_POST['username'];
$password=$_POST['pass'];

echo $username;
echo $password;

try
{
    $conn = new PDO('mysql:host=localhost;dbname=colonial', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "ERROR: " . $e->getMessage();
}





// Create connection
/*$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";*/
?>