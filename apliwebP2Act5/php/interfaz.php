<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Nombre <input type="text" name="name" id="name" placeholder="Nombre">
    <button id="saludar" onclick="saludo()">Saludar</button>
    <input type="text"></input>
    <script>
        function saludo(){
            alert("Hola"+ document.getElementById('name'));
            
        }
    </script>
</body>
</html>