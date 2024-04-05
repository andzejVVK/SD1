<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prisijungimas</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h2>Prisijungimas</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">El. paštas:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Slaptažodis:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <button type="submit">Prisijungti</button>
        </div>
    </form>
</body>
</html>
