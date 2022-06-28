<x-form-layout>
    <form action="/forgot-password" method="POST">
        @csrf
        <label class="block">
            <span>E-mail</span>
            <input type="email" name="email" id="email">
        </label>
        <button type="submit">Odzyskaj</button>
    </form>
</x-form-layout>