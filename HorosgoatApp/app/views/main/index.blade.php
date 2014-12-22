<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Horosgoat</title>
</head>
<body>
	
	<h1>Register:</h1>

	{{ Form::open(["route" => "store"])}}

	{{ Form::label("twitter", "Twittername:") }}
	{{ Form::text("twittername", "@", ["placeholder" => "@awesomedude"]) }}
	{{ $errors->first("twitter")}}

	{{ Form::label("dateofbirth", "Date of birth:")}}
	{{ Form::input("date", "dateofbirth", null, ["placeholder" => "Date"])}}
	{{ $errors->first("dateofbirth")}}

	{{ Form::submit("Submit")}}

	{{ Form::close()}}

</body>
</html>