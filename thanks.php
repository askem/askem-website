<?php
$email = $_POST['email'];
$company = $_POST['company'];
$phone = $_POST['phone'];
$full_name = $_POST['full_name'];
$description = $_POST['description'];
$leadID = trim(com_create_guid(), '{}');

$url = 'https://api.askem.com/0/external/leads';
$data = array(
	'firstName' => $full_name,
	'company' => $company,
	'email' => $email,
	'phone' => $phone,
	'description' => $description,
	'ID' => $leadID
);
//echo(json_encode($data));
$options = array(
    'http' => array(
        'header'  => "Content-type: application/json; charset=utf-8\r\n",
        'method'  => 'POST',
        'content' => json_encode($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) {
	//echo('Error');
}
?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--[if IE]>
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    
    <!--[if IE]>
    	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <meta name="description" content="Askem is a technology company that builds simple, powerful products for people and businesses." />
    <meta name="author" content="" />
    
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	
    <title>Submission Received | Askem Inc.</title>
    
    <!-- CSS Styles -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" />
    
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    
    <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    
</head>

<body class="cms_index">
	<!-- Header Start -->
    <div id="header">    	
        <div class="mainnav">
            <div class="container">
                <!-- Logo Start -->
                <div class="logo col-md-2 col-sm-8 col-xs-8">
                    <a class="text_logo" href="/"><img src="img/logo-white-150x38.png" alt="Askem Logo"/></a>
                </div>
                <!-- Logo End -->
                
                <!-- Menu Start -->
                <div class="col-md-10 col-sm-4 col-xs-4">
                    <a id="offcanvas_toggler" class="visible-sm visible-xs" href="#"><i class="fa fa-bars"></i></a>
                    <div class="main_navigation">
                        <ul>
                            <li><a href="/">How it works</a></li>
                            <li><a href="agencies.html">For Research Agencies</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li class="get_quote"><a href="https://quote.askem.com">Get Quote</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Menu End -->
            </div>
        </div>
        
        <div class="container">
            <!-- Header Content Start -->
            <div class="header_content">
                <h1>Thank You!</h1>
            </div>
            <!-- Header Content End -->
        </div>
    </div>
    <!-- Header End -->
    
    <!-- Content Start -->
	<div class="content_wrapper">
    	<!-- Overview Start -->
        <div id="overview">
        	<div class="container">
                
                
            	<h2>We've received your submission</h2>
                <p>
                    Our representative will contact you within 24 hours with more information. 
                </p>
                
            
            </div>
        </div>
        <!-- Overview End -->
        
        
        	<!-- Team Start -->
        
        <!-- Overview End -->
        
        
        <!-- Footer Start -->
        <div id="footer">
        	<div class="container">
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo"><img src="img/Logo-150x36.png" alt="Askem Logo"/></div>
                
                 <ul class="footer_menu">
                           <li><a href="/">How it works</a></li>
                            <li><a href="agencies.html">For Research Agencies</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li class="get_quote"><a href="https://quote.askem.com">Get Quote</a></li>
                        </ul>
                </div>
                
                <div class="copyright">
            	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">Copyright &copy; 2016 Askem Inc.&nbsp;&nbsp;•&nbsp;&nbsp;All rights reserved&nbsp;&nbsp;•&nbsp;&nbsp;<a href="https://askem.com/privacy">Privacy Policy</a></div>
                <div class="social col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <ul class="social_links">
                        <!--<li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                        <li><a href="https://www.linkedin.com/company/2855667"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>
    <!-- Content End -->
    
    <!-- Offcanvas Menu Start -->
    <div class="offcanvas_menu">
        <a href="#" class="close_offcanvas"><i class="fa fa-remove"></i></a>
        <div class="offcanvas_inner">
            <div class="sp_module">
                <h3 class="sp_module_title"></h3>
                <div class="sp_module_content">
                    <ul class="nav menu">
                         <li><a href="/">How it works</a></li>
                            <li><a href="agencies.html">For Research Agencies</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li class="get_quote"><a href="https://quote.askem.com" >Get Quote</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas_overlay"></div>
    <!-- Offcanvas Menu End -->
    
        <!-- Offcanvas Form Start -->
    <div class="offcanvas_form">
        <a href="#" class="close_offcanvas"><i class="fa fa-remove"></i></a>
        <div class="offcanvas_form_inner">
            <div class="sp_module">
                <div class="sp_module_title"><h3>learn more</h3></div>
                <div class="sp_module_content">
                   <div id="learnmoreform">   
					   <form action="/thanks.php" method="post">
					       <div class="form-group">
					       <label for="name">Name</label>
					       <input type="text" name="full_name" required class="form-control" class="error" id="name" placeholder="First Name, Last Name" aria-required="true" aria-invalid="true">
					     </div>
					     <div class="form-group">
					       <label for="email">Email address</label>
					       <input type="email" name="email" required class="form-control" class="error" id="email" placeholder="Email" aria-required="true" aria-invalid="true">
					     </div>
					        <div class="form-group">
					       <label for="company" class="nr">Company</label>
					       <input type="text" name="company" class="form-control" id="company" placeholder="Company">
					     </div>
					            <div class="form-group">
					       <label for="phone" class="nr">Phone</label>
					       <input type="text" name="phone" class="form-control" class="error" id="phone" placeholder="Phone Number" aria-required="false" aria-invalid="true">
					     </div>
					           <div class="form-group"> <p class="required">Mandatory field</p></div>
					       <div class="second">
					   
					       <div class="form-group">
					       <label for="description" class="nr">Tell us about your project</label>
					       <textarea class="form-control" name="description" id="description" rows="3" placeholder="eg: number of responders, project description"></textarea>
					     </div>
					   
					    <div class="form-group"> <button type="submit" class="btn btn_getstart submit">Submit</button>
					        <p>Our representative will be in contact with you in the next 24 hours.</p></div>
					           </div>
					   </form>
    </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas_overlay"></div>
    <!-- Offcanvas Form End -->
    
    <!-- JavaScript -->
    <script src="js/coatFlow.js"></script>
    <script src="js/subscriptions.js"></script>
    
    <script type="text/javascript">
		startFlowSwitcher();
	</script>
    
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/js-functions.js"></script>
	<!-- <? echo $leadID ?> -->
	<script>
	  window.intercomSettings = {
	    app_id: "p1iplum8"
	  };
	</script>
	<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/p1iplum8';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>
	<script src="https://askem.com/pixel.js?pub=Askem&campaign=home_lead" async="async" defer="defer"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-34753664-1', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>
