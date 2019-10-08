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
			<h1>School Application form</h1>
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
				<div class="col-md-6 col-sm-12 col-xs-12">
					
					<div class="form-group">
                                 <label for="firstname">Name of school</label>
                                <input type="text" class="form-control" name="school_name" id="school_name">
                      </div>
					<div class="form-group">
                                 <label for="date_of_registration">Date of Registration</label>
                                <input type="date" class="form-control" name="date_of_registration" id="date_of_registration" maxlength="100">
                      </div>

				
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="form-group">
                                 <label for="reg_number">Registration Number</label>
                                <input type="text" class="form-control" name="reg_number" id="reg_number" maxlength="100">
                      </div>
					<div class="form-group">
                                 <label for="gender">Country of Registration</label>
                                <select name="reg_country" class="form-control" id="reg_country">
									<option value="Uganda">Uganda</option>
									<option value="Kenya">Kenya</option>
									<option value="Uganda">Uganda</option>
									<option value="Kenya">Kenya</option>
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
				<h3>Key School Details</h3>
			</div>
			
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					
					<div class="form-group">
                                 <label for="direct_name">Director's Name</label>
                                <input type="text" class="form-control" name="direct_name" id="direct_name" maxlength="100">
                      </div>
					<div class="form-group">
                                 <label for="direct_name">Contact</label>
                                <input type="text" class="form-control" name="direct_contact" id="direct_contact" maxlength="100">
                      </div>
					<div class="form-group">
                                 <label for="director_email">Email</label>
                                <input type="text" class="form-control" name="director_email" id="director_email" maxlength="100">
                      </div>
					
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="form-group">
                                 <label for="pre_name">Principal/ Head Teacher's Name*</label>
                                <input type="text" class="form-control" name="principal_name" id="principal_name" maxlength="100">
                      </div>
					<div class="form-group">
                                 <label for="firstname">Contact</label>
                                <input type="text" class="form-control" name="name" id="name" maxlength="100">
                      </div>
					<div class="form-group">
                                 <label for="pr_email">Email</label>
                                <input type="email" class="form-control" name="pre_email" id="pre_email" maxlength="100">
                      </div>
					
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="form-group">
                                 <label for="middlename">Nature of School</label>
                                <select name="nature_of_school" class="form-control">
									<option value="Nursery">Nursery</option>
									<option value="Primary">Primary</option>
									<option value="Secondary">Secondary</option>
									<option value="Tertiary/Vocational">Tertiary/Vocational</option>
									<option value="University">University</option>
						</select>
                      </div>
					<div class="form-group">
                                 <label for="firstname">Number of Students</label>
                                <input type="text" class="form-control" name="name" id="name" maxlength="100">
                      </div>
					
				</div>
			</div>
			
			
			
			<div id="form">
				<h3>Appointed Person to recieve System Credentials</h3>
			</div>
			
			
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					
					<div class="form-group">
                                 <label for="sfirstname">First Name</label>
                                <input type="text" class="form-control" name="s_name" id="s_name" maxlength="100">
                      </div>
					<div class="form-group">
                                 <label for="telephone">Telephone Contact</label>
                                <input type="text" class="form-control" name="telephone" id="telephone" maxlength="100">
                      </div>
					
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="form-group">
                                 <label for="middlename">Middle Name</label>
                                <input type="text" class="form-control" name="middlename" id="middlename" maxlength="100">
                      </div>
					<div class="form-group">
                                 <label for="email">Email Address</label>
						         <input type="email" class="form-control" name="email" id="email" maxlength="100">
                                
						
                      </div>
					
					
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="form-group">
                                 <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" name="lastname" id="lastname" maxlength="100">
                      </div>
					
					
				</div>
			</div>
			
		
				
				<div id="form">
				<h4>Where did you hear about paytime Africa?</h4>
			  </div>
				
				<div class="form-group">
                         <label for="gender">Select one or more</label>
						  <select multiple name="s_gender" class="form-control">
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
    

<script src="Myjs/wow.js"></script>
    
    
    <script>
		  
	
	
	new WOW().init();

	  
    </script>
   
    
</body>
</html>