<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>{{ $title }}</h2>

		<div>
			{!! $intro . link_to('auth/register/' . $registration_code, $link) !!}.<br>
		</div>
	</body>
</html>
