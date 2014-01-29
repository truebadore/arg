<?php
/* @var $this SiteController */
	$this->pageTitle=Yii::app()->name;
	$q = 'https://atlanticresearchgroupinc.quickbase.com/db/bimt8apw9?a=API_DoQuery&apptoken=dvxmdr2b2eyhzgdt893uibwja944&qid=5&options=num-1.sortorder-D';
	$response = Yii::app()->utils->get_url($q);
	$xml = simplexml_load_string($response['content']);
	$titleXML = $xml->xpath("record/title");
	$title = (string) $titleXML[0][0];
	$contentURIXML= $xml->xpath("record/content_uri");
	$contentURI = (string) $contentURIXML[0][0];
	$epochXML = $xml->xpath("record/report_date");
	$epoch = substr($epochXML[0][0],0,10);
	date_default_timezone_set ('America/New_York');
	$dt = new DateTime("@$epoch");
	$reportDate = $dt->format('F Y');
	$latestNewsHTML =  '<a target="_blank" href="' . $contentURI . '">' . $reportDate . ' - ' . $title . '</a>';
?>

			<!-- ios slider starts -->
			<section class = 'iosSliderSection'>
				<div class = 'fluidHeight'>	
					<div class = 'sliderContainer'>
						<div class = 'iosSlider'>
							<div class = 'slider'> 
								<div class = 'item item1'>
									<div class = 'inner'>
										<div class = 'text1'><h2>Global Perspectives.</h2></div>
										<div class = 'text2'><h2>Local Partnerships.</h2></div>
										<div class = 'text3'><h2>Global Perspectives.<br/>Local Partnerships.</h2></div>
									</div>
								</div> 
								<div class = 'item item2'>
									<div class = 'inner'>	
										<div class = 'text1'><h2>Responsiveness and Dedication<br/>for Agile BioPharma.</h2></div>
									</div>
								</div>
								<div class = 'item item3'>
									<div class = 'inner'>
										<div class='tv-outlink-button-container'><a href="http://www.atlanticresearchgroup.com/trialvista" target="_blank"><button type="button" class="btn btn-primary btn-lg btn-md btn-sm">Learn more about Trialvista</button></a></div>
										<div class = 'text1'><h2>Collaborate in the Cloud<br/>with Customized CTMS Applications.</h2></div>
									</div> 
								</div>				
							</div>
						</div>
						<div class = 'slideSelectors'>
							<div class = 'item selected'></div>
							<div class = 'item'></div>
							<div class = 'item'></div>					
						</div>
						<div class = 'scrollbarContainer'></div>
					</div>
				</div>
			</section>
			<!-- ios slider Ends -->
			<!-- services highlight begins -->
			<section class="wide-row">
				<div class="wide-row-block">
					<h3 class="text">Solving the unique problems of your business.</h3>
				</div>
			</section>
			<section class="svc-highlight">
				<div class="container svc-hl-container">
					<div class="row">
						<div class="col-md-3 col-sm-3 svc-hl-item"><h5>Patient Recruitment</h5><p>Minimize site startup time and ensure maximum enrollment, screening rates, and retention.</p></div>
						<div class="col-md-3 col-sm-3 svc-hl-item"><h5>Clinical Monitoring</h5><p>Ensure protocols are compliant with all applicable regulations. Focus on regimen adherence, and data quality, validity, and fulfillment.</p></div>
						<div class="col-md-3 col-sm-3 svc-hl-item"><h5>Biostatistics</h5><p>Power your population-based risk models with our study designs, analysis, and interpretation of epidemiological data.</p></div>
						<div class="col-md-3 col-sm-3 svc-hl-item"><h5>Data Technologies</h5><p>Use our award-winning cloud-based CTMS to your advantage. Technology partnerships in EDC, data warehousing, and pharmacovigilance.</p></div>
					</div>
				</div>
			</section>
			<!-- services highlight begins -->
			<!-- latest news begins -->	
			<section class="latest-news news-bg">
				<div class="latest-news-section">
					<div class="wide-row-block grey">
					  <div class="news-icon-link-block">
						<a class="w-inline-block news-icon-link" href="http://www.atlanticresearchgroup.com/page_newsevents.html">
						  <img class="news-icon" src="img/news.1.png" alt="news.1.png">
						</a>
					  </div>
					  <div class="latest-news-header">Latest News for ARG</div>
					  <div class="latest-news-content"><?php echo $latestNewsHTML; ?></div>
					</div>
				</div>
			</section>
			<!-- latest news ends -->
			<!-- who we are grid begins -->
			<section class="who-we-are-grid">		
				<div class="content">
				  <div class="container">
					<!-- Who we are -->
					<div class="wwa-grid">
						<!--First Block -->
						<div class="wwa-blocks wwa-blocks-top-sea">
							<div class="row">
								<div class="col-md-4 search-img">
									<img class="img-responsive" src="img/see-us-in-action.1.png" alt="">
								</div>
								<div class="col-md-8">
									<h5><a href="<?php echo Yii::getPathOfAlias('local');?>/about">WHO WE ARE</a></h5>
									<p>We're helping to bring new therapies to people everywhere. Learn more about our founders.</p>
									<a href="<?php echo Yii::getPathOfAlias('local');?>/about/mission">See us in action</a>
								</div>
							</div>                            
						</div>
					</div>
					<!--End First Block -->
					<!--Second Block -->
					<div class="wwa-blocks wwa-blocks-colored wwa-blocks-green">
						<div class="row">
							<div class="col-md-8">
								<h5><a href="<?php echo Yii::getPathOfAlias('local');?>/about/case-studies" ">AGILE CLIENTS, BESPOKE SOLUTIONS</a></h5>
								<p>Agile and emerging life sciences innovators deserve our level of quality and devotion.</p>
								<a href="<?php echo Yii::getPathOfAlias('local');?>/services">Read more</a>
							</div>
							<div class="col-md-4 search-img">
								<img class="img-responsive" src="img/agile-small.1.png" alt="">
							</div>
						</div>                            
					</div>
					<!--Second Block -->
					<!--Third Block -->
					<div class="wwa-blocks">
						<div class="row">
							<div class="col-md-4 search-img">
								<img class="img-responsive" src="img/thought-leader.1.png" alt="">
							</div>
							<div class="col-md-8">
								<h5><a href="<?php echo Yii::getPathOfAlias('local');?>/about/leadership/bryce-warren">THOUGHT LEADERSHIP</a></h5>
								<p>Meet our new Chief Science Officer Bryce Warren and read more about our unique collaboration.</p>
							</div>
						</div>                            
					</div>
					<!--Third Block -->
				  </div>
				</div>
			</section>
			<!-- who we are grid ends -->
			<!-- international starts -->
			<section class="intl-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><h6 id="ww-cap"><a href="<?php echo Yii::getPathOfAlias('local');?>/about/global-reach">WORLDWIDE CAPABILITY</a></h6><br/><p>As part of the Pharmaceutical Service Network, ARG offers the benefits of a global CRO without the inefficiency of one.</p></div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"><img class="global-reach-image" src="img/lyon.1.jpg" alt="lyon.1.jpg"></div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"><img class="global-reach-image" src="img/denmark.1.jpg" alt="denmark.1.jpg"></div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"><img class="global-reach-image" src="img/italy.1.jpg" alt="italy.1.jpg"></div>
					</div>
				</div> 
			</section>
			<!-- international ends -->
			<section class="our-clients-label">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><h6>Our Clients</h6></div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
					</div>
				</div>   
			</section>
			<!-- our clients starts -->
			<section class="clients">
				<div class="container">
					<div id="clients-flexslider" class="flexslider home clients">
						<div class="headline">  
							<ul class="slides">
								<li>
									<a href="http://chelseatherapeutics.com/">
										<img src="img/clients/chelsea_grey.1.png" alt="" /> 
										<img src="img/clients/chelsea.1.png" class="color-img" alt="" />
									</a>
								</li>
								<li>
									<a href="http://www.viropharma.com/">
										<img src="img/clients/viropharma_grey.1.png" alt="" /> 
										<img src="img/clients/viropharma.1.png" class="color-img" alt="" />
									</a>
								</li>
								<li>
									<a href="http://www.kinexpharma.com/">
										<img src="img/clients/kinex_grey.1.png" alt="" /> 
										<img src="img/clients/kinex.1.png" class="color-img" alt="" />
									</a>
								</li>
								<li>
									<a href="http://www.greencross.com/">
										<img src="img/clients/green-cross_grey.1.png" alt="" /> 
										<img src="img/clients/green-cross.1.png" class="color-img" alt="" />
									</a>
								</li>
								<li>
									<a href="http://www.axogeninc.com/">
										<img src="img/clients/axogen_grey.1.png" alt="" /> 
										<img src="img/clients/axogen.1.png" class="color-img" alt="" />
									</a>
								</li>
								<li>
									<a href="http://www.kedrionusa.com/">
										<img src="img/clients/kedrion_grey.1.png" alt="" /> 
										<img src="img/clients/kedrion.1.png" class="color-img" alt="" />
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>	
			</section>
			<!-- our clients ends -->
