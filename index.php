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
<link href="mycss/owl.carousel.min.css" rel="stylesheet">
 <link href="mycss/owl.theme.default.css" rel="stylesheet">
 <link href="mycss/animate.css" rel="stylesheet">
 
 <link href="https://fonts.googleapis.com/css?family=Mandali" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<script src="myjs/jquery-3.2.1.js"></script>
<script src="Myjs/jquery.tooltip.js"></script>

<link type="text/css" href="cssslider/jquery.bbslider.css" rel="stylesheet" />


<script>
 
 $('#demo').tooltip({

  text: '',
  cls: '',
  position: 'default',
  forcePosition: false,
  animate: false,
  trigger: 'hover',
  showDelay: 200,
  dontHideOnTooltipHover: false,
  selector: ''
});


 window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}




$(document).ready(function() {
	
	$('#myBtn').each(function(){
    $(this).click(function(){ 
        $('html,body').animate({ scrollTop: 0 }, 'slow');
        return false; 
    });
});
    
});


$(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('nav').addClass('shrink');
  } else {
    $('nav').removeClass('shrink');
  }
});
	

</script>

<style>

	.two_phone{
		width: 400px;
	
	}
	
	.image_one img{
		width: 400px;
	}
	

	#product img{
	width: 400px;
}
	
	.nav-image{
		width: 100px;
		height: 80px;
	}
	
	.item img{

}
	
	table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
  

</style>

</head>

<body>




<nav class="navbar navbar-inverse">
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
      <li><a href="#about-us">About  Us</a></li>
      <li><a href="#product">Services</a></li>
		<li><a href="#partners">Our Partners</a></li>
		<li><a href="#how-it-works">How it Works</a></li>
		<li><a href="#contact-us">Contact Us</a></li>
		<li><a href="#get-involved">Get involved</a></li>
		
     
         
    </ul>
  </div>
  </div>
</nav>
	
	
	<section id="slide-banner">
		 <div class="container">
			 <div class="row">
				 <div class="col-md-6 col-sm-12 col-xs-12">
					 
					 <div class="back-text">
			
					 <h1>School Fees Payment Made Easy</h1>
					 <h3>Affordable Installments, Uninterrupted learning, No debt.</h3>
					 <h2>APPLY ONLINE</h2>
							 <a href="parent_apply.php"><button class="btn btn-primary"><i class="fa fa-user"></i>Parent </button></a>
							<a href="school_apply.php"> <button class="btn btn-primary"><i class="fa fa-home"></i>School</button></a>
				 </div>
				 
				 
				 </div>
				 <div class="col-md-6 col-sm-12 col-xs-12">
					 <img src="images/phone_mockups_2.png" class="img-responsive wow zoomIn">
				 </div>
				 
			 </div>
		</div>
	</section>
	
	
	
	<section id="market">
		<div class="container">
			
			
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					
					<div class="market-header">
			               <h1>We are the leading online market for quality affordable schools</h1>
			                <p>Focused on promoting payment of manageable school fees installments (Daily, Weekly, Monthly)</p>
						
						<a href="what-we-do.php"><button class="btn btn-primary">Learn more</button></a>

			         </div>	
				    </div>
				
				
				
				<div class="col-md-6 col-sm-12 col-xs-12">
					
					<div class="market-card">
						
						<div class="media">
                              <div class="media-left">
                                 <span class="fa fa-briefcase market-span"></span>
                              </div>
							
                       <div class="media-body">
                            <h4 class="media-heading">MARKETING</h4>
                            <p>We market and promote private educational institutions across Africa.</p>
						   <a href="what-we-do.php"><button class="btn btn-primary btn-learn">Learn more</button></a>

						    						
                       </div>
                      </div>
							
					</div>
					
					<div class="market-card">
						<div class="media">
                              <div class="media-left">
                                 <span class="fa fa-briefcase market-span"></span>
                              </div>
							
                       <div class="media-body">
                            <h4 class="media-heading">ENHANCEMENT</h4>
                            <p>We enhance School Fees Payment in all our subscribed schools.</p>
						   <a href="what-we-do.php"><button class="btn btn-primary btn-learn">Learn more </button></a>

						    
                       </div>
                      </div>
						
					</div>
					
					<div class="market-card">
						
						  <div class="media">
                              <div class="media-left">
                                 <span class="fa fa-briefcase market-span"></span>
                              </div>
							
                       <div class="media-body">
                            <h4 class="media-heading">ADVOCACY</h4>
                            <p>We advocate for Quality education for all.</p>
						   <a href="what-we-do.php"><button class="btn btn-primary btn-learn">Learn more</button></a>

						     
                       </div>
                      </div>
					</div>

					
				</div>
				
			</div>
		</div>
	</section>
	
	
	<section id="comming">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="down-app">
						<h1>Download the Paytimeafrica app</h1>
						<p>Paytimeafrica is available for Android on the Play Store

