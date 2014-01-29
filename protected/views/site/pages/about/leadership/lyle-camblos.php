<?php
/* @var $this SiteController */


$this->pageTitle= 'Lyle Camblos | ' . Yii::app()->name;
$this->breadcrumbs=array(
	'Lyle Camblos',
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
					  <li class="active">Lyle Camblos</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<section class="leadership-summary">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h5 class="leadership-title">Lyle Camblos</h5><br />
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/headshot-placeholder.png"/><br/>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<p>Prior to co-founding Atlantic Research Group, Lyle served as a clinical project manager and various other lead clinical roles for a large and mid-sized CRO. He has experience in oncology, immunology, and inflammatory disease indications. Lyle serves as ARG's project management development chair and is also on the senior management team of the Atlantic Research Network (ARN). Lyle graduated from the Virginia Military Institute with a degree in economics.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
