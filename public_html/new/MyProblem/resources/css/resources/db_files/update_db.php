<?php /** Updates the entries in the Database **/
require_once('connect_to_db.php');

$IP = cleanAndSanitize($IP);	
$twitter = cleanAndSanitize($twitter);
$email = cleanAndSanitize($email);
$problem = cleanAndSanitize($problem);

$bad_words = array('@I@','@can\'t@','@won\'t@');

$key_words = preg_replace($bad_words, '', $problem);


function cleanAndSanitize($input) {	
	$search = array(
    '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
    '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
    '@<style[^>]*?>{}:.*?</style>@siU',    // Strip style tags properly
    '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
  );

 	if (get_magic_quotes_gpc()) {
            $input = stripslashes($input);
        }
        $output  = preg_replace($search, '', $input);
    
    return $output;
}	

$num_rows = $query_result->rowCount();
//mysqli_num_rows($query_result);
$new_index = $num_rows + 1;
//echo $problem;

//prepares a sql statement to be inserted into the DB (protection from sql injection)    
$query_result = $con->prepare('INSERT INTO `Problem_beta` (c1, Problem, keywords, twitter_handle, email_address, IP) 
			VALUES(:new_index, :problem, :key_words, :twitter, :email, :IP)');
//executes sql statement
$query_result->execute(array(
			'new_index' => $new_index,
			'problem' => $problem,
			'key_words' => $key_words,
			'twitter' => $twitter,
			'email' => $email,
			'IP' => $IP
			));
// . $new_index . ",'" . $problem . "','" . $twitter . "','" . $email . "');";
/*$stmt = $dbConnection->prepare("INSERT INTO `Problem_beta` (c1, Problem, twitter_handle, email_address) 
			VALUES(" . $new_index . ",'" . $problem . "','" . $twitter . "','" . $email . "');");
$stmt->bind_param('s',$name);

$stmt->execute();

$query_result = $stmt->get_result();*/


//$query_result = mysqli_query($con,$values);
/**
if (!$query_result) 
	{
	die('Error' . mysqli_error($con));
	}

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";

while($row = mysqli_fetch_array($query_result))
  {
  echo "<tr>";
  echo "<td>" . $row['c1'] . "</td>";
  echo "<td>" . $row['c2'] . "</td>";
  echo "<td>" . $row['c3'] . "</td>";
  echo "<td>" . $row['c4'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
**/
?>