and iOS on the App Store</p>
						<div class="store">
						     <a href="https://play.google.com"><img src="images/google-play.png" /></a>
					         <a href="https://www.apple.com/in/ios/app-store/"><img src="images/app-store-badge.png" /></a>
						</div>
					</div>
					
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					
					<img src="images/two-phone.png" class="two_phone img-responsive wow bounceInUp"/>
				</div>
			</div>
		</div>
	</section>
	
	
	
	<section id="affordable-fees">
		<div class="container text-center">
			<h1>Affordable School Fees Payment Scheme (ASFPS)</h1>
			<h4>We Believe In</h4>
			
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="fees-card">
						<h3>EXCELLENCE</h3>
						<p>WE TAILOR HIGH QUALITY PROCESSES YIELDING VALUE BEYOND THE OBVIOUS.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="fees-card">
						<h3>INTEGRITY</h3>
						<p>WE ARE TRANSPARENT, HONEST, ETHICAL AND PROFESSIONAL IN ALL OUR INTERACTIONS</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="fees-card">
						<h3>INNOVATION</h3>
						<p>WE ARE COMMITTED TO CONSTANT AND NEVER ENDING IMPROVEMENT IN OUR SERVICE</p>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	
	
	<section id="product">
		<div class="container">
			
			<h1>Our Services</h1>
			<h2>Enjoy a longer school fees payment period of between 9 to12 months with no collateral required</h2>
			<span class="spa"></span>
			
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<img src="images/sala_sample.png" class="img-responsive wow fadeInLeft">
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="sala-pay">
						 <h3>SalaPay</h3>
						<li>Suitable for salaried individuals</li>
						<li>Longer payment period of up to 12 months</li>
						<li>Manageable transactional fees of 5%</li>
						<li>Deduction from source/check off</li>
						<li>Bank standing orders acceptable</li>
						<li>Deductions less 50% of salary</li>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="sala-pay">
						<h3>E-pay</h3>
						<li>Suitable for foreign nationals or nationals in the diaspora</li>
						<li>Master card, Maestro and VISA Debit access</li>
						<li>Available for Google play & IOS across key MNO’s</li>
						<li>Longer payment period up to 10 months</li>
						<li>Bank standing orders acceptable</li>
						<li>Competitive exchange rates</li>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<img src="images/epay_sample.png" class="img-responsive wow fadeInRight">
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<img src="images/flex_sample.png" class="img-responsive wow fadeInLeft">
					
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					
					<div class="sala-pay">
						<h3>flexiPay</h3>
						<li>Suitable for self-employed individuals</li>
						<li>USSD (feature phone) access</li>
						<li>Cash deposits at designated offices OR bank</li>
						<li>1-9 months’ payment period</li>
						<li>Bank standing order acceptable</li>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	<!------------------------------
	
	<section id="scholarship">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					
					<div class="down-app">
						<h3 style="color: white; font-weight: bold;">Download the Paytimeafrica app now</h3>
						<div class="store">
						     <a href="https://play.google.com"><img src="images/google-play.png" /></a>
					         <a href="https://www.apple.com/in/ios/app-store/"><img src="images/app-store-badge.png" /></a>
						</div>
					</div>
				
				
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div id="get-scholar">
						 <h3>SCHOLARSHIPS & BURSARIES</h3>
						<span class="span-scholar"></span>
						<li>Suitable for exceptional academic performers and the less privileged students </li>
						<li>USSD (feature phone) access for additional payments</li>
						<li>Cash deposits at designated offices OR bank</li>
						
						<a href="scholarships.php"><button class="btn btn-success">Go to scholarship <i class="fa fa-arrow-right"></i></button></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	---------------------------->
	
	
	
	<section id="partners">
		<div class="container text-center">
			 <div class="partners">
			 <h1>Our Partners</h1>
			 <h3>Our partnering schools will have an edge in intake and access to opportunities than other schools.</h3>
			<span class="span-spa"></span>
			</div>
			
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="patner-image">
						<img src="images/mastercard.jpg" class="img-responsive wow zoomIn">
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="patner-image">
						<img src="images/visa.png" class="img-responsive wow zoomIn">
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="patner-image">
						<img src="images/stripe.png" class="img-responsive wow zoomIn">
					</div>
				
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="patner-image">
						<img src="images/beyonic.png" class="img-responsive wow zoomIn">
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="patner-image">
						<img src="images/mpsea.jpg" class="img-responsive wow zoomIn">
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="patner-image">
						<img src="images/mtn_log.jpg" class="img-responsive wow zoomIn">
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="patner-image">
						<img src="images/airtel.png" class="img-responsive wow zoomIn">
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="patner-image">
						<img src="images/africatalking.png" class="img-responsive wow zoomIn">
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="patner-image">
						<img src="images/finance.jpg" class="img-responsive wow zoomIn">
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="patner-image">
						<img src="images/africell.png" class="img-responsive wow zoomIn">
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="patner-image">
						<img src="images/tdbank.jpg" class="img-responsive wow zoomIn">
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12"></div>
			</div>
			
			
					</div>
	</section>
	
	
	
	<section id="about-us">
		<div class="container">
			<div class="about-header text-center">
				<h1>About us</h1>
			</div>
			
			<div class="row">
				<div class="col-md-3 col-sm-12 col-xs-12">
					
					<div class="mission-one">
					<div class="mission">
						<h3><i class="fa fa-calendar"></i>OurMission</h3>
						<p>To promote Quality Education while eliminating bottlenecks in school fees payment in Africa</p>
					</div>
					
					<div class="mission">
						<h3><i class="fa fa-home"></i>About Paytime Africa</h3>
						<p>We are Africa’s innovative school fees payment / Education Financing Solution (EFS) through which negotiated manageable school fees installments can support 1.5 million children across Africa to stay in school.</p>
					</div>
					</div>
					
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					
					<img src="images/feature-image.png" class="img-responsive wow zoomIn">
					
				</div>
				<div class="col-md-3 col-sm-12 col-xs-12">
					
					<div class="mission-one">
				    
					<div class="mission">
						<h3><i class="fa fa-bell"></i>Our Vision</h3>
						<p>To be a one stop center for Convenient, Secure & Affordable Quality Education.</p>
					</div>
					
					
					<div class="mission">
						<h3><i class="fa fa-briefcase"></i>OUR POSITION TODAY</h3>
						<p>We are developing an integrated school fees payment platform valued at $2M upon completion which will allow payments across all major mobile network operators (MNOs) as well as payments off VISA and MasterCard from over 150+ countries around the world.</p>
					</div>
					</div>

				
				</div>
			</div>
		</div>
	</section>
	
	
	<section id="testimonial">
		<div class="container  text-center">
			<div id="test">
				<h1>Testimonials</h1>
				<span class="span"></span>
			</div>
			
			<div class="row">
				<div class="col-md-1 col-sm-12 col-xs-12"></div>
				<div class="col-md-10 col-sm-12 col-xs-12">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<p>I can now concentrate in my salon business and pay school fees monthly off my mobile account without going to the bank!</p>
							<br />
						    <h4>Ssemakula Gerald</h4>
						</div>
					
					    <div class="item">
							<p>Wow! Paytime Africa works like a charm!! I was kind of skeptical!! Its like magic!! I don’t believe it! It is my friend for life! Thank you so much you guys!</p>
							<br />
						    <h4>Marion Muwonge</h4>
						</div>
						
						<div class="item">
							<p>This is so good to be true. I’ve been using it since last year December and my daughter has never been sent back home for school fees balances Awesome and convenient!</p>
							<br />
						    <h4>Phionah Mulindwa</h4>
						</div>
					</div>
					
				</div>
				<div class="col-md-1 col-sm-12 col-xs-12"></div>
			</div>
		</div>
	</section>
	
	
	
	<section id="how-it-works">
		<div class="container">
			<span class="works"></span>
			<h1>How It Works</h1>
			<h3>Get started in 2 easy steps</h3>
			<span class="works"></span>
			
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="image_one">
						<img src="images/sendmoney.png" class="img-responsive wow fadeInLeft">
					</div>
				
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="spanner">
						<h2><i class="fa fa-spinner"></i>STEP 1</h2>
						<div class="step">
							<p>Complete the online Application form in a couple of simple steps carefully selecting the school of choice</p>
							<p>We’ve made it really easy with an option to suite everyone:</p>
							<p>Get your virtual school fees payment account today!</p>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="spanner">
						<h2><i class="fa fa-spinner"></i>STEP 2</h2>
						<div class="step">
							<p>Once ones application is approved, student matched to a school, admission/continuation confirmed</p>
							<p>Top up your virtual School Fees Account</p>
							<p>Choose a top up method USSD, Online , Bank Transfer</p>

						</div>
					</div>
				
				
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="image_one">
						<img src="images/paytimephone.png" class="img-responsive wow fadeInRight">
					</div>
				</div>
			</div>
		</div>
	</section>
	
	

	
	<section id="comming">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="down-app">
						<h1>Download the Paytimeafrica app</h1>
						<p>Paytimeafrica is available for Android on the Play Store

