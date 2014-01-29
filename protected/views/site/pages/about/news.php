<?php
/* @var $this SiteController */


$this->pageTitle= 'News | ' . Yii::app()->name;
$this->breadcrumbs=array(
	'News',
);
$q = 'https://atlanticresearchgroupinc.quickbase.com/db/bimt8apw9?a=API_DoQuery&apptoken=dvxmdr2b2eyhzgdt893uibwja944&qid=5';
$response = Yii::app()->utils->get_url($q);
$xml = simplexml_load_string($response['content']);
date_default_timezone_set ('America/New_York');
?>

<div class="big-container">
	<section class="breadcrumb-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
					<ol class="breadcrumb breadcrumb-override">
					  <li><a href="<?php echo Yii::app()->request->baseUrl;?>">Home</a></li>
					  <li><a href="<?php echo Yii::app()->request->baseUrl;?>/about">About</a></li>
					  <li class="active">News</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<section class="leadership-summary">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h5 class="leadership-title">News</h5><br />
					<p class="leadership-body"></p>
				</div>
			</div>
		</div>
	</section>
	<section class="leadership-summary">
		<div class="container">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<?php foreach ($xml->record as $record) {
					$epochXML = $record->report_date;
					$epoch = substr($epochXML[0][0],0,10);
					$dt = new DateTime("@$epoch");
					$reportDate = $dt->format('F Y');
					echo '<div class="row news-item"><div class="col-lg-3 col-md-3 col-sm-2 col-xs-2">';
					echo '<p><a href="' . $record->content_uri . '" target="_blank">' . $reportDate, '</a></p></div>';
					echo '<div class="col-lg-9 col-md-9 col-sm-10 col-xs-10">';
					echo '<p><a href="' . $record->content_uri . '" target="_blank">' . $record->title, '</a></p></div>', PHP_EOL;
					echo '</div><br />';	
				} ?>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<p>#biopharma twtr feed</p>
				<a class="twitter-timeline" data-dnt="true" height="800" width="600" data-chrome="nofooter transparent noheader" href="https://twitter.com/search?q=%23biopharma" data-widget-id="422471375316459523">Tweets about "#biopharma"</a>
			</div>
		</div>
	</section>
</div>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
