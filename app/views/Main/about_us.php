<html>
<head>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Landing page</title>
</head>
<body>
	<div class='container'>
		<?php
			$this->view('shared/navigation');
		?>
		<h1>About Us</h1>
		<p>Welcome to our about us section. See our team of devs!</p>
		<img src="/assets/images/dev-team.jpg" width="25%">
		<br><br>
		<img src="/assets/images/peanuts.jpg" height="60%">
	</div>
</body>
</html>