and iOS on the App Store</p>
						<div class="store">
						     <a href="https://play.google.com"><img src="images/google-play.png" /></a>
					         <a href="https://www.apple.com/in/ios/app-store/"><img src="images/app-store-badge.png" /></a>
						</div>
					</div>
					
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					
					<img src="images/two-phone.png" class="two_phone img-responsive wow zoomInUp"/>
				</div>
			</div>
		</div>
	</section>
	
	<section id="contact-us">
		<div class="container">
			<div class="send-message text-center">
			<h1>How can we help you?</h1>
			<h3>Send us a message</h3>
		</div>
			
			
				<form method="post" action=""  autocomplete="off">
					
					
					<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="form-group">
                                            <label for="email">First Name</label>
                                         <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" maxlength="100">
                                       </div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="form-group">
                                            <label for="lname">Last Name</label>
                                         <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" maxlength="100">
                                       </div>
					</div>
						
					
					</div>
					
					
				
					
					<div class="row">
						
						<div class="col-md-12 col-sm-12 col-xs-12">
						
						 <div class="form-group">
                                 <label for="email">Your email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" maxlength="100">
                            </div>
							   <br>
    
                         <div class="form-group">
                             <label for="message">your Message</label>
                            <textarea name="message" class="form-control" rows="5" placeholder="Type message here....." id="message" maxlength="300"></textarea>
                        </div>
    
                      <br>
    
                      <input type="submit" class="btn btn-warning btn-block" value="Send Message" name="submit" id="send_data">
					
						
					</div>
                   
					</div>
					
				</form>
			
		</div>
	</section>
	
	
	<!------------------------------
	
	<section id="site_map">
		<div class="container">
			 <div class="send_message text-center">
			<h1>Our Address</h1>
	
		    </div>
			
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">						
					
					<div class="contact-address">
						
					
						
						     <h4>UGANDA</h4>
						    <p>Muzza Complex 2nd Floor, Suite s8-s9 Plot 39, Jinja Road, mukono</p>
                            <p>P.O.Box 286, Kampala, Uganda</p>
					        <p>Telephone: +256-200-905-141</p>
					        <p>Mobile: +256-700-505-000</p>
						
						
					
					      <br></br>
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7979.4804445735645!2d32.750319!3d0.358494!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2368860ed90ef7cf!2sMuzza%20Hotel!5e0!3m2!1sen!2sug!4v1570187177881!5m2!1sen!2sug" width="500" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					         
					      
					</div>
					
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					
					<div class="contact-address">
						
		
				
				         <h4>CANADA</h4>
						<p>The Heathview 2504 320 Tweedsmuir Avenue M5P 2Y3 Toronto, Ontario Canada</p>
						<p>Telephone: +1-647-377-8463</p>
						<p>Email: info@paytimeafrica.com</p>
                       
						
						<br></br>
						
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5770.360590077611!2d-79.414337!3d43.686015!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x35ce134ca6b38946!2sThe%20Heathview!5e0!3m2!1sen!2sug!4v1570187394105!5m2!1sen!2sug" width="500" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					
					</div>
			</div>
			</div>
		</div>
	</section>


