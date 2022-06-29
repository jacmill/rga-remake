<x-form-layout>
    <form action="/reset-password" method="POST">
        @csrf
        <label class="block">
            <span>Hasło</span>
            <input type="password" name="password" id="">
        </label>
        <label class="block">
            <span>Powtórz hasło</span>
            <input type="password" name="password_confirmation" id="">
        </label>
        <button type="submit">Zmień</button>
    </form>
</x-form-layout>