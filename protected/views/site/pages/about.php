<?php
/* @var $this SiteController */


$this->pageTitle='About Us | ' . Yii::app()->name;
$this->breadcrumbs=array(
	'About',
); 
$q = 'https://atlanticresearchgroupinc.quickbase.com/db/bimt8apw9?a=API_DoQuery&apptoken=dvxmdr2b2eyhzgdt893uibwja944&qid=5&options=num-1.sortorder-D';
$response = Yii::app()->utils->get_url($q);
$xml = simplexml_load_string($response['content']);
$contentXML = $xml->xpath("record/content");
$content = (string) $contentXML[0][0];
$contentURIXML= $xml->xpath("record/content_uri");
$contentURI = (string) $contentURIXML[0][0];
$latestNewsHTML =  $content ;
?>
<div class="big-container">
	<section class="about-banner-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><h1 class="title" id="page-title">About Atlantic Research Group</h1></div>
				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			</div>
		</div>
	</section>
	<section class="about-hero-image">
		<div class="container">
			<div class="row about-hero-bg">
				<div class="col-lg-6 col-md-6 col-sm-8 col-xs-11">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h3>On a mission to help innovators bring new therapies to market.</h3></div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-4 col-xs-1"></div>
			</div>
		</div>
	</section>
	<section class="top-level-4-column">
		<div class="container">
			<div class="row section-4-columns">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-first"><h2>Our Story</h2><p>When we began our journey in 2004, we knew there was a better way. We found it.</p>
					<br><br><a href="<?php echo Yii::getPathOfAlias('local');?>/about/our-story" class="mini-call-to-action">Read more</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-nth"><h2>Newsroom</h2><p><?php echo $latestNewsHTML; ?></p>
					<br><br><a href="<?php echo Yii::getPathOfAlias('local');?>/about/news" class="mini-call-to-action">See all news items</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-nth"><h2>Leadership</h2><p>Learn about ARG's world-class leadership team.</p>
					<br><br><br><a href="<?php echo Yii::getPathOfAlias('local');?>/about/leadership" class="mini-call-to-action">Learn more</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-last"><h2>Careers</h2><p>Check out available jobs and benefits of working at ARG.</p>
					<br><br><a href="<?php echo Yii::getPathOfAlias('local');?>/about/careers" class="mini-call-to-action">See all careers</a>
				</div>
			</div>
		</div>
	</section>
	<div class="container about-summary-zone">
		<div class="row about-summary">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h3>We specialize in the needs of agile and emerging biopharmaceutical companies</h3>
				<p>Start with one savvy business leader with a passion for execution, and another with passion for therapeutic technologies and the process of bringing them to market.  Add an accomplished professor from one of the world's most prestigious universities. These are the fundamental ingredients of Atlantic Research Group.</p>
				<br><br>
			</div>
		</div>
		<div class="row about-3-col">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="col-first">
					<strong>Where does Atlantic Research Group help?</strong><br /><br />
					<p>Hundreds of clinical trials encompassing tens of thousands of patients at over 5000 investigative sites.</p>
					<br /><a href="<?php echo Yii::getPathOfAlias('local');?>/expertise"" class="mini-call-to-action">See a list of trials</a><br />
					<a href="<?php echo Yii::getPathOfAlias('local');?>/contact-investigator" class="mini-call-to-action">Get listed in ARG's investigator database</a><br /><br />
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="col-nth">
					<strong>We partner with industry leaders</strong><br /><br />
					<p>Technology partnerships for biostatistics, pharmacovigilance, and safety.</p>
					<br /><a href="<?php echo Yii::getPathOfAlias('local');?>/contact-partner" class="mini-call-to-action">Become a partner</a><br /><br />
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="col-last">
					<strong>Comprehensive grasp of the clinical trial process</strong><br /><br />
					<p>We eat our own dog food: TrialVista® - our award winning CTMS based on proven, secure, HIPAA-compliant software-as-a-service (SaaS) technology. </p>
					<br /><a href="<?php echo Yii::getPathOfAlias('local');?>/contact" class="mini-call-to-action">Speak with an expert</a><br /><br />
				</div>
			</div>
		</div>
		<div class="about-summary-cols3"</div>
</div>
