<html>
<head>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Our Messages</title>
</head>
<body>
	<div class='container'>
		<?php
			$this->view('shared/navigation');
		?>
		<h1>Our Messages</h1>
		<dl>
			<?php 
				if ($data) {
					foreach ($data as $line => $string) {
						for ($i = 0; $i < strlen($string); $i++) { 
							
						}
						// need to use string explode + split + join to make email actually be the good email value and message to be the good message value
						/*
							echo "<dt>Email: $string</dt>";
							echo "<dd style='padding-left: 27.5%;'>$string</dd>";
						*/
					}
				} else {
					echo "<p>No messages yet to be received</p>";	
				}
				
			?>
		</dl>
	</div>
</body>
</html>