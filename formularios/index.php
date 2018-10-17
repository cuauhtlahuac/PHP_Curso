<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="recibe.php" method="">
        <input type="text" placeholder="Nombre:" name="nombre"/>
        <br/>
        <label for="man">Hombre</label>
        <input type="radio" name="sexo" value="man" id="man">
        <label for="woman">Mujer</label>
        <input type="radio" name="sexo" value="woman" id="woman">
        <select name="year" id="year">
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        </select>
            <?php
            echo "que pedo"
            ?>
            <label for="terminos">Aceptas los Terminos?</label>
            <input type="checkbox" name="terminos" id="terminos" value="OK">
        <input type="submit" value="enviar"/>
    </form>
</body>
</html>