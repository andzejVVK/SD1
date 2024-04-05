<!-- ODPOWIADA ZA STRUKTURYZACJA KODU -->
<!DOCTYPE html>
<html lang="en">
<head>
<style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.topnav a.active {
  background-color: #2196F3;
  color: white;
}
.topnav .login-container {
  float: right;
}
.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}
.topnav .login-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: #555;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
.topnav .login-container button:hover {
  background-color: green;
}

@media screen and (max-width: 600px) {
  .topnav .login-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .login-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
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

.current-time {
            position: absolute;
            bottom: 10px;
            left: 10px;
            color: #333; 
        }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference</title>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a onclick="openNewWindow('{{ route('apieusers') }}')">About</a>
  <a onclick="openNewWindow('{{ route('contac') }}')">Contact</a>
  <div class="login-container">
    <form action="/action_page.php">
      <button type="submit" onclick="openNewWindow('{{ route('register') }}')">Register</button>
      <button type="submit" onclick="openNewWindow('{{ route('login') }}')">Login</button>
    </form>
  </div>
</div>


    <h1>Sveiki atvykę į konferencijų puslapį</h1>
    <button class="button" onclick="openNewWindow('{{ route('startconference') }}')">Pradeti konferencija</button>
    <button class="button" onclick="openNewWindow('{{ route('addpeople') }}')">Pridieti User'i</button>
    <button class="button" onclick="openNewWindow('{{ route('apieusers') }}')">Apie user'us</button>
    <button class="button" onclick="openNewWindow('{{ route('apieadmins') }}')">Apie Admin'us</button>
    <button class="button" onclick="openNewWindow('{{ route('rules') }}')">Taisyklės</button>
    <button class="button" id="closeButton">Exit</button>
    <br>
    <br>
    <button class="button" onclick="setTimeout(myFunction);">Konferencijų lentelė</button>

    <div class="current-time" id="current-time"></div>
    </div>
    
    <script>

function myFunction() {
  alert('Tokio dalyko dar nera, sumokekite kad gauti daugiau funkciju:D');
}
        
        function updateCurrentTime() {
            var now = new Date();
            var hours = now.getHours().toString().padStart(2, '0');
            var minutes = now.getMinutes().toString().padStart(2, '0');
            var seconds = now.getSeconds().toString().padStart(2, '0');
            var timeString = hours + ':' + minutes + ':' + seconds;
            document.getElementById('current-time').textContent = timeString;
        }

        setInterval(updateCurrentTime, 1000);

        updateCurrentTime();

        document.getElementById("closeButton").addEventListener("click", function() {
    window.close();
});

        function openNewWindow(url) {
            window.open(url, '_blank');
        }
    </script>
</body>
</html>
