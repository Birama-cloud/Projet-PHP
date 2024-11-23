<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de TVA</title>
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
            <h1 class="typewriter-text">Calcul de la TVA et du Prix TTC</h1>
        </div>
        <center>
            <form method="post" action="">
                <fieldset>
                    <legend>Calculer la TVA</legend>
                    <label for="price_ht">Prix HT :</label>
                    <input type="number" step="0.01" id="price_ht" name="price_ht" placeholder="Exemple : 100" required> <br>
                    
                    <label for="tva_rate">Taux de TVA (%) :</label>
                    <input type="number" step="0.01" id="tva_rate" name="tva_rate" placeholder="Exemple : 20" required><br>
                    
                    <button type="submit">Calculer</button>
                </fieldset>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $price_ht = floatval($_POST['price_ht']);
                $tva_rate = floatval($_POST['tva_rate']);

                // Calculer le montant de la TVA
                $tva_amount = $price_ht * ($tva_rate / 100);

                // Calculer le prix TTC
                $price_ttc = $price_ht + $tva_amount;

                echo '<form>';
                echo '<fieldset>';
                echo '<legend>Résultats</legend>';
                echo '<label for="tva_amount">Montant de la TVA :</label>';
                echo '<input type="text" id="tva_amount" value="' . number_format($tva_amount, 2) . '"  readonly><br>';
                echo '<label for="price_ttc">Prix TTC :</label>';
                echo '<input type="text" id="price_ttc" value="' . number_format($price_ttc, 2) . '" readonly><br>';
                echo '</fieldset>';
                echo '</form>';
            }
            ?>
        </center>
    </div>
    
    <script src="script.js"></script>
</body>
</html>
