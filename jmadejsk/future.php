<?php include "inc/html-top.php"; ?>

<?php include "inc/nav.php";?>

<body>
<div class="container"> 
	<header>
		<h1>The Future</h1>
	</header>

	

	<article class="content">
		<h2>What Come Next?</h2>
			<p>Who knows what the future will hold? Mayber I'll become a genetic engineer, or maybe I'll dive more into computer science. Either way, I'm always excited to seize the opportunities ahead of me and make more opportunities of my own!</p>
	</article>

	<aside class="side">
		<figure>
			<img src="images/q.jpg" alt="A question mark" class="constrain" id="nav-one">
			<figcaption>What comes next? (Hover on me!)</figcaption>
			<audio id="huh">
				<source src="audio/huh.mp3"></source>
		</figure>
	</aside>

	
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
var audio = $("#huh")[0];
$("#nav-one")
	.mouseenter(function(){
		audio.play();
});
</script>


</body>
</html>