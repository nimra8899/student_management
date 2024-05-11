<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>Login Form</title> 
	<link rel="stylesheet" type="text/css" href="maink.css"> 
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">
  

  .form_deg{ 
  padding-top: 200px;
} 
.label_deg{ 
 display: inline-block; 
 color: skyblue; 
 width: 100px; 
 text-align: right;  
 padding-top: 10px; 
 padding-bottom: 10px;
 
   }

  
.login_form{ 
  background-color: black; 
  width: 400px; 
  padding-top: 70px;
   padding-bottom: 70px;
    }

 .title_deg{ 
 background-color: skyblue; 
 color: white; 
 text-align: center;
  font-weight: bold; 
  width: 400px; 
  padding-top: 10px; 
  padding-bottom: 10px; 
  font-size:20px;


  } 
  .body_deg{
  background-repeat: no-repeat; 
  background-attachment: fixed; 
  background-size: 100% 100%;


  }
</style>
</head>
<body background="project_Images (1)/project_Images/school2.jpg" class="body_deg">
      <center> 

<div class="form_deg"> 

       	<center class="title_deg">   
                 Login Form                  
                 <h4> 
                      <?php  
                      error_reporting(0);
                       session_start(); 
                       session_destroy();
                      echo $_SESSION['loginMessage']; 
                      ?>
               
                  </h4>

       	  </center>
          <div>

               <form action="Login_check.php" method="POST" class="login_form">
        	 <div> 
                 <label class="label_deg">Username</label> 
                 <input type="text" name="username">
        	    </div> 
        	    <div> 
                 <label class="label_deg">Password</label> 
                 <input type="Password" name="password">
        	    </div> 
        	    <div> 
                 <label></label> 
                 <input class="btn btn-primary" type="submit" name="submit" value="Login">
        	    </div>
        </form>


       </div>


      </center>
    



</body>
</html>