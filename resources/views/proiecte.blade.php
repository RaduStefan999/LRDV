<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Proiecte</title>
	<link href="/ProiectePageWebAssets/css/style.css" rel="stylesheet"  type="text/css" />
	<link href="/ProiectePageWebAssets/responsive_map/jsmaps/jsmaps.css" rel="stylesheet" type="text/css" />
	<link href="/ProiectePageWebAssets/css/font-awesome.css" rel="stylesheet" type="text/css" /> 
	<link rel="stylesheet" href="/CommonWebAssets/FontAwesome/css/all.min.css">
	<link rel="stylesheet" href="/CommonWebAssets/css/main.css" type="text/css" media="all" /> 
  
	<!-- js loader -->
	<div id="loader-wrapper">
		<div id="loader"></div>

		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>

	</div>
	<!--end js loader -->

	<!-- particles.js container -->
	<div id="particles-js">

		<div id = "header"><a id="headlogo" href="/"><img src="/ProiectePageWebAssets/img/logo.png" width = "220" height="60" /></a></div>

	</div>

	<!-- scripts -->
	<script src="/ProiectePageWebAssets/particles/particles.min.js"></script>
	<script src="/ProiectePageWebAssets/js/app.js"></script>

	<!-- Jquery -->
	<script src="/ProiectePageWebAssets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<!-- End Jquery -->

	<!-- Map scripts - add the below to your page -->
	<!-- jsmaps-panzoom.js is optional if you are using enablePanZoom -->
	<script src="/ProiectePageWebAssets/responsive_map/jsmaps/jsmaps-libs.js" type="text/javascript"></script>
	<script src="/ProiectePageWebAssets/responsive_map/jsmaps/jsmaps-panzoom.js"></script>
	<script src="/ProiectePageWebAssets/responsive_map/jsmaps/jsmaps.js" type="text/javascript"></script>
	<script src="/ProiectePageWebAssets/responsive_map/maps/romania.js" type="text/javascript"></script>
	<!-- End Map scripts -->
  
</head>
<body class="">

<div id = "main_section">

	<h1 class = "titlul">Proiecte Inscrise</h1>
	
	<p class = "aliniere">
	
		Reconstituiri 
	
	</p>
	
	
	@foreach ($proiect as $data)
	
		@if ($data->sectiune_id == 1)

		<div class="section section1">
			
			<div class="info">
			
				<div class = "text_box">
					
					<ul>
						<li><a><i class="fa fa-arrow-right"></i> {{ $data->nume }}</a></li>
						<li><a class = "spaced"><i class="fa fa-users"></i> {{ $data->elev_one }} {{ $data->elev_two }} {{ $data->elev_three }} {{ $data->elev_four }}</a></li>
						<li><a class = "spaced"><i class="fa fa-sort"></i> Punctaj : {{ $data->punctaj }}</a></li>
					</ul>
					
				</div>
				
			</div>
				
		</div>

		@endif

	@endforeach


	
	
	
	
	<p class = "aliniere">
	
		Impact cultural 
	
	</p>
	
	
	@foreach ($proiect as $data)
	
		@if ($data->sectiune_id == 2)

			<div class="section section2">
			
			<div class="info">
			
				<div class = "text_box">
					
					<ul>
						<li><a><i class="fa fa-arrow-right"></i> {{ $data->nume }}</a></li>
						<li><a class = "spaced"><i class="fa fa-users"></i> {{ $data->elev_one }} {{ $data->elev_two }} {{ $data->elev_three }} {{ $data->elev_four }}</a></li>
						<li><a class = "spaced"><i class="fa fa-sort"></i> Punctaj : {{ $data->punctaj }}</a></li>
					</ul>
					
				</div>
				
			</div>
				
		</div>

		@endif

	@endforeach


	
	<p class = "aliniere">
	
		Destin literar 
	
	</p>
	

	@foreach ($proiect as $data)
	
		@if ($data->sectiune_id == 3)

		<div class="section section3">
		
		<div class="info">
		
			<div class = "text_box">
				
				<ul>
					<li><a><i class="fa fa-arrow-right"></i> {{ $data->nume }}</a></li>
					<li><a class = "spaced"><i class="fa fa-users"></i> {{ $data->elev_one }} {{ $data->elev_two }} {{ $data->elev_three }} {{ $data->elev_four }}</a></li>
					<li><a class = "spaced"><i class="fa fa-sort"></i> Punctaj : {{ $data->punctaj }}</a></li>
				</ul>
				
			</div>
			
		</div>
			
		</div>

		@endif

	@endforeach

	
	<p class = "aliniere">
	
		Peceţile tradiţiei 
	
	</p>
	

	@foreach ($proiect as $data)
	
		@if ($data->sectiune_id == 4)

			<div class="section section4">
			
			<div class="info">
			
				<div class = "text_box">
					
					<ul>
						<li><a><i class="fa fa-arrow-right"></i> {{ $data->nume }}</a></li>
						<li><a class = "spaced"><i class="fa fa-users"></i> {{ $data->elev_one }} {{ $data->elev_two }} {{ $data->elev_three }} {{ $data->elev_four }}</a></li>
						<li><a class = "spaced"><i class="fa fa-sort"></i> Punctaj : {{ $data->punctaj }}</a></li>
					</ul>
					
				</div>
				
			</div>
				
		</div>

		@endif

	@endforeach

	<br><br><br><br>

	<div class="container">

    <!-- Map html - add the below to your page -->
    <div class="jsmaps-wrapper" id="romania-map"></div>
    <!-- End Map html -->
	</div>

	<script type="text/javascript">

		$(function() {
			
			$('#romania-map').JSMaps({
				map: 'romania'
			});

		});
		
	</script>

	<!-- js loader-->

		<script src="/CommonWebAssets/js/main.js"></script>

	<!--end js loader-->
	

</div>

</body>
</html>