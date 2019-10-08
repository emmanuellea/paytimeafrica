<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title>paytimeafrica</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="mycss/index.css" rel="stylesheet">
<link href="mycss/font-awesome.css" rel="stylesheet">

 <link href="mycss/animate.css" rel="stylesheet">
 
 <link href="https://fonts.googleapis.com/css?family=Mandali" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
 


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<script src="myjs/jquery-3.2.1.js"></script>

<script>
</script>
 


</head>

<body>



<nav class="navbar navbar-inverse navbar-fixed-top ">
  <div class="container">
      
      <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
	  
	  <img src="images/log.png" class="nav-image"/>
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
    
    <ul class="nav navbar-nav navbar-right">

      <li><a href="index.php">Home</a></li>
      <li><a href="index.php">About  Us</a></li>
      <li><a href="index.php">Services</a></li>
		<li><a href="index.php">Our Partners</a></li>
		<li><a href="index.php">How it Works</a></li>
		<li><a href="index.php">Contact Us</a></li>
		<li><a href="index.php">Get involved</a></li>
		
     
         
    </ul>
  </div>
  </div>
</nav>

	
	<section id="application-form">
		 <div class="container">
			 <div class="row">
				 <div class="form-parent text-center">
			<h1>Parent Application form</h1>
		</div>

			 </div>
		</div>
	</section>
	
	<section id="parent_application">
		<div class="container">
			
			
			<form method="post" onSubmit="return submitdata();" autocomplete="off">
				
			<div id="form">
				<h3>Personal Information</h3>
				<p>Please complete this form to apply to JOIN Paytime Africa</p>
				<p>* Required</p>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					
					<div class="form-group">
                                 <label for="firstname">First Name</label>
                                <input type="text" class="form-control" name="name" id="name" maxlength="100">
                      </div>
					<div class="form-group">
                                 <label for="middlename">Middle Name</label>
                                <input type="text" class="form-control" name="middlename" id="middlename" maxlength="100">
                      </div>
					<div class="form-group">
                                 <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" name="lastname" id="lastname" maxlength="100">
                      </div>
				
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="form-group">
                                 <label for="date">Date</label>
                                <input type="date" class="form-control" name="date" id="date" maxlength="100">
                      </div>
					<div class="form-group">
                                 <label for="gender">Gender</label>
                                <select name="gender" class="form-control" id="gender">
									<option value="Female">Female</option>
									<option value="Male">Male</option>
						</select>
                      </div>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="form-group">
                                 <label for="nationality">Nationality</label>
                                <select name="nationality" class="form-control">
									<option value="Uganda">Uganda</option>
									<option value="Kenya">Kenya</option>
									<option value="Rwanda">Rwanda</option>
									<option value="Tanzania">Tanzania</option>
						</select>
                      </div>
					<div class="form-group">
                                 <label for="country_residence">Country of Residence</label>
                                <select name="country_residence" class="form-control">
									<option value="Uganda">Uganda</option>
									<option value="Kenya">Kenya</option>
									<option value="Rwanda">Rwanda</option>
									<option value="Tanzania">Tanzania</option>
						</select>
                      </div>
				</div>
			</div>
			
			<div id="form">
				<h3>Contact Details</h3>
			</div>
			
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					
					<div class="form-group">
                                 <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" maxlength="100">
                      </div>
					<div class="form-group">
                                 <label for="middlename">Street Address</label>
                                <input type="text" class="form-control" name="street" id="street" maxlength="100">
                      </div>
					
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="form-group">
                                 <label for="middlename">Mobile Number</label>
                                <input type="text" class="form-control" name="mobile" id="mobile" maxlength="100">
                      </div>
					<div class="form-group">
                                 <label for="city">City</label>
                                <input type="text" class="form-control" name="city" id="city" maxlength="100">
                      </div>
					
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="form-group">
                                 <label for="postalcode">Postal/Zip code</label>
                                <input type="text" class="form-control" name="postalcode" id="postalcode" maxlength="100">
                      </div>
					<div class="form-group">
                                 <label for="lastname">Country</label>
                                <select class="form-control" name="country" id="country">
									<option value="Uganda">Uganda</option>
									<option value="Kenya">Kenya</option>
						</select>
                      </div>
				</div>
			</div>
			
			<div id="form">
				<h3>Employment Details</h3>
			</div>
			
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					
					<div class="form-group">
                                 <label for="firstname">Employeer's Name</label>
                                <input type="text" class="form-control" name="name" id="name" maxlength="100">
                      </div>
					
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="form-group">
                                 <label for="middlename">Duration of Employment*</label>
                                <input type="text" class="form-control" name="middlename" id="middlename" maxlength="100">
                      </div>
					
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="form-group">
                                 <label for="middlename">Salary*</label>
                                <input type="text" class="form-control" name="middlename" id="middlename" maxlength="100">
                      </div>
					
				</div>
			</div>
			
			
			
			<div id="form">
				<h3>Student Details</h3>
			</div>
			
			
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					
					<div class="form-group">
                                 <label for="sfirstname">First Name</label>
                                <input type="text" class="form-control" name="s_name" id="s_name" maxlength="100">
                      </div>
					<div class="form-group">
                                 <label for="smiddlename">Middle Name</label>
                                <input type="text" class="form-control" name="s_middlename" id="s_middlename" maxlength="100">
                      </div>
					<div class="form-group">
                                 <label for="s_lastname">last Name</label>
                                <input type="text" class="form-control" name="s_lastname" id="s_lastname" maxlength="100">
                      </div>
					
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="form-group">
                                 <label for="s_date">Date of Birth</label>
                                <input type="date" class="form-control" name="s_date" id="s_date" maxlength="100">
                      </div>
					<div class="form-group">
                                 <label for="gender">Gender</label>
						         <select name="s_gender" class="form-control">
									 <option value="Male">Male</option>
									 <option value="Female">Female</option>
						</select>
                                
						
                      </div>
					<div class="form-group">
                                 <label for="class">Class</label>
                                <input type="text" class="form-control" name="s_class" id="s_class" maxlength="100">
                      </div>
					
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="form-group">
                                 <label for="school">Current School</label>
                                <input type="text" class="form-control" name="current_school" id="current_school" maxlength="100">
                      </div>
					<div class="form-group">
                                 <label for="target_school">Target School</label>
                                <input type="text" class="form-control" name="target_school" id="target_school">
                      </div>
					<div class="form-group">
                                 <label for="rec_school">Approved/Recommended School</label>
                                <input type="text" class="form-control" name="rec_school" id="rec_school" >
                      </div>
				</div>
			</div>
			
			
				
				<div id="form">
				<h4>Where did you hear about paytime Africa?</h4>
			  </div>
				
				<div class="form-group">
                         <label for="gender">Gender</label>
						  <select  multiple name="s_gender" class="form-control">
									 <option value="Social Media">Social Media</option>
									 <option value="Magazine">Magazine</option>
							         <option value="Search Engine">Search Engine/option>
									 <option value="Email">Email</option>
							         <option value="Event">Event</option>
									 <option value="Personal Referral">Personal Referral</option>
							         <option value="Others">Others</option>


						</select>
				
			</div>
				
	        <div id="form">
				<h2>Declaration</h2>
				<p>By Submitting this application,</p>
				<p>You declare that, to the best of my knowledge and belief, all information entered above is true and correct</p>
				<p>You have fully read and understood the terms and conditions</p>
			  </div>
			
				
			<button class="btn btn-success btn-block">Submit Application</button>
			
			</form>
		</div>
	</section>
	
		
	
	
	<section id="last-footer">
		<div class="container text-center">
			<img src="images/log.png" />
			
			<div id="footer-address">
				<h4>UGANDA</h4>
			    <p>Muzza Complex 2nd Floor, Suite s8-s9 Plot 39, Jinja Road, mukono</p>
                <p>P.O.Box 286, Kampala, Uganda</p>
			</div>
			
			 <div id="social">
				 <a href="https://tinyurl.com/paytime-Africa-Facebook-Page;" > <i class="fa fa-facebook-f" id="border"></i></a>
                <a href="" > <i class="fa fa-twitter" id="border"></i></a>
				<a href="" > <i class="fa fa-youtube" id="border"></i></a>
                <a href="" > <i class="fa fa-instagram" id="border"></i></a>

            </div>
			 <p>Terms and privacy policy</p>
			<p>Copyright @2019 - PayTime Africa Limited</p>
			</div>
		</div>
	</section>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="Myjs/owl.carousel.min.js"></script>
    <script src="Myjs/owl.carousel.js"></script>
    
    <script type="text/javascript" src="jsslider/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jsslider/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="jsslider/jquery.bbslider.min.js"></script>
<script src="Myjs/wow.js"></script>
    
    
    <script>
		 
	new WOW().init();
	  
    </script>
   
    
</body>
</html>