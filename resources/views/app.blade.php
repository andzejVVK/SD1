<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .conference-details {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .conference-details h2 {
            color: #333;
        }
    </style>
</head>
<body>
    <h1>welcome</h1>
    @foreach ($conferences as $conference)
        <div class="conference-details">
            <h2>{{ $conference->name }}</h2>
            <p><strong>Date:</strong> {{ $conference->date }}</p>
            <p><strong>Location:</strong> {{ $conference->location }}</p>
        </div>
    @endforeach
</body>
</html>
