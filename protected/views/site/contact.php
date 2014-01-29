<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle= 'Contact | ' . Yii::app()->name;
$this->breadcrumbs=array(
	'Contact',
);
?>
<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYOrfuj7xwf00A6xVbhCruXDEKJ6so3gg&sensor=false">
    </script>
    <script type="text/javascript">
      function initialize() {
        var myLatlng = new google.maps.LatLng(38.051957,-78.5304752);
        var mapOptions = {
          center: myLatlng,
          zoom: 12,
          scrollwheel: false
        };
		var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
            
		var marker = new google.maps.Marker({
      		position: myLatlng,
      		map: map,
      		title: 'Atlantic Research Group'
  });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<div class="big-container">
	<section class="breadcrumb-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
					<ol class="breadcrumb breadcrumb-override">
					  <li><a href="<?php echo Yii::app()->request->baseUrl;?>">Home</a></li>
					  <li class="active">Contact Us</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<section class="leadership-summary">
		<div class="container">
			<?php if(Yii::app()->user->hasFlash('contact')): ?>

			<div class="flash-success">
				<?php echo Yii::app()->user->getFlash('contact'); ?>
			</div>

			<?php else: ?>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h5 class="leadership-title">Contact Us</h5><br />
					<p class="leadership-body">Atlantic Research Group is currently accepting new projects. Please email us at <a href='mailto:<?php echo Yii::app()->params['contactPageEmail'];?>'><?php echo Yii::app()->params['contactPageEmail'];?></a> Thank you.<br/>Fields with <span class="required">*</span> are required.</p><br />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 contact-form">
					<?php $form=$this->beginWidget('CActiveForm', array(
						'id'=>'contact-form',
						'enableClientValidation'=>true,
						'clientOptions'=>array(
							'validateOnSubmit'=>true,
							),
					)); ?>
					<?php echo $form->errorSummary($model); ?>
					<div class="row">
						<?php echo $form->labelEx($model,'first_name'); ?><br/>
						<?php echo $form->textField($model,'first_name',array('size'=>51)); ?><br/>
						<?php echo $form->error($model,'first_name'); ?>
					</div>
					<div class="row">
						<?php echo $form->labelEx($model,'last_name'); ?><br/>
						<?php echo $form->textField($model,'last_name',array('size'=>51)); ?><br/>
						<?php echo $form->error($model,'last_name'); ?>
					</div>
					<div class="row">
						<?php echo $form->labelEx($model,'email'); ?><br/>
						<?php echo $form->textField($model,'email',array('size'=>51)); ?><br/>
						<?php echo $form->error($model,'email'); ?>
					</div>
					<div class="row">
						<?php echo $form->labelEx($model,'phone'); ?><br/>
						<?php echo $form->textField($model,'phone',array('size'=>51)); ?><br/>
						<?php echo $form->error($model,'phone'); ?>
					</div>
					<div class="row">
						<?php echo $form->labelEx($model,'message'); ?><br/>
						<?php echo $form->textArea($model,'message',array('rows'=>6, 'cols'=>50)); ?><br/>
						<?php echo $form->error($model,'message'); ?>
					</div>
					<?php if(CCaptcha::checkRequirements()): ?>
					<div class="row"><br/>
						<?php echo $form->labelEx($model,'verifyCode'); ?>
						<div>
						<?php $this->widget('CCaptcha'); ?>
						<?php echo $form->textField($model,'verifyCode',array('size'=>51)); ?>
						</div>
						<div class="hint"><br/>Please enter the letters as they are shown in the image above.
						<br/>Letters are not case-sensitive.</div><br/>
						<?php echo $form->error($model,'verifyCode'); ?>
					</div>
					<?php endif; ?>
					<div class="row buttons">
						<?php echo CHtml::submitButton('Send message'); ?><br/><br/><br/>
					</div>
					<?php $this->endWidget(); ?>
				</div>
				<?php endif; ?>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 contact-map">
					<div class="google-map-canvas">
						<div id="map-canvas"></div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<br/>
							<p>Atlantic Research Group, Inc.</p>
							<p>2421 Ivy Road, Suite 200</p>
							<p>Charlottesville, VA 22903</p>
							<p>(p) 434.220.9380</p>
							<p>(f) 434.220.9399</p>
							<p>(e) <a href='mailto:<?php echo Yii::app()->params['contactPageEmail'];?>'><?php echo Yii::app()->params['contactPageEmail'];?></a></p><br/>
						</div>
					</div>
				</div>
			</div>
	</section>
</div>