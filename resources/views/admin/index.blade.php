<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500;700&display=swap" rel="stylesheet">

    <title>Business Intellect</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <h1>{{ $pageTitle }}</h1>
    <h1>
        ยินดีต้อนรับสู่หน้า Admin
        
    </h1>
    <h3>
        Username : {{ Auth::user()->username }}
    </h3>
</body>
</html>