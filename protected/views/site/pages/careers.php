<?php
/* @var $this SiteController */


$this->pageTitle= 'Careers | ' . Yii::app()->name; 
$this->breadcrumbs=array(
	'Careers',
);


$q = 'https://atlanticresearchgroupinc.quickbase.com/db/bind3pyzn?a=API_DoQuery&apptoken=dvxmdr2b2eyhzgdt893uibwja944&qid=5';

$response = Yii::app()->utils->get_url($q);
$xml = simplexml_load_string($response['content']);
$numJobs = count($xml->children());

?>
			<!-- content begins -->
			<div class="container careers-home">
				<div class="row careers-top">
					<div class="row careers-top-rows3">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-first col">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/photos/employees/e1-1.jpg"/>
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/photos/employees/e3-2.jpg"/>
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/photos/employees/e1-3.jpg"/>
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/photos/employees/e3-6.jpg"/>
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/photos/employees/e1-5.jpg"/>
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/photos/employees/e1-6.jpg"/>
						</div>
					</div>
					<div class="row careers-middle-rows3">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-first col">
							<h3> At Atlantic Research Group, success is in our DNA - is it in yours?</h3>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-last col">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/photos/employees/e2-1.jpg"/>
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/photos/employees/e3-1.jpg"/>
						</div>												
					</div>
					<div class="row careers-bottom-rows3">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-first col">
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/photos/employees/e1-2.jpg"/>
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/photos/employees/e1-4.jpg"/>
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/photos/employees/e3-3.jpg"/>
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/photos/employees/e3-4.jpg"/>
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/photos/employees/e3-5.jpg"/>
							<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/photos/employees/e1-4.jpg"/>
						</div>
					</div>
				</div>
				<div class="row careers-main">
					<div class="col-lg-8 col-md-8 col-sm-12 col-first">
						<div class="row top-row1">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<h3>Meaningful biotech jobs</h3>
								<br />
								<strong><p>Do you want a career helping people affected by cancer or hemophilia? Do you want to bring a brighter future to those afflicted with serious debilitating diseases?</p></strong><br />
							</div>
						</div>
						<div class="row top-row2">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<p>Our work culture is a balance of challenging science and problem solving with a relaxed environment that rewards both teamwork and individual efforts. ARG offers competitive salary and incentive programs, a comprehensive benefit package and complete support from our managing partners.</p><br/>
							</div>
						</div>
						<div class="row top-row3">
						<?php 
						if ($numJobs > 0) {
							echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
									<h3>Here are some of our current openings:</h3><br />
										</div>";
							foreach ($xml->record as $record) {
								if ($record->featured_job == '1') {
									echo '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-first col">';
									echo '<h4><a href="' . Yii::app()->request->baseUrl . "/careers/job-openings#" . $record->record_id_ . '" target="_blank">' . $record->position_name, '</a></h4><br/>';
									echo '<p>' . $record->position_short_description . '</p></br/>', PHP_EOL;
									echo '</div>';	
								}
							}
						} 
						else {
							echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
									<h3>There are no job openings at this time.</h3><br />
										</div>";
						}
						?>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-last">
					</div>
				</div>
			</div>
			<!-- content ends -->