--------------------------------->

			 
			 
	<section id="get-involved">
		<div class="container  text-center">
			
			<div class="education">
					  <h1>Give Education</h1>
					  <p>100% of online donations go towards educating children.</p>
					  <h3>Ways to give</h3>
				  </div>
			
			<div class="row">
				<div class="col-md-1 col-sm-12 col-xs-12"></div>
				<div class="col-md-10 col-sm-12 col-xs-12">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<img src="images/unnamed.png" class="img-responsive" />
							   <h4>Sponsorships</h4>
							   <p>Sponsoring a child is a personal way to show God’s love to a child in need.</p>
						</div>
					
					    <div class="item">
							<img src="images/epay_sample.png" class="img-responsive" />
							  <h4>Gift Catalog</h4>
							  <p>Power up your impact by giving gifts that multiply or donate in someone’s honor.</p>
							  
						</div>
						
						<div class="item">
							<img src="images/feature-image.png" class="img-responsive" />
							  <h4>Gift Catalog</h4>
							  <p>Power up your impact by giving gifts that multiply or donate in someone’s honor.</p>
							
						</div>
					</div>
					
				</div>
				<div class="col-md-1 col-sm-12 col-xs-12"></div>
			</div>
		</div>
	</section>

			 
			 <section id="payment">
				 <div class="container">			
					 
					 
					 <div class="row">
				 <div class="col-md-12">
					 <div class="payment-detail">
						 
						 <h3>Payment Details</h3>
						 
						 
						 
						 <table>
  <tr>
    <td>BANK NAME:</td>
    <td>TD CANADA TRUST</td>
  </tr>
  <tr>
    <td>ACCOUNT NAME:</td>
    <td>PAY TIME AFRICA INC</td>
  </tr>
							 
  <tr>
    <td>ACCOUNT NUMBER:</td>
    <td>5225189</td>
  </tr>
  <tr>
    <td>TRANSIT NO:</td>
    <td>17602</td>
  </tr>
  <tr>
    <td>INSTITUTION NO:</td>
    <td>004</td>
