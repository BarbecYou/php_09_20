<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php formok kezelése</title>
</head>

<body>

    <form action="adatfeldolgozas.php" method="post">
        <label for="nev_input">Név:</label>
        <input type="text" name="nev" id="nev_input" placeholder="Név">
        <br>
        <label for="email_input">E-mail:</label>
        <input type="email" name="email" id="email_input" placeholder="E-mail">
        <br>
        <label for="jelszo_input">Jelszó:</label>
        <input type="password" name="jelszo" id="jelszo_input" placeholder="Jelszó">
        <br>
        <label>Nem:</label>
        <input type="radio" name="nem" id="ferfi_input" value="ferfi">
        <label for="ferfi_input">Férfi</label>
        <input type="radio" name="nem" id="no_input" value="no">
        <label for="no_input">Nő</label>
        <input type="radio" name="nem" id="egyeb_input" value="egyeb">
        <label for="egyeb_input">Egyéb</label>
        <br>
        <label for="iskola_input">Iskolai végzettség</label>
        <select name="iskola" id="iskola_input">
            <option value=""></option>
            <option value="altalanos">Általános Iskola</option>
            <option value="szakmunkas">Szakmunkás képző / szakiskola</option>
            <option value="erettsegi">Érettségi</option>
            <option value="okj">OKJ</option>
            <option value="egyetem">Főiskola / Egyetem</option>
        </select>
        <br>
        <input type="checkbox" name="feltetelek" id="feltetelek_input">
        <label for="feltetelek_input">Elolvastam és elfogadom a felhasználói feltételeket</label>
        <br>
        <input type="submit" value="Elküld">
    </form>
</body>

</html>