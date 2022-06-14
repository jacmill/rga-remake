<x-form-layout>
  <div class=" max-w-xl">
    <form action="/register" method="POST">
      <div class="flex gap-3 flex-wrap">
        <label>
          <span>Imię</span>
          <input type="text" name="name" id="name" class="block">
        </label>
        <label>
          <span>Nazwisko</span>
          <input type="text" name="lastname" id="lastname" class="block">
        </label>
      </div>
      <label class="block">
        <span>Adres e-mail</span>
        <input type="text" name="email" id="email" class="block w-full">
      </label>
      <label class="block">
        <span>Hasło</span>
        <input type="text" name="password" id="password" class="block w-full">
      </label>
      <div class="flex gap-3 flex-wrap">
        <label>
          <span>Wiek</span>
          <input type="text" name="age" id="age" class="block">
        </label>
        <label>
          <span>Szkoła</span>
          <select name="school" id="school" class="block">
            <option value="">TEST</option>
          </select>
        </label>
      </div>
      <label class="block">
        <span>Nazwa drużyny</span>
        <input type="text" name="teamname" id="teamname" class="block w-full">
      </label>
      <label class="block">
        <span>Kilka słów o drużynie (opcjonalne)</span>
        <textarea name="description" id="description" cols="30" rows="10" class=" form-textarea block w-full"></textarea>
      </label>
      <button type="submit">Zarejestruj</button>
    </form>
  </div>
</x-layout>