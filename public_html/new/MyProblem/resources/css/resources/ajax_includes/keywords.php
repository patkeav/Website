<?php 
//Keywords script!
// made this after a few Ales, not entirely sure what all's going on

$bad_words = array('@I@','@can\'t@','@won\'t@');

$key_words = preg_replace($bad_words, '', $problem);

$keywords = str_word_count($key_words, 1);

$keyword_array = array();
?>
<div class="keyword_search" id="reddit_search">
	Search Reddit for: 
	<a href="http://www.reddit.com/search?q=<?php echo $problem; ?>" target="_blank">
		<?php echo $problem; 
		for ($i=0; $i< count($keywords); $i++) {
			array_push($keyword_array, $keywords[$i]);
		} ?>
	</a>
	
	<br /> Or. <br /> Search by Keyword: <br />
		<?php
			for ($i=0; $i< count($keyword_array); $i++) {
				?> 
				<a href="http://www.reddit.com/search?q=<?php echo $keyword_array[$i]; ?>" target="_blank">
					<?php echo $keyword_array[$i] . ''; ?>	
				</a>,&nbsp;
			<?php	
			}
			?>
</div>
<div class="keyword_search" id="twitter_search">
	Search Twitter for: 
	<?php
	for ($i=0; $i< count($keyword_array); $i++) {
		$search_url = http_build_query(array(
			'q' => '#' . $keyword_array[$i],
			'include_entities' => 'true',
		));
		
		?>
		<a href="https://www.twitter.com/search?<?php echo $search_url; ?>" target="_blank">
			<?php echo '#' . $keyword_array[$i] . ' '; ?>
		</a>,&nbsp;
	<?php
	}
?>
</div>
			
	
		.