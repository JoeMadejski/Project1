<?php include 'inc/html-top.php';?>

<body>

		<header>  
				<div class="banner">
				<a href="index.php">
				<h1>Yilin Luo's Personal Webpage</h1></a>
				<div class ="slogan"> Welcome to my personal webpage! </div>
				</div>
			</header>

			<?php include 'inc/nav.php';?>
<div class="slide-container">
			<ul class="rslides">
			<li><img src="images/yilin_painting.jpg" alt= "Yilin's Painting Inspired by Collage"></li>
			<li><img src="images/yilin_painting2.jpeg" alt= "Yilin's Painting of Imaginary Landscape"></li>
			<li><img src="images/yilin_sketch2.jpeg" alt= "Yilin's Sketch Copied from Gustav Dore's Engraving"></li>
			<li><img src="images/yilin_sketch.jpg" alt= "Yilin's Sketch Copied from Titian's The Assumption"></li>
			</ul>

			<div class="text"><p>
				I aspire to be an artist that will thrive in this digital world. While I spend numerous hours hacking away at my Computer Science major courses, I also never give up on arts in traditional, physical media. I love painting, sketching, and water color. I draw inspirations from numerous artistic practices- collage, copying old masters, and imagination. Arts keeps my mind active, and it pours in inspiration for both my Computer Science and studio art practices. 

			</p></div>
</div>
		<main class= "container">
	<article>
		<h2>Thank you for visiting my site!</h2>
<div class= "article-container">
		<section class= "aboutme">
				<figure class="Yilin_photo">
						<img style="width: 400px; height: 550px" src="images/yilinluo.jpg" alt= "Yilin's Photo">
						<figcaption> </figcaption>
				</figure>
		<a href="About_Me.php"><h2>About Me</h2></a>
				<p>I double major in studio arts and computer science at the University of Rochester. My area of interests are Human Computer Interaction and stuio arts. I have had various experiences in volunteering and internships. My graduation year is 2021.</p>
						<a href="About_Me.php"><p>Come and know me more!</p></a>
				</section>

<section class= "education">
<figure class="artdesign">
		<img style="width: 500px; height: 300px" src="images/luo_yilin_design.jpg" alt= "Art Design">
		<figcaption> </figcaption>
</figure>

<a href="Education.php"><h2>Education</h2></a>
<p>2017-2021: University of Rochester Undergraduate</p>
<p>2014-2017: Academy at Charlemont</p>
	<a href="Education.php"><p>More details about my education</p></a>

</section>

<section class= "Volunteer_Internship">
		<figure class="artworkshop">
				<img style="width: 400px; height: 550px" src="images/luo_yilin_mandala.jpg" alt= "Art Workshop">
				<figcaption> </figcaption>
		</figure>
<a href="Volunteer_Internships.php"><h2>Volunteer & Internships</h2></a>
<p>
	 May 2020 - present: Web Design and Marketing Intern at Open Letter Books;
</p>
<a href="Volunteer_Internships.php"><p>Read more about my internships and experiences </p></a>
</section>


<section class = "portfolio">
		<figure class="portfolio_artwork">
				<img style="width: 400px; height: 400px" src="images/painting3.jpg" alt= "artwork portfolio">
				<figcaption> </figcaption>
		</figure>
<a href="Artworks.php"><h2>Artworks</h2></a>
<p>
	My favourite media are acrylic, oil painting, water color, and pencil/pen/charcoal sketches. I am also 
	experimenting with digital arts.
</p>
<a href="Artworks.php"><p>View more of my artworks </p></a>
</section>
		</div>
</article>

<footer><div>Yilin Luo's <a href="https://www.linkedin.com/in/yilin-luo-0338a416b/">Linkedin</a> and <a href="https://github.com/YilinLuo">Github</a></div></footer>

</main>
<?php include 'inc/scripts.php'?>
<script src="js/responsiveslides.js"></script>
<script>
  $(function() {
    $(".rslides").responsiveSlides({ auto: true,             // Boolean: Animate automatically, true or false
  speed: 500,            // Integer: Speed of the transition, in milliseconds
  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
  pager: false,           // Boolean: Show pager, true or false
  nav: false,             // Boolean: Show navigation, true or false
  random: false,          // Boolean: Randomize the order of the slides, true or false
  pause: false,           // Boolean: Pause on hover, true or false
  pauseControls: true});
  });
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138300036-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-138300036-1');
</script> 
</body>

</html>
