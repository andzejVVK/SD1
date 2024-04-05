<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontaktai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }
        .form-container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .form-container form {
            display: flex;
            flex-direction: column;
        }
        .form-container form label {
            margin-bottom: 8px;
        }
        .form-container form input[type="text"],
        .form-container form input[type="email"],
        .form-container form textarea {
            padding: 10px;
            margin-bottom: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        .form-container form button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-container form button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Susisiekite su mumis</h2>
        <form method="POST" action="{{ route('kontaktai.store') }}">
            <div>
                <label for="name">Vardas:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div>
                <label for="email">El. paštas:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="message">Žinutė:</label>
                <textarea name="message" id="message" rows="4" required></textarea>
            </div>
            <div>
                <button type="submit">Siųsti žinutę</button>
            </div>
        </form>
    </div>
</body>
</html>
