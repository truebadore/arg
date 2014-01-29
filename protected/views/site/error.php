<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
?>
<div class="big-container">
	<section class="error-banner-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><h3 class="error" id="page-title"> <?php echo $code; ?> - Something is technically wrong.</h3>
					<p><?php echo CHtml::encode($message); ?></p>
					<p>Thanks for noticing—we're going to fix it up and have things back to normal soon.</p>
				</div>
			</div>
		</div>
	</section>
</div>