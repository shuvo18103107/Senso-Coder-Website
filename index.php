<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<title>senso coder</title>
<link rel="stylesheet" href="styles/style.css">
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"> </script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
</head>
<body>
	<!----Login notification---->
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

	<!-----Profile---->



	<!-----Navigationbar----->
	<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME</a>
      <li class="nav-item">
        <a class="nav-link" href="#about">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#team"> OUR TEAM</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#course">COURSES</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#testimonials">TESTIMONIALS</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#contact">CONTACT</a>
      </li>
    </ul>
  </div>
</nav>
	</section>
	<!------Slider--->
	<div id="slider">
		<div id="headerSlider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
    <li data-target="#headerSlider" data-slide-to="1"></li>
    <li data-target="#headerSlider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="d-block img-fluid" src="images/banner1.jpg"> 
      <div class="carousel-caption">
      	<h5>  IUBAT SENSO CODER</h5>
      </div>
    </div>
    

	</div>
	<!-----About----->
	<section id="about">
	<div class="container">
	<div class="row">
	<div class="col-md-6">
		<h2>About Us</h2>
		<div class="about-content">
			Welcome knowledge-seekers...
            This is the official page of IUBAT SENSO CODER. The organization is celebrating its 2nd anniversary by establishing its official Web page today. The page will try to share the updates of the organization's research work day by day. We will look forward to interact with the followers to discuss about technological terms related to Robotics, Artificial Intelligence, Machine Learning, Mobile Applications Development with cross platform features and APIs and so on. Stay tuned with us. Stay blessed.
        </div>
        <button type="button" class="btn btn-primary">Read More>></button>
	</div>
	<div class="col-md-6 skills-bar">
		<p>Project Showcasing</p>
		<div class="progress">
			<div class="progress-bar" style="width: 80%;">80%</div>
		</div>
		<p>Gaming Robotics Contest</p>
		<div class="progress">
			<div class="progress-bar" style="width: 60%;">60%</div>
		</div>
		<p>Humanoid</p>
		<div class="progress">
			<div class="progress-bar" style="width: 90%;">90%</div>
		</div>
		<p>Artificial Intelligence</p>
		<div class="progress">
			<div class="progress-bar" style="width: 50%;">50%</div>
		</div>
		<p>Android and Api Development</p>
		<div class="progress">
			<div class="progress-bar" style="width: 75%;">75%</div>
		</div>

	</div>

	</div>
	</div>	
	<!-------services---->
	<section id="services">
 <div class="container">
			<h1>Our Missions</h1>
			<div class="row services">
				<div class="col-md-3 text-center">
					<div class="icon">
						<i class="fa fa-desktop"></i>

					</div>
<h3>Web Development</h3>
<p>Let us take you into a deeper experience and let us help build your carrer on webbased platform.</p>
</div>
<div class="col-md-3 text-center">
<div class="icon">
<i class="fa fa-tablet"></i>
</div>
<h3>App Development</h3>
<p>we believe the future of mobile is the future of everything and let us help build your carrer on Androi and Api Development site</p>
</div>
				<div class="col-md-3 text-center">
					<div class="icon">
						<i class="fa fa-cogs"></i>


					</div>
					<h3>Artificial Intelligence</h3>
					<p>We can build a much brighter future where humans are relieved of menial work using AI capabilities.</p>

				</div>
				<div class="col-md-3 text-center">
					<div class="icon">
						<i class="fa fa-microchip"></i>


					</div>
					<h3>Robotics Carrer</h3>
					<p>Build your carrer on different segment of robotics field</p>

				</div>

			</div>

		</div>

		
	</section>
	<!---Team Menbers---->
<section id="team">
<div class="container">
<h1>Our Team</h1>
<div class="row">
	<div class="col-md-3 profile-pic text-center">
		<div class="img-box">
			<img src="images/team1.jpg"class="img-responsive">
			<ul>
				<a href="#"><li><i class="fa fa-facebook"></i></li></a>
				<a href="#"><li><i class="fa fa-twitter"></i></li></a>
				<a href="#"><li><i class="fa fa-linkedin"></i></li></a>
				<a href="#"><li><i class="fa fa-instagram"></i></li></a>
			    <a href="#"><li><i class="fa fa-google-plus"></i></li></a>
			    <a href="#"><li><i class="fa fa-twitter-square"></i></li></a>

			</ul>

	</div>
	<h2>Mohammad Ali Shuvo</h2>
	<h3>Managing Director</h3>
	<p>Deputey Manager of IUbat Cse Robotics Club</p>
