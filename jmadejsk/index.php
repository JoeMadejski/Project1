<?php include "inc/html-top.php"; ?>

<?php include "inc/nav.php";?>

<body>
<div class="container"> 
	<header>
		<h1>About Joe Madejski</h1>
	</header>

	

	<article class="content">
		<h2>Background</h2>
			<p>Joe Madejski was born in Western NY and has lived there since. He is the youngest of his siblings, and therefore the best of them. A graduate of Albion Central Schools, he is currently attending the University of Rochester and pursing a degree in Cell and Tissue Engineering with a cluster in abnormal psychology. The various computer courses he has taken are necessary to become aquainted with an omnipresent component of modern society. </p>
	</article>

	<aside class="side">
		<figure>
			<img src="images/main.jpg" alt="A dog" class="constrain" id="nav-one">
			<figcaption>A dog. Not my dog mind you, but a dog. (Hover on me!)</figcaption>
		<audio id="bark">
			<source src="audio/bark.mp3"> </source>
			
			
		</audio>

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
var audio = $("#bark")[0];
$("#nav-one")
	.mouseenter(function(){
		audio.play();
});
</script>



</body>
</html>