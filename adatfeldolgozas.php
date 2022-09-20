<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jelentkezés feldolgozása</title>
</head>

<body>

    <main>
        <a href="index.php">Vissza a főoldalra</a>
        
        <?php if (isset($_POST) && !empty($_POST)) : ?>
            <?php if (count($_POST) < 6) : ?>
                <h2>Hiba az űrlap elküldésekor!</h2>
                <?php if (!isset($_POST['nev']) || empty($_POST['nev'])) : ?>
                    <li>A név megadása kötelező!</li>
                <?php endif; ?>
                <?php if (!isset($_POST['email']) || empty($_POST['email'])) : ?>
                    <li>Az e-mail megadása kötelező!</li>
                <?php endif; ?>
                <?php if (!isset($_POST['jelszo']) || empty($_POST['jelszo'])) : ?>
                    <li>A jelszó megadása kötelező!</li>
                <?php endif; ?>
                <?php if (!isset($_POST['nem']) || empty($_POST['nem'])) : ?>
                    <li>A nem megadása kötelező!</li>
                <?php endif; ?>
                <?php if (!isset($_POST['iskola']) || empty($_POST['iskola'])) : ?>
                    <li>Az iskolai végzettség megadása kötelező!</li>
                <?php endif; ?>
                <?php if (!isset($_POST['feltetelek']) || empty($_POST['feltetelek'])) : ?>
                    <li>A feltételek elfogadása kötelező!</li>
                <?php endif; ?>



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
                <?php endif; ?>

                </ul>
            <?php endif; ?>

    </main>

</body>

</html>