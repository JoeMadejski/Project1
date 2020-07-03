
<?php
// NOTICE: this part of this HTML document is just one PHP tag
//  This script doesn't output anything to the user's browser
//  so there is no DOCTYPE or any of the usual HTML things
//  in this part

// **********************************
// SECTION ONE: set all the variables
// **********************************

// set some variables
$emailFrom = "erosa4@u.rochester.edu"; // use YOUR email for both lines 12 and 13
$emailTo = "erosa4@u.rochester.edu";
$subject = "Lab 01";

// for the following lines of code, grab the data being passed 
//   from the method="post" in the HTML form and hold it in a variable

// the words inside each $_POST[] must match a name="" attribute from the 
//   HTML form EXACTLY...

// these are from the text INPUT fields...
$personsname = Trim(stripslashes($_POST['wholename'])); 
$personsemail = Trim(stripslashes($_POST['pEmail'])); 
$personsreason = Trim(stripslashes($_POST['reason'])); 
// ...used more input fields? Then copy these lines (above)
//   and make more


// **********************************
// SECTION TWO: build the email body
// **********************************

$body = ""; // initialize the variable, then start concatenating
			// backslash-n means new-line in emails

$body .= "Name: \n"; //...a label
$body .= $personsname;	  //...a variable
$body .= "\n\n";			  //...a new line

$body .= "Email: \n"; //...a label
$body .= $personsemail;	  //...a variable
$body .= "\n\n";			  //...a new line

$body .= "Reason for Contact: \n"; //...a label
$body .= $personsreason;	  //...a variable
$body .= "\n\n";			  //...a new line
// ...used more input fields? Then copy these lines (above)
//   and make more



// **********************************
// SECTION THREE: send the email
// **********************************
// You won't need to edit anything here...

// send email 
mail($emailTo, $subject, $body, "From: <$emailFrom>");


//end the PHP block here...
?>

<!-- **********************************
	 SECTION FOUR: thank the user in HTML;
	 Below, there needs to be an HTML 
	 webpage with a customized message 
	 for the user
	 ********************************** -->


<?php include "inc/html-top.php"; ?>
<body class="container">
	<?php include "inc/nav.php"; ?>
	<main class="full-width">
  		<h2>Thank You <?php echo $personsname; ?></h2>
  		<p>Go back to <a href="contact.php">the contact page</a>.</p>
	</main>
</body>

</html>