<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <h1 class="typewriter-text">Programme d'analyse d'un tableau d'entiers</h1>
        </div>

    <h1>Informations des personnes</h1>

<?php
$personnes = [
    "Dupont" => [
        "prenom" => "Jean",
        "ville" => "Paris",
        "age" => 35
    ],
    "Martin" => [
        "prenom" => "Sophie",
        "ville" => "Lyon",
        "age" => 28
    ],
    "Durand" => [
        "prenom" => "Paul",
        "ville" => "Marseille",
        "age" => 42
    ]
];

echo "<h2>Liste des personnes :</h2>";
echo "<ul>";
foreach ($personnes as $nom => $details) {
    echo "<li><strong>$nom</strong> :</li>";
    echo "<ul>";
    echo "<li>Prénom : " . $details['prenom'] . "</li>";
    echo "<li>Ville : " . $details['ville'] . "</li>";
    echo "<li>Âge : " . $details['age'] . "</li>";
    echo "</ul>";
}
echo "</ul>";
?>
    <script src="script.js"></script>
</body>
</html>