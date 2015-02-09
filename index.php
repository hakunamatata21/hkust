<?php include './head.php' ?>
		<style>

			/* Hero */
			.hero {
				margin-top: 100px;
				padding: 100px;
				text-align: center;
				font-weight: 1000;
				background: url(img/index_main_img.jpg) 100% 80% no-repeat;
				background-size: 100%;
				
			}

			.hero h2 {
				padding-bottom: 30px;
				position: relative;
				top: 10px;
				font-size: 55px;
				font-style: bold;
				color: #CD2626;
			}


			.hero p{
				position: relative;
				font-family: 'Arial black';
				font-size: 25px;
				color: #006400;
				text-transform: uppercase;
			}


			.btn {
				padding: 15px 50px;
				position: relative;
				top: 20px;
				background-color: #FF7F24;
				font-size: 22px;
				font-style:bold;
				text-transform: uppercase;
				text-align: center;
				text-decoration: none;
				color: white;
			}

			.btn:hover{
				background-color:#CD2626;
			}

			/* ROWS */
			.row-container div {
			  height: 450px;
			  text-align: center;
			  padding: 0;
			  position: relative;
			}

			.row-one{
			  padding: 30px;
			  text-align: center;
			  background: #fff;
			}

			.row-one h3{
				margin-top: 80px;
				margin-bottom: 30px;
				color:#8B3626;
			}

			#img1, #img2{
			  width: 300px;
			  height:200px;
			}

			.recent img{
			  width: 160px;
			  height: 100px;
			  padding: 0.5%;
			}

			/*Reusable Code in first row*/

			.col-1-3{
			  width: 33.33%;
			}
			.col-2-3{
			  width: 66.66%;
			}

			.col-1-3,
			.col-2-3{
			  display: inline-block;
			  vertical-align: top;
			}

			/*Rest of the rows*/

			.image-section, .text-section {
			  width: 43%;
			  height: 100%;
			  margin-left: 3%;
			  margin-right: 3%;
			  display:inline-block;
			  vertical-align: top;
			}

			.text-section{
			  padding: 80px 11px 0px 10px;
			}

			.text-section a {
			  text-decoration: none;
			  font-size: 20px;
			}

			.text-section a:hover{
			  text-decoration: underline;
			}

			.image-section img
			{
			  position: relative;
			  width: 100%;
			  height: 100%;
			}

			.row-two {
				background-color: #C1E1A6;
			}

			.row-three {
			  background-color: #DFE4EE;
			}

			.row-five {
			  background-color:#000;
			}

			.row-five .text-section h2{
			  margin-top:60px;
			  color: white;
			}

			.row-five .text-section img{
			  display: inline-block;
			  margin-top: 15px;
			  width: 150px;
			  height:50px;
			  border: 1px solid white;
			  border-radius:10px;
			}

			
		</style>
		<?php include './header.php' ?>
		



		<!--Editing Starts Here-->
			<!--JASON'S EDIT (1~3)-->
			
				
			<section class="hero">

  	  			<h2>An Online Flea Market for Everyone</h2>
  	  			<p>Buy and Sell Your Items on Campus</p>
		 	  	<a class="btn" href="register.php">Sign Up</a>

  			</section>

  			<section class="row-container">
				<!--First Row-->  
				<div class="row-one">

				    <section class="col-1-3">
						<h3>Campus garage-sale is on 24/7</h3>
						<img src="1.jpg" id="img1">

				  	</section><!--
				  	connector comment
				 --><section class="col-1-3">
						<h3>Check out what's new!</h3>
						<p></p>
						<img src="2.jpg" id="img2">
				  	</section><!--
				  	connector comment
				 --><section class="col-1-3 recent">
						<h3>Check out the latest items on-sale!</h3>
						<img src="1.jpg">
						<img src="2.jpg">
						<img src="3.jpg">
						<img src="4.jpg">
				  	</section>

				</div>

				<!--Second Row-->  
				<div class="row-two">
					<section class="image-section">
				  		<img src="buy.jpg">
					</section>

					<section class="text-section">
						<h2>Buy things!</h2>
						<h3>Need an old financial calculator and...<br> have a mid-term tomorrow? </h3>
						<p>We offer a quick and efficient platform<br> for finding the right products you need on campus.</p>
						<a href="list.php"><p>Check out the market!</p></a>
					</section>

				</div>

				<!--Third Row-->  
				<div class="row-three">
				  	
					<section class="text-section">
						<h2>Sell things!</h2>
						<h3>Want to get rid of your electric stove... <br> before your flight in 6 hours? </h3>
						<a href="register.php">Join us!</a>
					</section>

					<section class="image-section"> 
					  	<img src="sell.jpg">
					</section>

				</div>

				<!--Fourth Row-->  
				<div class="row-four">

				<section class="text-section">
					<h2>Personalized for you</h2>
					<img src-"personal.jpg">
					<h3>Let us know which categories you are interested in <br>and we will notify you as soon as new items are available.</h3>
					<p>Quit spamming your facebook wall or group-pages with those tedious photos of your used text-books or leftover protein powders. </p>
					<a href="info.php">Learn More</a>
				</section>

				</div>

				<!--Fifth Row-->  
				<div class="row-five">
					<section class="text-section">
					  	<h2>Download our free mobile app</h2>
					  	<a href="#"><img src="http://blog.soonr.com/wp-content/uploads/2013/03/Google-Play-Badge.png"></a>
					  	<a href="#"><img src="https://www.franckmuller.com/files/9713/2655/2164/Available_on_the_App_Store.png"></a>
					</section>
				</div>
			</section>
		<!--Editing Ends Here-->



				
	<?php include './footer.php' ?>
