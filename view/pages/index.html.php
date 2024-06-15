<?php 
global $root;
include "$root/view/head_header.php"; ?>
				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>This is Phantom, a free, fully responsive site<br />
								template designed by <a href="http://html5up.net">HTML5 UP</a>.</h1>
								<p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
							</header>
							<section class="tiles">
							<?php for($i = 0; $i < 12; $i++) {
                                echo '<article class="'.$cases[$i]['article'].'">';
                                    echo '<span class="image">';
                                        echo '<img src="'.$cases[$i]['image'].'" alt="" /></span>';
                                    echo '<a href="'.$cases[$i]['lien'].'">';
                                    	echo '<h2>'.$cases[$i]['nom'].'</h2>';
                                        echo '<div class="content">';
                                            echo '<p>'.$cases[$i]['description'].'</p>';
                                        echo '</div></a></article>';
                            } ?>
							</section>
						</div>
					</div>
<?php include "$root/view/footer.php"; ?>