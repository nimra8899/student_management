<?php
error_reporting(0);
session_start();
session_destroy();

if ($_SESSION['message']) {
    $message = $_SESSION['message'];
    echo "<script type='text/javascript'>
        alert('$message');
    </script>";


}

      
 $host="localhost"; 
 $user="root"; 
 $password="" ;
 $db="uniproject";
  $data=mysqli_connect($host,$user,$password,$db);

   $sql="SELECT * from teacher ";
   $result=mysqli_query($data,$sql);
?>




    <!DOCTYPE html>
<html>
<head>
	<title>student management</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<nav>
		
		<label class="logo">W-School </label>
		<ul>
			<li><a href="">HOME</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="admissionstudent.php">Admission</a></li>
			<li><a href="login.php" class="btn btn-success">Login</a></li>
		</ul>
	</nav>
<div class="section1">
	<label class="img_text" >We Teach Students With Care</label>
	<img  class="main_img"  src="project_Images (1)/project_Images/school_management.jpg">
	
</div>
<div class="container">
	<div class="row">
		<div class="col-md-4"> <img class="welcome_img" src="project_Images (1)/project_Images/school2.jpg"></div>
	  
		<div class="col-md-8">
			
			<h1>Welcome To W-School</h1>
			<h4> School is the place where we start our learning. Apart from learning to read, write, and excel in academics, the school also teaches us valuable life lessons that we can incorporate in our daily lives. It is the place where the foundation of our knowledge and morals are laid. So let’s look at some of the things that are worth remembering about our schools.

You can read more Paragraph Writing about articles, events, people, sports, technology many more.</h4>
		</div>
	</div>
	
</div>
<center>
	<h1 class="heading">Our Teachers</h1>
</center>
<div class="container">
	<div class="row">


		<?php 

        while( $info=$result->fetch_assoc())
        {

		?>
		<div class="col-md-4">
			<img class="teacher"  src=" <?php echo "{$info['image']}"; ?>">
			<h3>   <?php echo "{$info['name']}"; ?></h3>
			<h5>   <?php echo "{$info['discription']}"; ?></h5>
		</div>
		<?php
		} 
		?>
		
	</div>
</div>


<center>
	<h1 class="heading">Our Courses</h1>
</center>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<img class="teacher"  src="project_Images (1)/project_Images/web.jpg">
			<h2 class="course">Web Designing</h2>
			<p class="description">Web designing is the process of planning, conceptualizing, and implementing the plan for designing a website in a way that is functional and offers a good user experience. 

.</p>
		</div>
		<div class="col-md-4">
			<img  class="teacher" src="project_Images (1)/project_Images/graphic.jpg">
			<h2 class="course">Graphic Designing</h2>
			<p class="description">Graphic design is a creative process that combines art and technology to communicate ideas. The designer works with a variety of communication tools in order to con

.</p>
		</div>
		<div class="col-md-4">
			<img class="teacher"  src="project_Images (1)/project_Images/marketing.png">
			<h2 class="course">Digital Marketing</h2>
			<p class="description">Marketing is a process of finding out what the customer wants and meeting those requirements. Within the company, the marketing group has to conside
</p>
		</div>
	</div>
</div>

<!-- ... (your existing HTML code) -->



<footer>
	<h3 class="footer_text">All @copyright resereved by web tech knowledge</h3>
</footer>
</body>
</html>
