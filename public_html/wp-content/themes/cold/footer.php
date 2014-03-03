			<ul id="site-footer" role="contentinfo">
			
				<li><h1> Copyright </h1><br />
					<p><small>&copy; <?php echo date('Y'); ?> <?php bloginfo('title'); ?><?php bloginfo('description'); ?>. Built on <a href="http://wordpress.org" rel="external" target="_blank">WordPress</a> &amp; the <a href="http://leonpaternoster.com/wp-themes" rel="external" target="_blank">Scherzo theme</a> by<br /> Leon Paternoster.</small></p>
				</li>
				<li id="widget" >
					<h1> Twitter Feed </h1><br />
					<p>
					<script>
							function createWidget() {
									var Twit = new TWTR.Widget({
													version: 2,
													type: 'profile',
													rpp: 8,
													interval: 30000,
													width: 200,
													height: 375,
													theme: {
														shell: {
															background: '#fff',
															color: '#000'
														},
														tweets: {
															background: '#fff',
															color: 'grey',
															links: '#184068'
														}
													},
													features: {
														scrollbar: true,
														loop: false,
														live: true,
														behavior: 'all'
														}
												}).render().setUser('PatrickKeaveny').start();
										return Twit;
										}
								createWidget();
						</script>
					</p>
				</li>
				<li class="last">
					<h1> Sites </h1> <br />
					<p><small> <p> Web development is difficult, and I wouldn't have gotten past 'Hello World' without these sites:<br />
								<a href="http://www.w3schools.com" target="_blank" title="W3 Schools is a great website to learn all the basics.">w3</a><br />
								<a href="http://www.wordpress.org" target="_blank" title="This site is built using a lot of Wordpress Functions, thank God for them">Wordpress</a><br />
								<a href="http://www.css-tricks.com" target="_blank" title="CSS-Tricks is a great website to learn lots of cool stuff">CSS-Tricks</a><br />
								 </p>
			    		</small> 
					</p>
				</li>
			</ul>
			
		</div> <!-- end #wrapper -->
		
		
		
	</body>
	<?php include('footer-js.php'); ?>
	
</html>
