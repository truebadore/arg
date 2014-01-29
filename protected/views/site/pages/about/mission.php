<?php
/* @var $this SiteController */


$this->pageTitle= 'Our Mission | ' . Yii::app()->name;
$this->breadcrumbs=array(
	'Mission',
);
?>
<div class="big-container">
	<section class="breadcrumb-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
					<ol class="breadcrumb breadcrumb-override">
					  <li><a href="<?php echo Yii::app()->request->baseUrl;?>">Home</a></li>
					  <li><a href="<?php echo Yii::app()->request->baseUrl;?>/about">About</a></li>
					  <li class="active">Mission</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<section class="leadership-summary">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h5 class="leadership-title">Our Mission</h5><br />
					<p class="leadership-body"></p><br />
				</div>
			</div>
		</div>
	</section>
</div>
