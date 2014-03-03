<?php
//fetches data from individual rows in the query  
while($row = mysqli_fetch_array($query_result)) {
	  echo "<h2> My Problem is " . $row['c3'];
	  echo "</h2><br>";
  }
}
?>