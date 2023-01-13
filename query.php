<?php
$server="localhost";
$username="root";
$password="";
$dbname ="books";

$con= mysqli_connect($server, $username, $password, $dbname);

if(!$con)
{ echo "not connected";
}

$isbn=$_POST['isbn'];  //its a super global variable which can be accessed by all php files here
$author=$_POST['author'];
$title=$_POST['title'];
$genre=$_POST['genre'];

$sql="INSERT INTO `books`(`ISBN`, `Author`, `Title`, `Genre`) VALUES ('$isbn','$author','$title','$genre')";

$result =mysqli_query($con,$sql);

if ($result) {
echo "data submitted";

}

else{

echo "query failed";
}
?>