<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="Keywords" content="clinical trial software, clinical trials, clinical monitoring, regulatory document maintenance, drug development, clinical data, molecules" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/flexslider.css" />
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,300,600'>
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Lato:400italic,600italic,400,300,600'>
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.5.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/app.1.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.1.css" />
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->
  <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon/favicon.ico">
</head>
<body id="arg-index">
	<div class="big-container">
			<!-- header Starts -->
			<header class="fixed-header">
			  <div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
					  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<div class="logo">
						  		<h1><a href="<?php echo Yii::app()->request->baseUrl;?>/"><img class="header-logo-image" src="<?php echo Yii::app()->request->baseUrl; ?>/img/arg-logo.1.png"/></a></h1>
						  		<div class="arg-name"></div>
							</div>
					  </div>
					</div>
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-9">
						<div class="row">
					  		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<ul class="arg-top-menu"">
							<li><a title="News" alt="News"  href="<?php echo Yii::app()->request->baseUrl;?>/about/news">News</a></li> 
							<li><a title="Contact" alt="Contact"  href="<?php echo Yii::app()->request->baseUrl;?>/contact">Contact</a></li>    
							<li><a title="TrialVista Login" target="_blank" alt="TrialVista Login" href="https://www.quickbase.com/db/bb245k2fx?a=dbpage&pagename=arg_trialvista_login.html">Login</a></li>
							<li>
								<form class="arg-search" action="<?php echo Yii::app()->request->baseUrl;?>/search-results" id="cse-search-box">
									<input type="hidden" name="cx" value="007417094008816408753:znoj9o6tyts" />
									<input type="hidden" name="cof" value="FORID:9" />
									<input type="hidden" name="ie" value="UTF-8" />
									<input class="arg-search" id="q" type="search" placeholder="Search">
								</form>
							</li>   
						</ul>
					  		</div>
					  	</div>
					  	<div class="row">
					  		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="tagline">
						  			<h5><i>Your therapies, to people. Faster.</i><span class="tm-header-tiny">™</span></h5>
								</div>
					  		</div>
					  	</div>
				  	</div>
				</div>
			  </div>
			  <div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-11 col-xs-12">
						<ul class="arg-menu">
						  <li><a title="Expertise" alt="Expertise" href="<?php echo Yii::getPathOfAlias('local');?>/expertise">Expertise</a>
							  <ul>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/expertise/oncology" class="expertise">Oncology</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/expertise/immunology-allergy" class="expertise">Immunology/Allergy</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/expertise/metabolic-endocrinology" class="expertise">Metabolic/Endocrinology</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/expertise/opthalmology" class="expertise">Ophthalmology</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/expertise/pain-management" class="expertise">Pain Management</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/expertise/infectious-disease" class="expertise">Infectious Disease</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/expertise/cns-neurology" class="expertise">CNS/Neurology</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/expertise/medical-devices" class="expertise">Medical Devices</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/expertise/urology" class="expertise">Urology</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/expertise/genetic-disorders" class="expertise">Genetic Disorders</a></li>
							  </ul>
						  </li>
						  <li><a title="Services" alt="Services"  href="<?php echo Yii::getPathOfAlias('local');?>/services">Services</a>
							  <ul>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/services/phase1" class="services">Phase I</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/services/project-management" class="services">Project Management</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/services/clinical-monitoring" class="services">Clinical Monitoring</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/services/site-management" class="services">Investigative Site Management</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/services/biostatistics-data-management" class="services">Biostatistics and Data Management</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/services/medical-writing-regulatory-affairs" class="services">Medical Writing and Regulatory Affairs</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/services/patient-recruitment" class="services">Investigator & Patient Recruitment</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/services/quality-assurance" class="services">Quality Assurance</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/services/clinical-trial-management-system" class="services">Clinical Trial Management Systems (CTMS)</a></li>
							  </ul>
						  </li>
							<li><a title="Technology" alt="Technology"  href="<?php echo Yii::getPathOfAlias('local');?>/technology">Technology</a>
							  <ul>
								<li><a target="_blank" href="http://www.atlanticresearchgroup.com/trialvista" class="solutions">TrialVista™</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/technology/medrio" class="solutions">Medrio™</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/technology/openclinica" class="solutions">OpenClinica™</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/technology/comprehend-clinical" class="solutions">Comprehend Clinical™</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/technology/arisg" class="solutions">Aris G™</a></li>
							  </ul>
							</li>
							<li><a title="Careers" alt="Careers"  href="<?php echo Yii::getPathOfAlias('local');?>/careers">Careers</a> 
							  <ul>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/careers/our-story" class="careers">Our Story</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/careers/what-people-say" class="careers">What People Say</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/careers/benefits" class="careers">Benefits</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/careers/job-openings" class="careers">Career Openings</a></li>
							  </ul>
							</li>
						  <li><a title="About ARG" alt="About ARG"  href="<?php echo Yii::getPathOfAlias('local');?>/about/">About</a> 
							  <ul>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/about/mission" class="about">Mission</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/about/leadership" class="about">Leadership</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/careers" class="about">Careers</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/about/news" class="about">News</a></li>
								<li><a href="<?php echo Yii::getPathOfAlias('local');?>/about/global-reach" class="about">Global Reach</a></li>
							  </ul>
						  </li>
						</ul> 
					</div>          
					<div class="col-lg-4 col-md-4 col-sm-1"></div>           
				</div>		  
			  </div>
			</header>
			<!-- header ends -->
		<!-- content begins -->
		<?php echo $content; ?>
		<!-- content ends -->
			<!-- footer starts -->
			<section class="footer">
			  <div class="container">
				<footer>  
					<div class="row menu-social">
						<div class="col-lg-5 col-md-5 col-sm-5 col-xs-6">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><ul class="arg-footer-menu"><li><a title="Advisors" alt="Advisors"  href="<?php echo Yii::getPathOfAlias('local');?>/about/board">Advisors</a></li></ul></div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><ul class="arg-footer-menu"><li><a title="Case Studies" alt="Case Studies"  href="<?php echo Yii::getPathOfAlias('local');?>/about/case-studies">Case Studies</a></li></ul></div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><ul class="arg-footer-menu"><li><a title="TrialVista" alt="TrialVista" target="_blank" href="http://www.atlanticresearchgroup.com/trialvista">TrialVista</a></li></ul></div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-1"></div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
								<a class="social-link" href="http://www.linkedin.com/company/atlantic-research-group">
									<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/in.1.png" alt="atlantic research group linkedin">
								</a>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
								<a class="social-link" href="https://twitter.com/argcro" target="_blank">
									<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/twtr.1.png" alt="atlantic research group twitter page">
								</a>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
								<a class="social-link" href="https://www.facebook.com/pages/Atlantic-Research-Group-Inc/284737921550452" target="_blank">
									<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/fb.1.png" alt="atlantic research group facebook page">
								</a>
							</div>
						</div>
					</div>
					<div class="row t-and-c-copyright">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-5">
							<div class="t-and-c"><a href="<?php echo Yii::getPathOfAlias('local');?>/terms-and-conditions">Terms and Conditions</a></div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4"></div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-7"><div class="copyright">© 2004 - <script language="JavaScript" type="text/javascript">
								now = new Date;
								theYear=now.getYear();
								if (theYear < 1900)	theYear=theYear+1900;
								document.write(theYear);
							</script> Atlantic Research Group, Inc. All rights reserved.</div>
					  	</div>
					</div>
				</footer>
			  </div>
			</section>
			<!-- footer ends -->
	</div>
	<!-- js includes -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/_lib/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/_lib/jquery.easing-1.3.js"></script> 
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script> 
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.iosslider.min.js"></script> <!-- ios slider -->
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.flexslider-min.js"></script> <!-- Flex slider -->
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.min.js"></script>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-846726-1']);
		_gaq.push(['_trackPageview']);
		(function() {
		  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
  </script>
  <script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-846726-1', 'atlanticresearchgroup.com');
  ga('send', 'pageview');
  </script>
  <script type="text/javascript" src="http://www.google.com/jsapi"></script>
  <script type="text/javascript">
	google.load('search', '1');
  	google.setOnLoadCallback(function() {
	google.search.CustomSearchControl.attachAutoCompletion('007417094008816408753:znoj9o6tyts', document.getElementById('q'),'cse-search-box'); });
  </script>
</body>
</html>