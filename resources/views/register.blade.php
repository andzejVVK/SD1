<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h2>Registracija</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label for="name">Vardas:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="email">El. paštas:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Slaptažodis:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <label for="password_confirmation">Pakartokite slaptažodį:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>
        <div>
            <button type="submit">Registruotis</button>
        </div>
    </form>
</body>
</html>
