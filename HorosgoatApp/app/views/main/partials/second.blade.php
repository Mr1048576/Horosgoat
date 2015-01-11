@if($currentdate <= 15)
{{ Form::open(["route" => "store"]) }}

	<div class="twitterdiv">
		
		{{ Form::text("twittername", "", ["placeholder" => "@twitter_name", "class" => "input twitterinput bold"]) }}
		
	</div>

	<div class="datediv">
		
		{{ Form::input("date", "dateofbirth", null, ["placeholder" => "Select date of birth", "class" => "input dateinput bold", "id" => "date"]) }}
		
	</div>

	<div class="submitdiv">
		{{ Form::submit("Where is my cookie?", ["class" => "submit"]) }}
		<p class="red error">{{ $errors->first("twittername") }}</p>
		<p class="red error">{{ $errors->first("dateofbirth") }}</p>

	</div>

{{ Form::close() }}
@else
<div class="text toolate">
	<p>We're sorry, it's too late.</p>
	<p><span class="blue">Horosgoat</span> needs time to bake cookies!</p>
</div>
@endif