</div>
<div class="col-md-3 profile-pic text-center">
		<div class="img-box">
			<img src="images/team2.jpg"class="img-responsive">
			<ul>
				<a href="#"><li><i class="fa fa-facebook"></i></li></a>
				<a href="#"><li><i class="fa fa-twitter"></i></li></a>
				<a href="#"><li><i class="fa fa-linkedin"></i></li></a>
				<a href="#"><li><i class="fa fa-instagram"></i></li></a>
			    <a href="#"><li><i class="fa fa-google-plus"></i></li></a>
			    <a href="#"><li><i class="fa fa-twitter-square"></i></li></a>

			</ul>

	</div>
	<h2>Sheekar Banerjee</h2>
	<h3>Founder/CEO</h3>
	<p> Chief Advisor of IUbat Cse Robotics Club</p>
</div>
<div class="col-md-3 profile-pic text-center">
		<div class="img-box">
			<img src="images/team3.jpg"class="img-responsive">
			<ul>
				<a href="#"><li><i class="fa fa-facebook"></i></li></a>
				<a href="#"><li><i class="fa fa-twitter"></i></li></a>
				<a href="#"><li><i class="fa fa-linkedin"></i></li></a>
				<a href="#"><li><i class="fa fa-instagram"></i></li></a>
			    <a href="#"><li><i class="fa fa-google-plus"></i></li></a>
			    <a href="#"><li><i class="fa fa-twitter-square"></i></li></a>

			</ul>

	</div>
	<h2>Nafi Shariyar</h2>
	<h3>Chief Excutive Manager</h3>
	<p>Assistant Manager of IUbat Cse Robotics Club</p>
</div>
<div class="col-md-3 profile-pic text-center">
		<div class="img-box">
			<img src="images/team4.jpg"class="img-responsive">
			<ul>
				<a href="#"><li><i class="fa fa-facebook"></i></li></a>
				<a href="#"><li><i class="fa fa-twitter"></i></li></a>
				<a href="#"><li><i class="fa fa-linkedin"></i></li></a>
				<a href="#"><li><i class="fa fa-instagram"></i></li></a>
			    <a href="#"><li><i class="fa fa-google-plus"></i></li></a>
			    <a href="#"><li><i class="fa fa-twitter-square"></i></li></a>

			</ul>

	</div>
	<h2>Saleh Sayeem</h2>
	<h3>Chief Advisor</h3>
	<p> Advisor of IUbat Cse Robotics Club</p>
</div>

</div>
</div>
</section>
<!---Promo--->
<section id="promo">
	<div class="container">
		<p> Membership Registration Is Going On</p>
		<a href="#contact" class="btn btn-primary">Contact Us</a>
	</div>
</section>
<!-----Course Plane--->
<section id="course">
	<div class="container">
		<h1>Course Plane</h1>
		<div class="row">
			<div class="col-md-3">
				<div class="single-course">
					<div class="course-head">
						<h2> Free</h2>
						<p> BDT 0/<span>month</span></p>
					</div>
					<div class="course-content">
						<ul>
		 <li><i class="fa fa-database"></i> Basic Programming </li>
        <li><i class="fa fa-microchip"></i>Basic Arduino Concept</li>
	    <li><i class="fa fa-tablet"></i>Basi Api concept</li>
	   <li><i class="fa fa-laptop"></i>HTML,CSS basic</li>
       <li><i class="fa fa-desktop"></i>AI concept </li>
			</ul>
					</div>
					<div class="Course-button">
						<a class="buy-btn" href="#">Join Free</a>
				</div>
			</div>
		
		
	</div>
	<div class="col-md-3">
				<div class="single-course">
					<div class="course-head">
						<h2>Startup</h2>
						<p> BDT 1000/<span>month</span></p>
					</div>
					<div class="course-content">
						<ul>
		 <li><i class="fa fa-database"></i> Arduino Programming </li>
        <li><i class="fa fa-microchip"></i>Arduino Project</li>
	    <li><i class="fa fa-tablet"></i>Java,Pythone</li>
	   <li><i class="fa fa-laptop"></i>website tool</li>
       <li><i class="fa fa-desktop"></i>Machine Learning</li>
			</ul>
					</div>
					<div class="Course-button">
						<a class="buy-btn" href="#">Buy now</a>
				</div>
			</div>
		
		
	</div>
