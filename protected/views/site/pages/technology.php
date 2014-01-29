<?php
/* @var $this SiteController */

$this->pageTitle='Technology | ' . Yii::app()->name;
$this->breadcrumbs=array(
	'Technology',
); 
?>
<div class="big-container">
	<section class="svc-banner-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><h1 class="title" id="page-title">Technology</h1></div>
				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			</div>
		</div>
	</section>
	<section class="tech-hero-image">
		<div class="container">
			<div class="row tech-hero-bg">
				<div class="col-lg-7 col-md-7 col-sm-8 col-xs-11">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h3>SaaS infrastructure to support your CTMS and data technology needs.</h3></div>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-4 col-xs-1"></div>
			</div>
		</div>
	</section>
	<section class="top-level-4-column">
		<div class="container">
			<div class="row svc-4-columns">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-first"><h2>Biostatistics and<br/>Data Management</h2><p>ARG uses big data and analytics to optimize the CRO process. That means a more relevant, personal, and responsive experience for all of our stakeholders.</p>
					<br><br><a href="<?php echo Yii::getPathOfAlias('local');?>/technology/medrio" class="mini-call-to-action">See our Phase 1 experience</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-nth"><h2>Patient and Site Visit Management</h2><p>TrialVista CTMS - a patient tracking application customized to the unique aspects of your trial.</p>
					<br><br><a href="<?php echo Yii::getPathOfAlias('local');?>/technology/trialvista" class="mini-call-to-action">See our specialities</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-nth"><h2>Pharmacovigilance</h2><p>We partner with industry-leading suppliers to track serious adverse events.</p><br/>
					<br><br><br><a href="<?php echo Yii::getPathOfAlias('local');?>/technology/aris-g" class="mini-call-to-action">Learn more about patient safety</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-last"><h2>Data Security</h2><p>Encrypted storage and transmission of sensitive health data.</p><br/>
					<br><br><a href="<?php echo Yii::getPathOfAlias('local');?>/technology/trialvista" class="mini-call-to-action">Learn more about TrialVista</a>
				</div>
			</div>
		</div>
	</section>
</div>
