<?php include "inc/html-top.php"; ?>


<?php include "inc/nav.php";?>
<body>
<div class="container"> 
	<header>
		<h1>Fun Facts</h1>
	</header>

	<aside class="content">
		<figure>
			<img src="images/q2.jpg" alt="Multiple question marks" class="constrain" id="nav-one">
			<figcaption>What do you want to know? (Hover on me!)</figcaption>
			<audio id="fact">
				<source src="audio/fact.mp3"></source>
		</figure>
	</aside>

	<article class="side">
		<h2>Facts</h2>
			<ul>
				<li> Graduate of Albion Central Schools</li>
				<li> Eagle Scout </li>
				<li> Biomedical Engineering Undergrad</li>
				<li> Specializing in Cell, Tissue, and Genetic Engineering</li>
				<li> Competent in MATLAB</li>
			</ul>
	</article>

	
	<section>
		<!-- Kinda just want the backgroudn image -->
	</section>

	<footer>
		<p>Done as a project for CSC 174 @ The University of Rochester.</p>
		<p> Page by Joe Madejski</p>
	</footer>

</div> <!--Container!-->

<?php include "inc/scripts.php";?>

<script type="text/javascript">
var audio = $("#fact")[0];
$("#nav-one")
	.mouseenter(function(){
		audio.play();
});
</script>



</body>
</html>