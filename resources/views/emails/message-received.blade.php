<!doctype html>
<html lang="en">
<head>
    <title>Mensaje recibido</title>
</head>
<body>
Contenido del email
<p>Reciviste un mensjae de: {{$msg["name"]}} - {{$msg["email"]}}</p>
<p><strong>Asunto</strong> {{$msg["subject"]}} </p>
<p><strong>Contenido</strong> {{$msg["content"]}} </p>
</body>
</html>
