<?php /** Checks the Database for new entries **/
require_once('../db_files/connect_to_db.php');

$last_display_date = date_create($date);

$row = $query_result->fetch();

$last_entry_date = date_create($row['Date']);

$diff = date_diff($last_display_date, $last_entry_date);

if ($diff->format('%s') > 0) {

	//echo "yep";
	$problem_string = $row['Problem'];
	$key_words = explode(' ', ($row['keywords']));
	$time_stamp = $row['Date'];  
	$parsed = date_parse($time_stamp);
	?>
	<tr class=" 
		<?php 
			foreach ($key_words as $word) {
					echo ' tag-' . $word; 
			} 
		?>">
		<td class="hidden time-stamp"><?php echo $time_stamp; ?></td>
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
		<?php echo date("M jS, 'y @ g:ia(T)", strtotime($time_stamp)); ?></td>
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
  //else { echo "nope"; }
  ?>
