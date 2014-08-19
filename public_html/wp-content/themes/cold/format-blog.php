<div id="<?php single_cat_title() ?>" class="blogsAll">

		<h4><?php single_cat_title();?><?php if (is_category('blog')) { echo '(s) All'; } else { echo ' Blog'; } ?></h4>
		<small><h1><?php echo category_description() ?></h1></small>
			<div id="category-list">
				<h3>Categories</h3><br />
				<?php
				
					$args = array('parent'=>4, 'exclude'=>!'blog');
					$cats = get_categories($args);
					$listActive = '';
					
					foreach ($cats as $cat) {
						if (is_category('blog')) {
							$listActive = '';
						}
						else if (is_category($cat)) {
							$listActive = 'listActive';
						}
						else {
							$listActive = '';
						}
						if ($cat->cat_name == 'Blog') {
							$name = 'All';
						}
						else {
							$name = $cat->cat_name;
						}
						echo '<p id=' . $cat->slug . '><a href="' . get_category_link( $cat->term_id ) .'" class="' . $listActive . ' clean"
						>' . $name . '</a></p><br/>';
						}
					?>
			</div> 