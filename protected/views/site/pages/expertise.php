<?php
/* @var $this SiteController */

$this->pageTitle='Expertise | ' . Yii::app()->name;
$this->breadcrumbs=array(
	'Expertise',
); 
?>

<div class="big-container">
	<section class="exp-banner-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><h1 class="title" id="page-title">Expertise</h1></div>
				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
			</div>
		</div>
	</section>
	<section class="exp-hero-image">
		<div class="container">
			<div class="row exp-hero-bg">
				<div class="col-lg-7 col-md-7 col-sm-8 col-xs-11">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h3>...in the complexities of clinical trials.<br/>It's who we are.</h3></div>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-4 col-xs-1"></div>
			</div>
		</div>
	</section>
	<section class="top-level-4-column">
		<div class="container">
			<div class="row section-4-columns">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-first"><h2>Oncology</h2><p>Advanced solid tumor, advanced prostate cancer, pancreatic cancer, and leukophoresis.</p>
					<br><br><a href="<?php echo Yii::getPathOfAlias('local');?>/expertise/oncology" class="mini-call-to-action">See more oncology expertise</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-nth"><h2>Immunology/Allergy</h2><p>Primary immune disease, plasma derivatives, primary immunodeficiency</p><br/>
					<br><br><a href="<?php echo Yii::getPathOfAlias('local');?>/expertise/immunology-allergy" class="mini-call-to-action">See our specialities</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-nth"><h2>Genetic Disorders</h2><p>Hemophilia</p><br/><br/>
					<br><br><br><a href="<?php echo Yii::getPathOfAlias('local');?>/expertise/genetic-disorders" class="mini-call-to-action">Our hemophilia credentials</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-last"><h2>Opthalmology</h2><p>Macular Degeneration, Retinal Disease, Glaucoma, Ischemic Optic Neuropathy</p>
					<br><br><a href="<?php echo Yii::getPathOfAlias('local');?>/expertise/opthalmology" class="mini-call-to-action">See more</a>
				</div>
			</div>
		</div>
	</section>
	<div class="container exp-summary-zone">
		<div class="row exp-summary">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<h5>Areas of clinical expertise</h5>
				<ul>
					<li><a href='<?php echo Yii::getPathOfAlias('local');?>/expertise/immunology-allergy'>Immunology/Allergy</a></li>
					<li><a href='<?php echo Yii::getPathOfAlias('local');?>/expertise/oncology'>Oncology</a></li>
					<li><a href='<?php echo Yii::getPathOfAlias('local');?>/expertise/metabolic-endocrinology'>Metabolic/Endocrinology</a></li>
					<li><a href='<?php echo Yii::getPathOfAlias('local');?>/expertise/opthalmology'>Ophthalmology</a></li>
					<li><a href='<?php echo Yii::getPathOfAlias('local');?>/expertise/pain-management'>Pain Management</a></li>
					<li><a href='<?php echo Yii::getPathOfAlias('local');?>/expertise/cardiovascular'>Cardiovascular</a></li>
					<li><a href='<?php echo Yii::getPathOfAlias('local');?>/expertise/infectious-disease'>Infectious Disease</a></li>
					<li><a href='<?php echo Yii::getPathOfAlias('local');?>/expertise/cns-neurology'>CNS/Neurology</a></li>
					<li><a href='<?php echo Yii::getPathOfAlias('local');?>/expertise/medical-devices'>Medical Devices</a></li>
					<li><a href='<?php echo Yii::getPathOfAlias('local');?>/expertise/urology'>Urology</a></li>
					<li><a href='<?php echo Yii::getPathOfAlias('local');?>/expertise/genetic-disorders'>Genetic Disorders</a></li>
				</ul>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="row exp-blurb">
					<p>We bring a combined 112 years of clinical experience to bear on the problems of your business.<br/><br/><br/>The agility of your enterprise deserves customized solutions.</p><br/><p>Let ARG provide you with a complete solution.</p><br/>
				</div>
				<div class="row">
					<img class="exp-image" src="<?php echo Yii::app()->request->baseUrl; ?>/img/clinical-expertise.jpg" alt="Clinical expertise - a comprehensive approach">
				</div>
			</div>
		</div>
</div>
