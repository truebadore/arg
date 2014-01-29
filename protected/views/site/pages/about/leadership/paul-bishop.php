<?php
/* @var $this SiteController */


$this->pageTitle= 'Paul Bishop | ' . Yii::app()->name;
$this->breadcrumbs=array(
	'Paul Bishop',
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
					  <li class="active">Paul Bishop</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<section class="leadership-summary">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h5 class="leadership-title">Paul Bishop</h5><br />
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/headshot-placeholder.png"/><br/>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<p>Prior to co-founding Atlantic Research Group, Paul served in a clinical management role at a large global CRO. He has also held positions at other large and mid-sized CROs in clinical operations. He has experience in oncologic, metabolic disease and ophthalmologic development programs both in clinical operations and business development. He is also on the senior management team of the Atlantic Research Network (ARN). Paul graduated from the University of Virginia with a degree in biology.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
