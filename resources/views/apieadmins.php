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
            max-width: 800px;
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

        p, h2 {
            text-align: center;
            color: #666;
        }

        ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        li {
            margin-bottom: 10px;
        }

        .profile-img {
            display: block;
            margin: 0 auto;
            width: 200px;
            border-radius: 50%;
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
    <title>Apie admin'a</title>
</head>
<body>
    <div class="container">
        <img src="/fotki/AlbionPaladin.jpg" alt="Andzej Listvan" class="profile-img">
        <h1>Andzej Listvan</h1>
        
        <p>
            <h2>HELLO AND WELCOME❤️</h2>
            <br>
            <br>
            <h2> Programinės įrangos inžinierius, aistringai kuriantis žiniatinklio programas. 
            Jis turi daug patirties tiek priekinės, tiek galinės dalies kūrimo srityje, naudodamas tokias technologijas kaip 
            HTML, CSS, "JavaScript", PHP ir "MySQL". Laisvalaikiu Džonas mėgsta groti gitara ir 
            tyrinėti naujas technologijas.
            </h2>
        </p>
        <h2>Contact Information</h2>
        <ul>
            <li>Email: eikitnafig@gmail.com</li>
            <li>Phone: +8 800 555 3535</li>
            <li>LinkedIn: <a href="https://www.linkedin.com/in/johndoe">Andzej Listvan</a></li>
        </ul>
    </div>
    <button class="button" id="closeButton">Exit</button>

    <script>
        document.getElementById("closeButton").addEventListener("click", function() {
            window.close();
        });
        </script>
</body>
</html>
