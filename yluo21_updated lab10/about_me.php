<?php include 'inc/html-top.php';?>

<body>

		<header>  
					<div class="banner">
			
				<a href="index.php"><h1>Yilin Luo's Personal Webpage</h1></a>
				<div class ="slogan"> Welcome to my personal webpage! </div>
				
					</div>
			</header>

			<?php include 'inc/nav.php';?>

		<main class= "container">
	<article>
<h2>About me</h2>

<div class= "article-container">

		<section class= "introduction">
				<figure class="Yilin_photo">
						<img src="images/yilin.jpg" alt="Yilin">
						<figcaption>Yilin Luo</figcaption>
				</figure>
				<div class="text-intro">
				<h2>Who am I? Why are you looking at my website?</h2>
				<p>
                    My name is Yilin Luo. I was born in Qingdao, China. I went to school in Qingdao till after middle school, then I studied at a high school in Massachusettes. Currently, I am a rising senior at University of Rochester.
                </p>
                <p>
                    I love arts, and I am interested in Computer Science. My goal is to pursue an interest that utilizes digital tools and artistic thinking, so I am double majoring in computer science and studio arts. I have put my studies in practice via internships and volunteers. My recent positions were Art Workshop Leader at Huther Doyle and Web Design plus Marketing Intern at Open Lettter. 
				</p>
				</div>
</section>			
</div>
</article>

<footer><div>Yilin Luo's <a href="https://www.linkedin.com/in/yilin-luo-0338a416b/">Linkedin</a> and <a href="https://github.com/YilinLuo">Github</a></div></footer>
</main>
<?php include 'inc/scripts.php'?>
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