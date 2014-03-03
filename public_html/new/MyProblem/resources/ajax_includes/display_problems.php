<?php /** Displays the entries from the Database **/
include('../db_files/connect_to_db.php'); 

//checks to see if the display problems request came with parameters
if ($query_params) {
	$query_result = $con->prepare("SELECT * FROM `Problem_beta`  
									WHERE (keywords LIKE " . $query_alternate . ")
									ORDER BY Date DESC;");
	
	$query_result->execute($execute_array);
}
//if not, do the default query
else {
	$query_default = 'SELECT * FROM `Problem_beta`  
					ORDER BY Date DESC;';
	$query_result = $con->prepare($query_default);
	$query_result->execute();	
}

$now = time();
$months = array(
	1 => 'january',
	2 => 'february',
	3 => 'march',
	4 => 'april',
	5 => 'may',
	6 => 'june',
	7 => 'july',
	8 => 'august',
	9 => 'september',
	10 => 'october',
	12 => 'november',
	12 => 'december',
);

// data table
?>
<table> 
	<thead>
		<tr>
			<th class="hidden">TimeStamp</th>
			<th>Posted on:</th>
			<th>Problem</th>
			<th>Twitter</th>
			<th>Contact User</th>
		</tr>
	</thead>
	<tbody>
	<?php	
//fetches data from individual rows in the query 
		while($row = $query_result->fetch()) {
			$problem_string = $row['Problem'];
			$time_stamp = $row['Date'];  
			$key_words = explode(' ', ($row['keywords']));
			$parsed = date_parse($time_stamp);
			?>
			<tr class="hidden 
				<?php 
					$i = 1;
					$keyword_string = '';
					foreach ($key_words as $word) {
						if (($i++ != 1) or ($i++ != count($key_words))) {
							if (strlen($word) > 2) {
									$keyword_string = $keyword_string . $word . ' '; 
								}
							}
						}
					echo $keyword_string;
				?>">
				<td class="hidden time-stamp">
					<a href="http://www.problem_detail.php?problem=<?php echo $problem_string; ?>&date=<?php echo $time_stamp; ?>">
						<?php echo $time_stamp; ?>
					</a>
				</td>
				<td class="date 
				<?php
				$date_diff = $now - (strtotime($time_stamp));
				if ($date_diff < 2592000) { //for things posted this week
					if ($date_diff < 604800) { //for things posted this month
						if ($date_diff < 86400) { //for things posted longer than this month
							echo "today ";
						}
						echo "this-week ";
					}
					echo "this-month ";
				} 
			//for things posted today
				?>all
				<?php echo $months[$parsed['month']] . '-' . $parsed['day']; ?>">
					<a href="problem_detail.php?problem=<?php echo $problem_string; ?>&date=<?php echo $time_stamp; ?>">
						<?php echo date("M jS, 'y @ g:ia(T)", strtotime($time_stamp)); ?>
					</a>
				</td>
				<td>
					<h3> 
						<a href=".?problem=<?php 
						echo $keyword_string  ?>">
							My Problem is <?php echo $problem_string ?>
						</a>
					</h3>
				</td>
				<td>
					<a target='_blank' href='https://www.twitter.com/<?php echo $row['twitter_handle'] ?>'>
						<?php echo $row['twitter_handle'] ?>
					</a>
				</td>
				<td>
					<a target='_blank' href='mailto:<?php echo $row['email_address'] ?>'>
						<?php echo $row['email_address'] ?>
					</a>
				</td>
			</tr>
			<?php
		  }
		  ?>
	</tbody>
</table>
<?php
//close pdo connection
$con = null;
?>