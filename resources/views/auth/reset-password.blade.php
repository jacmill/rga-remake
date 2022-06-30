<x-form-layout>
    <form action="/reset-password" method="POST">
        @csrf
        <input type="hidden" name="email"  value={{ $_GET["email"] }}>
        <input type="hidden" name="token" value={{ $token }}>
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
    @if ($errors->any())
        {{ $errors }}
    @endif
</x-form-layout>