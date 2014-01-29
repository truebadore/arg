<?php
/* @var $this SiteController */


$this->pageTitle= 'Job Openings | ' . Yii::app()->name;
$this->breadcrumbs=array(
	'Job Openings',
);
$q = 'https://atlanticresearchgroupinc.quickbase.com/db/bind3pyzn?a=API_DoQuery&apptoken=dvxmdr2b2eyhzgdt893uibwja944&qid=5';
$response = Yii::app()->utils->get_url($q);
$xml = simplexml_load_string($response['content']);
date_default_timezone_set ('America/New_York');
$numJobs = count($xml->children());
?>
<div class="big-container">
	<section class="breadcrumb-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
					<ol class="breadcrumb breadcrumb-override">
					  <li><a href="<?php echo Yii::app()->request->baseUrl;?>">Home</a></li>
					  <li><a href="<?php echo Yii::app()->request->baseUrl;?>/careers">Careers</a></li>
					  <li class="active">Job Openings</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<section class="leadership-summary">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h5 class="leadership-title">Job Openings</h5><br />
						<?php if ($numJobs > 0) {
							foreach ($xml->record as $record) {
									echo '<h4 class="job-content"><a href="#' . $record->record_id_ . '"></a>' . $record->position_name, '</h4><br/>';
									echo '<h6 class="jobheading">Description</h6><br/>';
									echo '<p class="jobbody">' . strtr($record->position_short_description, array("\n" => '<br/>')) . '</p></br/>';
									echo '<h6 class="jobheading">Responsibilities</h6><br/>';
									echo '<p class="jobbody">' . strtr($record->position_responsibilities, array("\n" => '<br/>')) . '</p></br/>';
									echo '<h6 class="jobheading">Requirements</h6><br/>';
									echo '<p class="jobbody">' . strtr($record->candidate_requirements, array("\n" => '<br/>'))  . '</p></br/>';
							}
						} 
						else {
							echo "<p class='leadership-body'>There are no job openings at this time.</p><br />";
						}
						?>
						</div>
					<p class="leadership-body"></p><br />
				</div>
			</div>
		</div>
	</section>
</div>
