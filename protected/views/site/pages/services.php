<?php
/* @var $this SiteController */

$this->pageTitle='Services | ' . Yii::app()->name;
$this->breadcrumbs=array(
	'Services',
); 
?>
<div class="big-container">
	<section class="svc-banner-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><h1 class="title" id="page-title">Services</h1></div>
				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			</div>
		</div>
	</section>
	<section class="svc-hero-image">
		<div class="container">
			<div class="row svc-hero-bg">
				<div class="col-lg-7 col-md-7 col-sm-8 col-xs-11">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h3>What are your critical business needs?<br/>ARG delivers expertise and quality.</h3></div>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-4 col-xs-1"></div>
			</div>
		</div>
	</section>
	<section class="top-level-4-column">
		<div class="container">
			<div class="row svc-4-columns">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-first"><h2>Phase 1 Services</h2><p>Diabetes, oncology, ophthalmology and healthy volunteer studies. Partnerships with international and US clinics.</p>
					<br><br><a href="<?php echo Yii::getPathOfAlias('local');?>/services/phase1" class="mini-call-to-action">See our Phase 1 experience</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-nth"><h2>Clinical Monitoring</h2><p>Monitors are trained in FDA and ICH/GCP regulations. Available across phases (including post-market analyses).</p>
					<br><br><a href="<?php echo Yii::getPathOfAlias('local');?>/services/clinical-monitoring" class="mini-call-to-action">See our specialities</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-nth"><h2>Quality Assurance</h2><p>Quality audits for Clinical Protocols, Investigative Sites, and Trial Master File (TMF).</p><br/>
					<br><br><br><a href="<?php echo Yii::getPathOfAlias('local');?>/services/quality-assurance" class="mini-call-to-action">View QA plans</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-last"><h2>Medical Writing</h2><p>Protocol development, literature review, regulatory strategy and guidance, and more.</p><br/>
					<br><br><a href="<?php echo Yii::getPathOfAlias('local');?>/services/medical-writing-regulatory-affairs" class="mini-call-to-action">See sample documents</a>
				</div>
			</div>
		</div>
	</section>
	<div class="container svc-summary-zone">
		<div class="row svc-summary">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<h5>Clinical research organization services:</h5>
				<ul>
					<li><a href='<?php echo Yii::getPathOfAlias('local');?>/services/phase1'>Phase 1 Services</a></li>
					<li><a href='<?php echo Yii::getPathOfAlias('local');?>/services/project-management'>Project Management</a></li>
					<li><a href='<?php echo Yii::getPathOfAlias('local');?>/services/clinical-monitoring'>Clinical Monitoring</a></li>
					<li><a href='<?php echo Yii::getPathOfAlias('local');?>/services/site-management'>Investigative Site Management</a></li>
					<li><a href='<?php echo Yii::getPathOfAlias('local');?>/services/biostatistics-data-management'>Biostatistics and Data Management</a></li>
					<li><a href='<?php echo Yii::getPathOfAlias('local');?>/services/medical-writing-regulatory-affairs'>Medical Writing</a></li>
					<li><a href='<?php echo Yii::getPathOfAlias('local');?>/services/patient-recruitment'>Investigator and Patient Recruitment</a></li>
					<li><a href='<?php echo Yii::getPathOfAlias('local');?>/services/quality-assurance'>Quality Assurance</a></li>
					<li><a href='<?php echo Yii::getPathOfAlias('local');?>/services/clinical-trial-management-system'>Clinical Trial Management System (CTMS) development</a></li>
				</ul>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="row svc-blurb">
					<p>We understand the needs and the nature of innovative biopharmaceutical companies, and as your partner we provide a comprehensive array of services to meet your needs.<br/><br/><br/>We match your innovation with flexibility and responsive action.</p><br/>
				</div>
				<div class="row">
					<img class="svc-image" src="<?php echo Yii::app()->request->baseUrl; ?>/img/clinical-research-organization-services.jpg" alt="clinical research operations in action">
				</div>
			</div>
		</div>
</div>
