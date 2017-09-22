<?php include "includes/header.php" ?>
<?php include "includes/navigationBar.php" ?>
<?php include "includes/breadcrumb.php" ?>
<div class="container" style="text-align:justify; font-size: 1.3em;color:black;">
	<div class="row">
		<div class="col-lg-12">
			<div id="map" style="height:300px;width:100%;"></div>
			<script>
				function initMap() {
					var Deakin = {
						lat: -37.848595,
						lng: 145.115003
					};
					var map = new google.maps.Map( document.getElementById( 'map' ), {
						zoom: 17,
						center: Deakin
					} );
					var marker = new google.maps.Marker( {
						position: Deakin,
						map: map,
						title: 'Joblet Coporate Headquarters',
						icon: 'images/poi50.png'
					} );
					var info = new google.maps.InfoWindow();
					google.maps.event.addListener( marker, 'click', function () {
						info.setContent( "<table width='100%' border='0'><tbody><tr><td><img src='images/logosm.png' width='76' height='49' alt=''/>&nbsp;</td><td><b>Joblet Coporate Headquarters</b><br><b>Address:</b> 221 Burwood Highway Burwood VIC 3125 Australia<br><b>Website:</b> <a href= 'https://www.joblet.com/' target= view_window>www.joblet.com<br></a><b>Phone:</b> +61 3 xxxx xxxx</td></tr></tbody></table>" );
						info.open( map, marker );
					} );
				}
			</script>
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVLkcMYvC1xZdGw8M00_CBX-4G0ktFICM&callback=initMap">
			</script>

		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<article>
				<h2>Coporate Headquarters</h2> 221 Burwood Highway<br> Burwood VIC 3125<br> Australia
			</article>
		</div>
		<div class="col-md-6">
			<h2>General Contact</h2>
			<b>Phone:</b> +61 3 9244 6333<br>
			<b>Email:</b> <a href="mailto:ywxin@deakin.edu.au">ywxin@deakin.edu.au</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h2>Business Info &amp; Inqueries</h2>
			<b>Phone:</b> +61 3 xxxx xxxx<br>
			<b>Email:</b> <a href="mailto:chengs@deakin.edu.au">chengs@deakin.edu.au</a>
		</div>
		<div class="col-md-6">
			<h2>Internaional Business Inquieies</h2>
			<b>Phone:</b> +61 3 xxxx xxxx<br>
			<b>Email:</b> <a href="mailto:jinb@deakin.edu.au">jinb@deakin.edu.au</a><br>
			<b>Schedule:</b> Monday - Friday 9:00AM to 4:00PM AEST
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h2>Technical Assistance</h2>
			<b>Phone:</b> +61 3 xxxx xxxx<br>
			<b>Email:</b> <a href="mailto:yuechaor@deakin.edu.au">yuechaor@deakin.edu.au</a><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="mailto:jinhuiy@deakin.edu.au">jinhuiy@deakin.edu.au</a>
		</div>
		<div class="col-md-6">
			<h2>Website Feedback &amp; Inqueries</h2>
			<b>Phone:</b> +61 3 xxxx xxxx<br>
			<b>Email:</b> <a href="mailto:jinhuiy@deakin.edu.au">jinhuiy@deakin.edu.au</a><br>
		</div>
	</div>
</div>
<?php include "includes/footer.php" ?>