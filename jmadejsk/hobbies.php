<?php include "inc/html-top.php"; ?>

<?php include "inc/nav.php";?>

<body>
<div class="container"> 
	<header>
		<h1>Hobbies</h1>
	</header>

	<aside class="content">
		<figure>
			<img src="images/pool.jpg" alt="A pool" id="nav-one">
			<figcaption>A pool. Not my pool mind you, but a pool. (Hover on me!)</figcaption>
			<audio id="splash">
				<source src="audio/splash.mp3"></source>
		</figure>
	</aside>

	<article class="side">
		<h2>Hobbies</h2>
		<div>These are mostly water based</div>
			<ul>
				<li>Swimming</li>
				<li>Sailing</li>
				<li>Fishing</li>
				<li>And apparently CSC classes</li>
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
var audio = $("#splash")[0];
$("#nav-one")
	.mouseenter(function(){
		audio.play();
});
</script>



</body>
</html>