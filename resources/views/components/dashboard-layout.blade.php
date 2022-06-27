<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>
        <aside>
            <h1>Panel kapitana</h1>
            <nav>
                <ul>
                    <li><a href="/dashboard">Podsumowanie</a></li>
                    <li><a href="/dashboard/teammates">Zawodnicy</a></li>
                </ul>
            </nav>
        </aside>
        <section>
            {{ $slot }}
        </section>
    </main>
</body>
</html>