<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="email.php" method="POST">
    
    <label for="nombrePersona">Tu nombre:</label>
    <br>
    <input type="text" placeholder="Nombre" id="nombrePersona" name="nombrePersona">
    <br>
    <label for="emailPersona">Tu Email:</label>
    <br>
    <input type="text" placeholder="Email" id="emailPersona" name="emailPersona">
    <br>
    <label for="asunto">Asunto:</label>
    <br>
    <input type="text" placeholder="Asunto" id="asunto" name="asunto">
    <br>
    <label for="mensaje">Mensaje:</label>
    <br>
    <textarea id="mensaje" name="mensaje">
    
    </textarea>
    <br> 
    <button type="submit">Envia email</button>

</body>
</html>