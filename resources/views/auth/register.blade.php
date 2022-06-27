<x-form-layout>
  <div class=" max-w-xl">
    <form action="/register" method="POST">
      @csrf
      <div class="flex gap-3 flex-wrap">
        <label>
          <span>Imię</span>
          <input type="text" name="name" id="name" class="block">
          @if ($errors->has('name')) <p class=" text-red-500 break-words text-sm"> {{ $errors->first('name') }}</p> @endif
        </label>
        <label>
          <span>Nazwisko</span>
          <input type="text" name="lastname" id="lastname" class="block">
          @if ($errors->has('lastname')) <p class=" text-red-500 break-words"> {{ $errors->first('lastname') }}</p> @endif
        </label>
      </div>
      <label class="block">
        <span>Adres e-mail</span>
        <input type="text" name="email" id="email" class="block w-full">
        @if ($errors->has('email')) <p class=" text-red-500 break-words"> {{ $errors->first('email') }}</p> @endif
      </label>
      <label class="block">
        <span>Hasło</span>
        <input type="password" name="password" id="password" class="block w-full">
        @if ($errors->has('password')) <p class=" text-red-500 break-words"> {{ $errors->first('password') }}</p> @endif
      </label>
      <div class="flex gap-3 flex-wrap">
        <label>
          <span>Wiek</span>
          <input type="text" name="age" id="age" class="block">
          @if ($errors->has('age')) <p class=" text-red-500 break-words"> {{ $errors->first('age') }}</p> @endif
        </label>
        <label>
          <span>Szkoła</span>
          <select name="school" id="school" class="block">
            <option value="test">TEST</option>
          </select>
          @if ($errors->has('school')) <p class=" text-red-500 break-words"> {{ $errors->first('school') }}</p> @endif
        </label>
      </div>
      <div class="flex gap-3 flex-wrap">
        <label class="block">
          <span>Nazwa drużyny</span>
          <input type="text" name="teamname" id="teamname" class="block w-full">
          @if ($errors->has('teamname')) <p class=" text-red-500 break-words"> {{ $errors->first('teamname') }}</p> @endif
        </label>
        <label>
          <span>Gra</span>
          <select name="game" id="game" class="block">
            <option value="CS">CS:GO</option>
            <option value="LOL">LoL</option>
          </select>
          @if ($errors->has('game')) <p class=" text-red-500 break-words"> {{ $errors->first('game') }}</p> @endif
        </label>
      </div>
      <label class="block">
        <span>Kilka słów o drużynie (opcjonalne)</span>
        <textarea name="about" id="about" cols="30" rows="10" class=" form-textarea block w-full"></textarea>
      </label>
      <button type="submit">Zarejestruj</button>
    </form>
  </div>
</x-layout>