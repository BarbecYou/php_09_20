<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php formok kezelése</title>
</head>

<body>

    <?php if (isset($_POST) && !empty($_POST)) : ?>
        <ul>
            <?php if (isset($_POST['nev']) && !empty($_POST['nev'])) : ?>
                <li>Név: <?php echo $_POST['nev'] ?> </li>
            <?php endif; ?>

            <?php if (isset($_POST['email']) && !empty($_POST['email'])) : ?>
                <li>E-mail: <?php echo $_POST['email'] ?> </li>
            <?php endif; ?>

            <?php if (isset($_POST['jelszo']) && !empty($_POST['jelszo'])) : ?>
                <li>Jelszó:
                    <?php for ($i = 0; $i < strlen($_POST['jelszo']); $i++) {
                        echo "*";
                    } ?>
                </li>
            <?php endif; ?>

            <?php if (isset($_POST['nem']) && !empty($_POST['nem'])) : ?>
                <li>Nem:
                    <?php switch ($_POST['nem']) {
                        case "ferfi":
                            echo "Férfi";
                            break;
                        case "no":
                            echo "Nő";
                            break;
                        case "egyeb":
                            echo "Egyéb";
                            break;
                    } ?>
                </li>
            <?php endif; ?>

            <?php if (isset($_POST['iskola']) && !empty($_POST['iskola'])) : ?>
                <li>Iskolai végzettség:
                    <?php switch ($_POST['iskola']) {
                        case "altalanos":
                            echo "Általános Iskola";
                            break;
                        case "szakmunkas":
                            echo "Szakmunkás képző";
                            break;
                        case "erettsegi":
                            echo "Érettségi";
                            break;
                    } ?>
                </li>
            <?php endif; ?>

            <?php if (isset($_POST['feltetelek']) && !empty($_POST['feltetelek'])) : ?>
                <li>Elfogadta a feltételeket</li>
            <?php else : ?>
                <li>Nem fogadta el a feltételeket</li>
            <?php endif; ?>

        </ul>
    <?php endif; ?>

    <form action="index.php" method="post">
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