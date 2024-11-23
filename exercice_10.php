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
            <h1 class="typewriter-text">Ce programme Compte le nombre  de Voyelles et  de <br>Consonnes</h1>
        </div>
    </div>
    <center>
    <h1></h1>
    <form method="post" action="">
        <label for="chaine">Entrez une chaîne de caractères :</label><br>
        <input type="text" id="chaine" name="chaine" required>
        <button type="submit">Analyser</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chaine = strtolower($_POST['chaine']); 
        $voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];
        $nombreVoyelles = 0;
        $nombreConsonnes = 0;

        for ($i = 0; $i < strlen($chaine); $i++) {
            $caractere = $chaine[$i];
            if (ctype_alpha($caractere)) {
                if (in_array($caractere, $voyelles)) {
                    $nombreVoyelles++;
                } else {
                    $nombreConsonnes++;
                }
            }
        }

        echo "<h2>Résultats :</h2>";
        echo "<p>Nombre de voyelles : <strong>$nombreVoyelles</strong></p>";
        echo "<p>Nombre de consonnes : <strong>$nombreConsonnes</strong></p>";
    }
    ?>   
</center>
        
    <script src="script.js"></script>
</body>
</html>