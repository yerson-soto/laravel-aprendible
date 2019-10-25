<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <p>Recibiste un mensaje de: {{ $mail['name'] }} - {{ $mail['email'] }}  </p>
        <p><strong>Asunto:</strong> {{ $mail['subject'] }}</p>
        <p><strong>Contenido:</strong> {{ $mail['content'] }}</p>
</body>
</html>
