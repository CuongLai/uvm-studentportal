<nav class="nav">
  <a class="btn btn-default" aria-label="Left Align">
    <img src="images/smallLogo.png"></img>
  </a>

	<?php if (!isset($_SESSION['user'])): ?>
  	<a type="button" id="floatRight" class="btn btn-default" href="login.php">
    	<span aria-hidden="true">Login</span>
  	</a>
		<?php endif; ?>

		<?php if (isset($_SESSION['user'])): ?>
		<a type="button" id="floatRight" class="btn btn-default" href="logout.php">
    	<span aria-hidden="true">Logout</span>
  	</a>
		<?php endif; ?>

	<?php
	$status = isset($_SESSION['user']['fldAccess']) ? $_SESSION['user']['fldAccess'] : "";
	if ($status == 'T'):
	?>
  	<a type="button" id="floatRight" class="btn btn-default" aria-label="Left Align" href="uploadFile.php">
    	<span aria-hidden="true">Upload</span>
  	</a>
	<?php endif; ?>

</nav>
