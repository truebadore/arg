<?php
/* @var $this SiteController */


$this->pageTitle= 'Leadership | ' . Yii::app()->name;
$this->breadcrumbs=array(
	'Leadership',
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
					  <li class="active">Leadership</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<section class="leadership-summary">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h5 class="leadership-title">Leadership</h5><br />
					<p class="leadership-body">Like all ARG employees, ARG's leadership team is on a mission: 
					help agile and emerging biopharma companies realize important therapeutic goals. 
					They're supported by an engaged and helpful <a class="mini-call-to-action" href="<?php echo Yii::getPathOfAlias('local');?>/about/board">Board of Advisors</a>, 
					and eager to work with customers.</p><br />
				</div>
			</div>
		</div>
	</section>
	<section class="leadership-2column">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 founder-image-outer">
					<div class="founder-headshot">
						<h5>Paul Bishop</h5><br />
						<a href="<?php echo Yii::getPathOfAlias('local'); ?>/about/leadership/paul-bishop"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/headshot-placeholder.png"/></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 founder-image-outer">
					<div class="founder-headshot">
						<h5>Lyle Camblos</h5><br />
						<a href="<?php echo Yii::getPathOfAlias('local'); ?>/about/leadership/lyle-camblos"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/headshot-placeholder.png"/></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 founder-image-outer">
					<div class="founder-headshot">
						<h5>Hunter Walker</h5><br />
						<a href="<?php echo Yii::getPathOfAlias('local'); ?>/about/leadership/hunter-walker"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/headshot-placeholder.png"/></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 founder-image-outer">
					<div class="founder-headshot">
						<h5>Bryce Warren</h5><br />
						<a href="<?php echo Yii::getPathOfAlias('local'); ?>/about/leadership/bryce-warren"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/headshot-placeholder.png"/></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