</tr>
							 
							 <tr>
    <td>SWIFT CODE:</td>
    <td>TDOMCATTTR</td>
</tr>
							 <tr>
    <td>BRANCH ADDRESS:</td>
    <td>510 ST.CLAIR AVENUE WEST TORONTO ONTARIO M 6C1A2</td>
</tr>
</table>
						 
  
				 </div>
			 </div>
		</div>
					 
		</div>

	</section>



   <section id="footer">
	   <div class="container">
		   <div class="dow">
			   <div class="row">
				   <div class="col-md-4 col-sm-4 col-xs-4">
					   <img src="images/log.png" class="log"/>
				   </div>
				   <div class="col-md-4 col-sm-4 col-xs-4">
					   
					   <div class="foot-links">
						
						<a href="#about-us"><li>About Us</li></a>
					   <a href="#product"><li>Services</li></a>
					   <a href="#how-it-works"><li>How it works</li></a>
					   <a href="#contact-us"><li>Contact us</li></a>
					   
					  </div>
				   </div>
				   <div class="col-md-4 col-sm-4 col-xs-4">
					   
					   <div id="social">
						   <h4>Join Us</h4>
				            <a href="https://tinyurl.com/paytime-Africa-Facebook-Page;" > <i class="fa fa-facebook-f" id="border"></i></a>
                            <a href="" > <i class="fa fa-twitter" id="border"></i></a>
				            <a href="" > <i class="fa fa-youtube" id="border"></i></a>
                            <a href="" > <i class="fa fa-instagram" id="border"></i></a>

                      </div>
				   </div>
			   </div>
			   <hr>
	
			   <div class="row">
				   <div class="col-md-6 col-sm-12 col-xs-12">
					   <div class="policy">
						   <li>Privacy Policy</li>
						   <li>Terms of Service</li>
					   </div>
				   </div>
				   
				   <div class="col-md-6 col-sm-12 col-xs-12">
					   <div class="images">
						   
						   
						   <!--------------------------
                           <img src="images/mastercard.jpg">
						   <img src="images/mpsea.jpg">
						   <img src="images/tdbank.jpg">
						   
						   ---------------------->
					   </div>
				   </div>
			   </div>
			   
			   <div class="row">
				   
				   <div class="col-md-6 col-sm-12 col-xs-12">
					   
					   <div class="address">
					    <p>Address: Uganda-Muzza Complex 2nd Floor, Suite s8-s9 Plot 39, Jinja Road, mukono, P.O.Box 286, Kampala, Uganda</p>
					   
						<p>Address: Canada, The Heathview 2504 320 Tweedsmuir Avenue M5P 2Y3 Toronto, Ontario Canada, Telephone: +1-647-377-8463, Email: info@paytimeafrica.com</p>
					   
					   <h3>Copyright @2019 - PayTime Africa Limited</h3>
						</div>
				
				   </div>   
				   <div class="col-md-6 col-sm-12 col-xs-12"></div>
			   </div>
			   
		   </div>
	   </div>
</section>
 
 
 
  

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="Myjs/wow.js"></script>
	
	<script src="Myjs/owl.carousel.min.js"></script>
    <script src="Myjs/owl.carousel.js"></script>
    
    
    <script>
		
	
		
		$(document).ready(function() 
	{
	
	$('.owl-carousel').owlCarousel({
		
		
	loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true,

			loop:true,
			autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true
        },
        600:{
            items:1,
            nav:false,
			loop:true,
			autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true
        },
        1000:{
            items:1,
            nav:true,
            loop:true,
			autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true
        }
		
	}
		
		});
} );
		
			new WOW().init();
	  
    </script>
   
    
</body>
</html>