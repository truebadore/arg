<?php
/* @var $this SiteController */


$this->pageTitle= 'Global Reach | ' . Yii::app()->name;
$this->breadcrumbs=array(
	'Global Reach',
);
date_default_timezone_set ('America/New_York');

$xml = Yii::app()->utils->get_map_xml();
$entry = $xml->xpath("//map/World/pin");

?>
<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYOrfuj7xwf00A6xVbhCruXDEKJ6so3gg&sensor=false">
    </script>
    <script type="text/javascript">
      var lastOpenedInfoWindow = "";
      var infoWindowState = "hidden";      
      function handleMarkerAction(marker, action, content, map, iwindow) {
		console.log(marker.id + ' - ' + action + ": " + content);
      	switch (action) {
      		case "mouseout":
      			if (lastOpenedInfoWindow == "") {
      				iwindow.close();
      				infoWindowState = "hidden";
      			}
      			break;
      		case "mouseover":
      			lastOpenedInfoWindow = "";
				iwindow.setContent(content);
				iwindow.open(map,marker);
				infoWindowState = "visible";      		
      			break;
      		case "click":
      			if (infoWindowState == "hidden") {
					lastOpenedInfoWindow = marker;
					iwindow.setContent(content);
					iwindow.open(map,marker);
 				}
				lastOpenedInfoWindow = marker;
 				break;
      	}
      }
      function initialize() {
      	var contentString = '<div id="content">'; 
        var myMapStyles = 
		[
		  {
			"featureType": "road",
			"stylers": [
			  { "visibility": "off" }
			]
		  },{
			"featureType": "transit",
			"stylers": [
			  { "visibility": "off" }
			]
		  },{
			"featureType": "poi",
			"stylers": [
			  { "visibility": "off" }
			]
		  },{
			"featureType": "administrative.locality",
			"stylers": [
			  { "visibility": "off" }
			]
		  },{
			"featureType": "administrative"  },{
			"featureType": "administrative.country",
			"stylers": [
			  { "visibility": "off" }
			]
		  },{
			"featureType": "landscape.natural.landcover",
			"elementType": "geometry.fill",
			"stylers": [
			  { "color": "#b8b9b9" }
			]
		  },{
			"featureType": "water",
			"elementType": "geometry",
			"stylers": [
			  { "visibility": "simplified" },
			  { "color": "#585858" }
			]
		  },{
			"featureType": "water",
			"stylers": [
			  { "visibility": "simplified" }
			]
		  },{
			"featureType": "administrative",
			"elementType": "labels",
			"stylers": [
			  { "visibility": "off" }
			]
		  },{
			"featureType": "administrative.land_parcel",
			"stylers": [
			  { "visibility": "off" }
			]
		  },{
			"featureType": "administrative.neighborhood",
			"stylers": [
			  { "visibility": "off" }
			]
		  },{
			"featureType": "landscape.man_made",
			"stylers": [
			  { "visibility": "off" }
			]
		  },{
			"featureType": "landscape.natural.terrain",
			"stylers": [
			  { "visibility": "off" }
			]
		  },{
			"featureType": "water",
			"stylers": [
			  { "visibility": "simplified" }
			]
		  },{
			"featureType": "transit",
			"elementType": "geometry",
			"stylers": [
			  { "color": "#808080" },
			  { "visibility": "off" }
			]
		  }
		];
		var styledMap = new google.maps.StyledMapType(myMapStyles, {name: "Styled Map"});
		
		var ctrLatLng = new google.maps.LatLng(42.9649187,-49.0553525);
		
      	<?php 
			foreach($entry as $ent){
				$attr = $ent->attributes();
				$id = $attr['id'];
				$name = $attr['name'];
				$lat = $attr['lat'];
				$long = $attr['long'];
				if ($name <> "") {
					$line1 =  "var " . $id . "LatLng = new google.maps.LatLng(" . $lat . "," . $long  . ");" . PHP_EOL;
					echo $line1;
				}
			}
      	?>

        var mapOptions = {
          center: ctrLatLng,
          zoom: 3,
          scrollwheel: false,
          mapTypeControlOptions: {
     		 mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    	  }
        };
		var map = new google.maps.Map(document.getElementById("psn-map-canvas"), mapOptions);
		var infowindow = new google.maps.InfoWindow({ content: "temp" });
		
        map.mapTypes.set('map_style', styledMap);
  		map.setMapTypeId('map_style');
		<?php 
				foreach($entry as $ent){
				$attr = $ent->attributes();
				$id = $attr['id'];
				$name = $attr['name'];
				$lat = $attr['lat'];
				$long = $attr['long'];
				if ($name <> "") {
					$line2 =  "var " .  $id .  " = new google.maps.Marker({ position: " .  $id . "LatLng, id: '" . $id . "', map: map, title: '" . $name . "'});" . PHP_EOL;
					echo $line2;
					$cdata = str_replace("<![CDATA[","",(string)$ent[0]);
					$cdata = str_replace("\n", "", $cdata);
					$cdata = str_replace("\t", "", $cdata);
					$cdata = str_replace("h1", "p", $cdata);
					$line3 = "var " . $id . "ContentString = '<div id=content>" . $cdata . "</div>';" . PHP_EOL;
					echo $line3;
					$line4 = "google.maps.event.addListener(" . $id . ", 'mouseover', function() { handleMarkerAction(" . $id . ",'mouseover', '<div id=content>" . $cdata . "</div>', map, infowindow ); });" . PHP_EOL;
					$line5 = "google.maps.event.addListener(" . $id . ", 'mouseout', function() { handleMarkerAction(" . $id . ",'mouseout', '<div id=content>" . $cdata . "</div>', map, infowindow ); });" . PHP_EOL;
					$line6 = "google.maps.event.addListener(" . $id . ", 'click', function() { handleMarkerAction(" . $id . ",'click', '<div id=content>" . $cdata . "</div>', map, infowindow ); });" . PHP_EOL;
					echo $line4;
					echo $line5;
					echo $line6;
				}

			}
      	?>

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
					  <li><a href="<?php echo Yii::app()->request->baseUrl;?>/about">About</a></li>
					  <li class="active">Global Reach</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<section class="leadership-summary">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h5 class="leadership-title">Global Reach</h5><br />
					<p class="leadership-body">ARG understands the need to conduct clinical programs outside North America. As a result, we have joined a partnership of like-minded CROs that share our philosophy of providing unmatched expertise and quality service levels.</p><br />
					<p class="leadership-body"><a href="http://www.psnglobal.org" target="_blank">The Pharmaceutical Service Network (PSN)</a> is a worldwide Contract Research Organization (CRO) supported by local CROs to provide full service capabilities in Western, Central and Eastern Europe (including Italy). Each partner offers a high level of expertise at the local level as well as a shared philosophy of high flexibility, reduced costs, and higher efficiencies. The PSN offers a single point of contact for the entire project and gives our customers the benefits of a larger CRO without the hassles of poor performance and costly mistakes that are industry standard.</p><br/>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">			
					<div class="google-map-canvas">
						<div id="psn-map-canvas"></div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<br/>
					<p class="leadership-body">US Office | Atlantic Research Group, Inc. | 2421 Ivy Road, Suite 200 | Charlottesville, VA 22903 | (p) 434.220.9380 | (f) 434.220.9399</p><br/>
					<p class="leadership-body">EU Office | Calle Rufino González 14, Esc. 1ª-2ºD | 28037 Madrid, Spain | (p) +34 91 375 69 30 | (f) +34 91 375 69 31</p><br/>
				</div>
			</div>
		</div>
	</section>
</div>
