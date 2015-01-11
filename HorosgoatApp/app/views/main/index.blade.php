<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Horosgoat</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	{{ HTML::style("css/main.css") }}
</head>
<body>

	<div class="main" id="first">
		@include('main.partials.first')
	</div>

	<div class="main" id="second">
		@include('main.partials.second')
	</div>	

	@if(isset($twittername))
	<div class="main congrats">
		@include('main.partials.third')
	</div>
	@endif
	
{{ HTML::script("bower_components/jquery/dist/jquery.min.js") }}
{{ HTML::script("lib/modernizr.min.js") }}
{{ HTML::script("script.js") }}
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
{{ HTML::script('js/main.js') }}
</body>
</html>