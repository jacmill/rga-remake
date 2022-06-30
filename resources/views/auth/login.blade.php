<x-form-layout>
  <form action="/login" method="POST">
		@csrf		
		<label class="block">
			<span>Adres e-mail</span>
			<input type="text" name="email" id="email" class="block">
		</label>
		<label class="block">
			<span>Hasło</span>
			<input type="password" name="password" id="password" class="block">
		</label>
		<label class="block">
			<input type="checkbox" name="remember_me" id="remember_me">
			<span>Zapamiętaj mnie</span>
		</label>
		<button type="submit">Zaloguj</button>
  </form>
</x-form-layout>

