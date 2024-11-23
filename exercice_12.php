<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
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
            <h1 class="typewriter-text">Formulaire d'Adresse Client</h1>
        </div>
    </div>
    <center>
        <form method="post" action="">
            <fieldset>
                <legend>Adresse Client</legend>
                
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>
                
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required>
                
                <label for="adresse">Adresse :</label>
                <input type="text" id="adresse" name="adresse" required><br>
                
                <label for="ville">Ville :</label>
                <input type="text" id="ville" name="ville" required><br>
                
                <label for="code_postal">Code Postal :</label>
                <input type="text" id="code_postal" name="code_postal" required>

                <button type="submit">Envoyer</button>
            </fieldset>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $adresse = htmlspecialchars($_POST['adresse']);
            $ville = htmlspecialchars($_POST['ville']);
            $code_postal = htmlspecialchars($_POST['code_postal']);

            echo "<table border='1'cellpadding='10'>";
            echo "<tr><th>Champ</th><th>Valeur</th></tr>";
            echo "<tr><td>Nom</td><td>$nom</td></tr>";
            echo "<tr><td>Prénom</td><td>$prenom</td></tr>";
            echo "<tr><td>Adresse</td><td>$adresse</td></tr>";
            echo "<tr><td>Ville</td><td>$ville</td></tr>";
            echo "<tr><td>Code Postal</td><td>$code_postal</td></tr>";
            echo "</table>";
        }
        ?>
    </center>
        
    <script src="script.js"></script>
</body>
</html>
s