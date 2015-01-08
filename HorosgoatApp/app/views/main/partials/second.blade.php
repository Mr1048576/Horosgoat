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
	<p>We're sorry, it's too late. Horosgoat needs time to bake cookies!</p>
</div>
@endif