<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

form {
    margin-top: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #555;
}

input[type="text"],
input[type="email"] {
    width: calc(100% - 22px); 
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #45a049;
}

.button {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    background-color: #4CAF50;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    transition: background-color 0.3s ease;
}
.button:hover {
    background-color: #45a049;
}
.button:active {
    background-color: #398038;
}


    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add People</title>
</head>
<body>
    <h1>Pridėti naują vartotoją</h1>


    <form action="{{ route('addpeople') }}" method="POST">
        <label for="name">Vardas:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">El. paštas:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Telefono numeris:</label>
        <input type="text" id="phone" name="phone"><br><br>


        <button type="submit">Pridėti vartotoją</button>
        <button class="button" id="closeButton">Exit</button>
    </form>
    <script>
        document.getElementById("closeButton").addEventListener("click", function() {
            window.close();
        });
        </script>
</body>
</html>