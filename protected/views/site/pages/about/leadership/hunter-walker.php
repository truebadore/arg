<?php
/* @var $this SiteController */


$this->pageTitle= 'Hunter Walker | ' . Yii::app()->name;
$this->breadcrumbs=array(
	'Hunter Walker',
);
?>
<div class="big-container">
	<section class="breadcrumb-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
					<ol class="breadcrumb breadcrumb-override">
					  <li><a href="<?php echo Yii::app()->request->baseUrl;?>">Home</a></li>
					  <li><a href="<?php echo Yii::app()->request->baseUrl;?>/about/leadership">Leadership</a></li>
					  <li class="active">Hunter Walker</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<section class="leadership-summary">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h5 class="leadership-title">Hunter Walker</h5><br />
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/headshot-placeholder.png"/><br/>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<p>Hunter joined ARG in 2006 and is the chief architect of TrialVista®, a proprietary clinical trial management system (CTMS) that tracks, measures, and reports on every aspect of a clinical trial. Prior to joining ARG Hunter served as a clinical technology developer with a large CRO and a small biotechnology company in San Diego. Currently he is responsible for the strategic development of TrialVista and is a leader in the software-as-a-service platform for clinical trial management. In addition, Hunter serves as the Chief Technology Officer for the Atlantic Research Network (ARN). Hunter graduated from the University of Virginia with a degree in biology.</p>
						</div>
					</div>				</div>
			</div>
		</div>
	</section>
</div>
