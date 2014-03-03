<?php /** Displays the entries from the Database **/
require_once('../db_files/connect_to_db.php');

$now = time();
// data table
?>
<table>
	<thead>
		<tr>
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
	$key_words = explode(' ', ($row['keywords']));  
	?>
	<tr class='hidden 
		<?php 
			foreach ($key_words as $word) {
					echo ' tag-' . $word; 
			} 
		?>'>
		<td class='date 
		<?php
		$date_diff = $now - (strtotime($row['Date']));
		$date_format = date("M jS, 'y @ g:ia(T)", strtotime($row['Date']));
		if ($date_diff < 2592000) { //for things posted this week
			if ($date_diff < 604800) { //for things posted this month
				if ($date_diff < 86400) { //for things posted longer than this month
					echo "today ";
				}
				echo "this_week ";
			}
			echo "this_month ";
		} 
	//for things posted today
		?>all'>
		<?php echo $date_format ?></td>
		<td>
			<h3> 
				<a href="http://www.patrickkeaveny.com/MyProblem/index.php?problem=<?php echo $problem_string; ?>">
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
