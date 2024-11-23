<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Immobilière</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <nav>
        <img src="imag.jpg" class="logo" width="80px">
    </nav>
</header>
<div class="sidebar">
    <a href="#" class="tablink" onclick="toggleSubmenu('submenu1')">Groupe 1</a>
    <div id="submenu1" class="submenu">
        <a href="exercice_1.php">exercice_1</a>
        <a href="exercice_2.php">exercice_2</a>
        <a href="exercice_3.php">exercice_3</a>
        <a href="exercice_4.php">exercice_4</a>
        <a href="exercice_5.php">exercice_5</a>
        <a href="exercice_6.php">exercice_6</a>
    </div>
    <a href="#" class="tablink" onclick="toggleSubmenu('submenu2')">Groupe 2</a>
    <div id="submenu2" class="submenu">
        <a href="exercice_7.php">exercice_7</a>
        <a href="exercice_8.php">exercice_8</a>
        <a href="exercice_9.php">exercice_9</a>
        <a href="exercice_10.php">exercice_10</a>
        <a href="exercice_11.php">exercice_11</a>
        <a href="exercice_12.php">exercice_12</a>
    </div>
    <a href="#" class="tablink" onclick="toggleSubmenu('submenu3')">Groupe 3</a>
    <div id="submenu3" class="submenu">
        <a href="exercice_13.php">exercice_13</a>
        <a href="exercice_14.php">exercice_14</a>
        <a href="exercice_15.php">exercice_15</a>
        <a href="exercice_16.php">exercice_16</a>
        <a href="exercice_17.php">exercice_17</a>
    </div>
</div>

<div class="main-content">
    <div class="typewriter">
        <h1 class="typewriter-text">Bienvenue sur notre Agence Immobilière</h1>
    </div>
    <center>
        <form method="post" action="">
            <fieldset>
                <legend>Que voulez-vous faire ?</legend>
                <button type="submit" name="action" value="vendre">Vendre</button>
                <button type="submit" name="action" value="acheter">Acheter</button>
                <button type="submit" name="action" value="louer">Louer</button>
            </fieldset>
        </form>
    </center>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $action = $_POST['action'];

        switch ($action) {
            case 'vendre':
                header("Location: vendre.php");
                exit();
            case 'acheter':
                header("Location: acheter.php");
                exit();
            case 'louer':
                header("Location: louer.php");
                exit();
            default:
                echo "<p>Action non reconnue.</p>";
        }
    }
    ?>
</div>

<script src="script.js"></script>
</body>
</html>
