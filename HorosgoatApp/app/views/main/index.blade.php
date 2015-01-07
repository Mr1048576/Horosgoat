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
		<div class="logo">
			{{HTML::image("img/step.png")}}
		</div>
		
		<div class="text firsttext">
			<p>New Chinese Year of the <span class="red bold">goat</span> is coming!</p>
			<p>Want to know what the <span class="blue bold">future</span> holds for you?</p>
			<p>Goat your personal <span class="yellow bold">horoscope</span> in a cookie!</p>
		</div>

		<div class="cookies">
			{{HTML::image("img/cookies.jpg") }}
		</div>
		
		<div class="givecookie">
			<button class="button submit">Give me my cookie!</button>
		</div>
		
	</div>

	<div class="main" id="second">
		@if($currentdate <= 10)
			{{ Form::open(["route" => "store"]) }}

			<div class="twitterdiv">
				{{ Form::text("twittername", "", ["placeholder" => "@twitter_name", "class" => "input twitterinput bold"]) }}
				{{ $errors->first("twitter") }}
			</div>

			<div class="datediv">
				{{ Form::input("date", "dateofbirth", null, ["placeholder" => "Select date of birth", "class" => "input dateinput bold", "id" => "date"]) }}
				{{ $errors->first("dateofbirth") }}
			</div>

			<div class="submitdiv">
				{{ Form::submit("Where is my cookie?", ["class" => "submit"]) }}
			</div>

			{{ Form::close() }}
		@else
			<div class="text toolate">
				<p>We're sorry, but we won't be taking any more names.</p>
				<p>We need enough time to make our cookies so everyone will get some.</p>
			</div>
		@endif
		
	</div>	

{{ HTML::script("bower_components/jquery/dist/jquery.min.js") }}
{{ HTML::script("lib/modernizr.min.js") }}
{{ HTML::script("script.js") }}
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
{{ HTML::script('js/main.js') }}
</body>
</html>