<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href= {{ asset("css/app.css") }} rel="stylesheet">
</head>
<body>
  <form action="/login" method="POST">
		<label class="block">
			<span>Adres e-mail</span>
			<input type="text" name="email" id="email" class="block">
		</label>
		<label class="block">
			<span>Hasło</span>
			<input type="password" name="password" id="password" class="block">
		</label>
		<button type="submit">Zaloguj</button>
  </form>
</body>