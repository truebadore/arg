<?php
/* @var $this SiteController */


$this->pageTitle= 'Search Results | ' . Yii::app()->name;
$this->breadcrumbs=array(
	'Search Results',
);
?>
<div class="big-container">
	<section class="breadcrumb-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
					<ol class="breadcrumb breadcrumb-override">
					  <li><a href="<?php echo Yii::app()->request->baseUrl;?>">Home</a></li>
					  <li class="active">Search Results</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<section class="leadership-summary">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h5 class="leadership-title">Search Results</h5><br />
					<p class="leadership-body"></p><br />
				</div>
				<div id="main_searchresults">
					<div id="content">
						<div class="highlight">
							  <div id="cse-search-results"></div>
							  <script type="text/javascript">
								var googleSearchIframeName = "cse-search-results";
								var googleSearchFormName = "cse-search-box";
								var googleSearchFrameWidth = 600;
								var googleSearchDomain = "www.google.com";
								var googleSearchPath = "/cse";
							  </script>
							  <script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>
							</div>
						</div>
					<div class="cl">&nbsp;</div>
				</div>
			</div>
		</div>
	</section>
</div>