<div class="col-md-3">
				<div class="single-course">
					<div class="course-head">
						<h2>Intermediate</h2>
						<p> BDT 2500/<span>month</span></p>
					</div>
					<div class="course-content">
						<ul>
		 <li><i class="fa fa-database"></i> Deep Learning </li>
        <li><i class="fa fa-microchip"></i>Contest Bot</li>
	    <li><i class="fa fa-tablet"></i>Advance Api</li>
	   <li><i class="fa fa-laptop"></i> Profesional website</li>
       <li><i class="fa fa-desktop"></i>Humanoid</li>
			</ul>
					</div>
					<div class="Course-button">
						<a class="buy-btn" href="#">Buy now</a>
				</div>
			</div>
		
		
	</div><div class="col-md-3">
				<div class="single-course">
					<div class="course-head">
						<h2>Advanced</h2>
						<p> BDT 5000/<span>month</span></p>
					</div>
					<div class="course-content">
						<ul>
		 <li><i class="fa fa-database"></i>Advanced Ui design </li>
        <li><i class="fa fa-microchip"></i>Create own project</li>
	    <li><i class="fa fa-tablet"></i>Android Carrer</li>
	   <li><i class="fa fa-laptop"></i>Professional Website</li>
       <li><i class="fa fa-desktop"></i>AI Projects</li>
			</ul>
					</div>
					<div class="Course-button">
						<a class="buy-btn" href="#">Buy now</a>
				</div>
			</div>
		
		
	</div>


</div>
</div>
</section>
<!----Testimonials--->
<section id="testimonials">
	<div class="container">
		<h1>Testimonials</h1>
		<p class="text-center">IUBAT SENSO CODER TEAM MEMBER</p>
		<div class="row">
		<div class="col-md-4 text-center">
			<div class="profile">
				<img src="images/testi1.jpg" class="user">
				<blockquote>Believe in yourself! Have faith in your abilities!</blockquote>
				<h3>Mohammad Ali <span>Managing Director</span></h3>
				</div>
			</div>
			<div class="col-md-4 text-center">
			<div class="profile">
				<img src="images/team2.jpg" class="user">
				<blockquote>Learn to think...the machines will follow and
                       Let's make the robots learn and think...</blockquote>
				<h3>Sheekar Banerjee <span>Founder</span></h3>
				</div>
			</div>
			<div class="col-md-4 text-center">
			<div class="profile">
				<img src="images/team3.jpg" class="user">
				<blockquote>You are not limited by Your thinking and you are not limited by your imagination
                       </blockquote>
				<h3>Nafi Shariyar<span>Manager</span></h3>
				</div>
			</div>
		
		
		

		</div>
	</div>
	
</section>
<!----- Get in touch----->
<section id="contact">
	<div class="container">
		<h1> Get In Touch</h1>
		<div class="row">
		<div class="col-md-6">
			<form class="contact-form">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Your name">
			</div>
			<div class="form-group">
				<input type="number" class="form-control" placeholder="Phone no.">
			</div>
			<div class="form-group">
				<input type="email" class="form-control" placeholder="Email id">
			</div>
			<div class="form-group">
				<textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">SEND MESSAGE</button>
		</form>
	</div>
	<div class="col-md-6 contact-info">
		<div class="follow"><b>Address:</b><i class="fa fa-map-marker"></i>Shymoli,Dhaka1207 </div>

	
		<div class="follow"><b>Phone:</b><i class="fa fa-phone"></i>+0 01784215213</div>
	
		<div class="follow"><b>Email:</b><i class="fa fa-envelope-o"></i>iubatsensocoder@gmail.com </div>
		<div class="follow"><label><b>Get Social:</b></label>
			
		<a href="#"><i class="fa fa-facebook"></i></a>
		<a href="#"><i class="fa fa-youtube-play"></i></a>
		<a href="#"><i class="fa fa-twitter"></i></a>
		<a href="#"><i class="fa fa-google-plus"></i></a>


	</div>
  </div>
   </div>	
</section>
<!----------Footer---->
<section id="footer">
	<div class="container text-center">
		<?php  if (isset($_SESSION['username'])) : ?>
			
			<p> <a href="profile.php"> <?php echo $_SESSION['username']; ?> </a> <a href="index.php?logout='1'"> logout</a> </p>
		<?php endif ?>
	</div>
</section>
<!-----footer end--->
<script src="scripts/smooth-scroll.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>
<div></div>


</body>
</html>

