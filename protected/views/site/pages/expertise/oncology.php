<?php
/* @var $this SiteController */


$this->pageTitle= 'Oncology | ' . Yii::app()->name;
$this->breadcrumbs=array(
	'Oncology',
);
?>
<div class="big-container">
	<section class="breadcrumb-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
					<ol class="breadcrumb breadcrumb-override">
					  <li><a href="<?php echo Yii::app()->request->baseUrl;?>">Home</a></li>
					  <li><a href="<?php echo Yii::app()->request->baseUrl;?>/expertise">Expertise</a></li>
					  <li class="active">Oncology</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<section class="leadership-summary">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h5 class="leadership-title">Oncology</h5><br />
					<p class="leadership-body">Our oncological experience spans 10 years, N studies, M patients, and O successful clients.</p><br />
					<p>
						<ul>
							<li>Advanced Solid Tumor</li>
							<li>Malignant Glioma</li>
							<li>Advanced Prostate Cancer</li>
							<li>Pancreatic Cancer</li>
							<li>Metastatic breast</li>
							<li>Ovarian</li>
							<li>Mesothelioma</li>
							<li>NHL</li>
							<li>Leukaphoresis</li>
							<li>Colon</li>
							<li>Colorectal</li>
							<li>Elderly</li>
							<li>NSCLC</li>
						</ul>
					</p>
				</div>
			</div>
		</div>
	</section>
</div>
