<?php
$server="localhost";
$username="root";
$password="";
$dbname ="books";

$con= mysqli_connect($server, $username, $password, $dbname);

if(!$con)
{ echo "not connected";
}



if(isset($_POST['search']))
{
		echo "<table border=1><tr><th>ISBN</th><th>Author</th><th>Title</th></tr>";
		$author=$_POST['author'];
		$query ="SELECT * FROM `books` WHERE `Author` LIKE '%$author%'";

		$query_run=mysqli_query($con,$query);
		while ($row =mysqli_fetch_array($query_run))

		{
		echo "<tr><td>".$row["ISBN"]."</td><td>".$row["Author"]." </td><td>".$row["Title"]."</td></tr>";

		}
		echo "</table>";



		

	
		
		
}
	
   

                                        


?>