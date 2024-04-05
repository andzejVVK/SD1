<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darbuotojų lentelė</title>
    <style>
        .users-table {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }
        .user {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .user img {
            width: 100px;
            border-radius: 50%;
        }
        .user h2 {
            margin-top: 10px;
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
</head>
<body>
    <h1>Darbuotojų lentelė</h1>
    <div class="users-table">
        
        <div class="user">
            <img src="darbuotojo1.jpg" alt="Darbuotojas 1">
            <h2>Jonas Jonaitis</h2>
            <p>Programuotojas</p>
            <p>Telefono numeris: 862352452</p>
        </div>

        <div class="user">
            <img src="darbuotojo2.jpg" alt="Darbuotojas 2">
            <h2>Petras Petraitis</h2>
            <p>Dizaineris</p>
            <p>Telefono numeris: 863562674</p>
        </div>

        <div class="user">
            <img src="darbuotojo3.jpg" alt="Darbuotojas 3">
            <h2>Marytė Monk</h2>
            <p>Vadybininkė</p>
            <p>Telefono numeris: 863541567</p>
        </div>

        <div class="user">
            <img src="darbuotojo3.jpg" alt="Darbuotojas 3">
            <h2>Optimum Prime</h2>
            <p>Autobot</p>
            <p>Telefono numeris: 864257314</p>
        </div>

        <div class="user">
            <img src="darbuotojo3.jpg" alt="Darbuotojas 3">
            <h2>Satana</h2>
            <p>Hell King</p>
            <p>Telefono numeris: 666666666</p>
        </div>

    </div>
    <br>
    <br>
    <button class="button" id="closeButton">Exit</button>

    <script>
        document.getElementById("closeButton").addEventListener("click", function() {
            window.close();
        });
        </script>
</body>
</html>