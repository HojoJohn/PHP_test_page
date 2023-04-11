<nav id="navi">
	<ol>
		<li <?php echo (isset($page) && $page=='Home') ? 'class"active"' :'' ?>>
			<a href="<?php echo $path;?>index.php">Home</a>
		</li>
		<li <?php echo (isset($page) && $page=='Intro to UNIX') ? 'class"active"' :'' ?>>
			<a href="<?php echo $path;?>intro.php">Intro to UNIX</a>
		</li>
		<li <?php echo (isset($page) && $page=='Interfacing With the System') ? 'class"active"' :'' ?>>
			<a href="<?php echo $path;?>interfacing.php">Interfacing With the System</a>
		</li>
		<li <?php echo (isset($page) && $page=='About UNIX') ? 'class"active"' :'' ?>>
			<a href="<?php echo $path;?>about.php">About UNIX</a>
		</li>
		<li <?php echo (isset($page) && $page=='Quiz 1') ? 'class"active"' :'' ?>>
			<a href="<?php echo $path;?>quiz1.php">Quiz 1</a>
		</li>
		<li <?php echo (isset($page) && $page=='Quiz 2') ? 'class"active"' :'' ?>>
			<a href="<?php echo $path;?>quiz2.php">Quiz 2</a>
		</li>
		<li <?php echo (isset($page) && $page=='Comments') ? 'class"active"' :'' ?>>
			<a href="<?php echo $path;?>comments.php">Comments</a>
		</li>
		<li <?php echo (isset($page) && $page=='Result') ? 'class"active"' :'' ?>>
			<a href="<?php echo $path;?>result.php">Results</a>
		</li>
		<li <?php echo (isset($page) && $page=='References') ? 'class"active"' :'' ?>>
			<a href="<?php echo $path;?>references.php">References</a>
		</li>
	</ol>
</nav>
