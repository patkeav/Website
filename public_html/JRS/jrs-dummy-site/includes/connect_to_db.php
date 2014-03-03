<?php
/** Connects to Database **/
$host = 'localhost';
$db = 'jrs_database';
$username = 'grue';
$password = 'Calvinand77!!';
// the PDO way

try {
	$con = new PDO("mysql:host=$host;dbname=$db","$username","$password");
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
catch (PDOException $e) {
	echo "Failed: " . $e->getMessage();
}

	$query_default = "
		SELECT * FROM `news_stories` 
		WHERE `TN` = 2 
		ORDER BY Date DESC;
		";
	$query_result = $con->prepare($query_default);
	$query_result->execute();
	//fetches data from individual rows in the query 
	
	$row = $query_result->fetch();
	$i++;
	$content = $row['content'];
	$time = $row['date'];
	$time_stamp = date_parse($time);  
	$categories = explode(' ', ($row['category']));
	$title = $row['title'];
	$author = $row['post_author_text'];

	

/** Column Names:

TN => bigint
category => text
title => text
content => text
date => timestamp
post_author => bigint
post_author_text => text

**/
	




// the mysqli way
/**$con = mysqli_connect('localhost','patrickk_testuse','Calvinand77!!','patrickk_test');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$stmt = $dbConnection->prepare("SELECT * FROM `Problem_beta`  
								ORDER BY Date DESC;");
$stmt->bind_param('s',$name);

$stmt->execute();
/*creates a variable to store a SQL statement   
$query = "SELECT * FROM `Problem_beta`  
			ORDER BY Date DESC;";
//creates a variable to store the SQL query to the db
$query_result = mysqli_query($con,$query);
$query_result = $stmt->get_result();
if (!$query_result)
  	{
	die('Error' . mysqli_error($con));
	};
 **/

?>