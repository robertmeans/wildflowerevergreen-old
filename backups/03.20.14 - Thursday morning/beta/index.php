<?php $thisPage="home"; ?>
<?php include '_includes/header.php'; ?>

</head>
<body>
<nav class="menu_mobile"> 
	<span class="menu_mobile_container2">
        <!-- <a class="all" href="#">OPEN all menu items</a>
		<a href="index.php">Home</a> -->
        <a class="end_left" href="menu.php">Daily Menu</a>
        <a href="sushi_menu.php">Sushi Menu</a>
        <a class="end_right" href="contact.php">Find<br>us</a>
	<span class="menu_mobile_container">        
     
</nav><!-- nav .regular_menu_mobile -->
<div id="wrapper">

<img src="_images/index_header.jpg" border="0" width="100%">
<div id="home_text">

<div class="home_text_left">
	<h2><a href="menu.php">Daily Menu</a></h2>
 	<h2 class="sushi_menu_link"><a href="sushi_menu.php">Sushi Menu</a></h2>
  	<p class="sushi_homepage_text">Sushi Night</p>
	<p class="sushi_homepage_text">	Thursdays</p>
	<p class="sushi_homepage_text">	5:30 - 9:00</p>
</div>

<div class="home_text_middle">
	<span class="homepage_text_mobile">
		<h1>Monday - Saturday</h1>
		<h3>7:30 AM - 2:00 PM</h3>
	</span>
	<span class="homepage_text_mobile">
		<h1>Sunday</h1>
		<h3>8:00 AM - 2:00 PM</h3>
	</span>
	<span class="homepage_text_mobile">
		<h4>Chef Owned &amp; Operated</h4>
		<h3>303.674.3323</h3>
	</span>
</div>

<div class="home_text_right">
	<h2><a href="contact.php">Find us</a></h2>
</div>

</div>
<div class="clear-fix"></div>

<?php include '_includes/footer.php'; ?>
</div><!-- wrapper -->

</body>
</html>