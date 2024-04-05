<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konferencijos Taisyklės</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
            padding-left: 20px;
            position: relative;
        }
        li:before {
            content: "•";
            position: absolute;
            left: 0;
            color: #666;
        }

        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f2f2f2;
            position: relative;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
            padding-left: 20px;
            position: relative;
        }
        li:before {
            content: "•";
            position: absolute;
            left: 0;
            color: #666;
        }
        .closebutton {
            position: absolute;
            bottom: 10px;
            right: 10px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
    </style>
</head>
<body>
    <div class="container">
        <h1>Konferencijos Taisyklės</h1>

        <ul>
            <li>Atvykite laiku į konferenciją.</li>
            <li>Išjunkite mikrofoną, kai nekalbate.</li>
            <li>Gerbkite kitus dalyvius ir jų nuomonę.</li>
            <li>Ne trugdykite, kai kalba kas nors kitas.</li>
            <li>Stenkitės sumažinti foninį triukšmą iki minimumo.</li>
            <li>Naudokite ausines dėl geresnės garso kokybės.</li>
            <li>Sekite konferencijai pateiktą darbotvarkę.</li>
            <li>Naudojant chat funkciją, užduokite tinkamus klausimus ar pateikite pastabas.</li>
            <li>Nesidalinkite jautriu ar netinkamu turiniu.</li>
            <li>Būkite susikaupę ir aktyvūs per visą konferenciją.</li>
        </ul>
    </div>
    <button class="closebutton" id="closeButton">Exit</button>

    <script>
        document.getElementById("closeButton").addEventListener("click", function() {
    window.close();
});

        function openNewWindow(url) {
            window.open(url, '_blank');
        }
    </script>
</body>
</html>
