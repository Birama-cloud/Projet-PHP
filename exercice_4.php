<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
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
            <h1 class="typewriter-text">Ce programme calcule le PPCM de deux nombres</h1>
        </div>
    </div>
    <center>
        <h1></h1>
        <form method="post" action="">
        <label for="nombre1">Entrez le premier entier :</label>
        <input type="number" id="nombre1" name="nombre1" required>
        <br>
        <label for="nombre2">Entrez le deuxième entier :</label>
        <input type="number" id="nombre2" name="nombre2" required>
        <br>
        <button type="submit">Calculer le PPCM</button>
        </form>
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre1 = (int) $_POST['nombre1'];
        $nombre2 = (int) $_POST['nombre2'];

        function calculerPGCD($a, $b) {
            while ($b != 0) {
                $reste = $a % $b;
                $a = $b;
                $b = $reste;
            }
            return $a;
        }

        function calculerPPCM($a, $b) {
            $pgcd = calculerPGCD($a, $b);
            return abs($a * $b) / $pgcd; 
        }

        $ppcm = calculerPPCM($nombre1, $nombre2);
        echo "<p>Le PPCM de $nombre1 et $nombre2 est : <strong>$ppcm</strong></p>";
    }
    ?>
    </center>

    <script src="script.js"></script>
</body>
</html>