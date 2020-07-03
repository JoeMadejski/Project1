<?php include "inc/html-top.php"; ?>
	<body class="container">
		<?php include "inc/nav.php"; ?>
		<h1> Contact Me </h1>
		<form method="post" action="form-processor.php" class="full-width">
			<fieldset>
				<legend>Information</legend>
				<label for="name"> Name: </label>
				<input type="text" name="wholename" id="name"><br>
				<label for="email">Email: </label>
				<input type="email" name="pEmail" id="email"><br>
				<label for="input">Reason for contacting:</label>
				<input type="text" name="reason" id="input"><br> 
			</fieldset>
			<input type="submit" value="Submit">
		</form>
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/menu-highlighter.js"></script>
	</body>
</html>