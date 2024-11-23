<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendre ou Louer</title>
    <link rel="stylesheet" href="louer.css">
</head>
<body class="immo">
    <header class="header-4">
        <nav class="header-nav">
            <img src="logo.png" class="logo fade-in">
            <a href="acheter.php" id="acheter">Acheter</a>
            <a href="vendre.php" id="vendre">Vendre</a>
            <a href="louer.php" id="louer" class="active">Louer</a>
            <a href="#" id="contact">Contact</a>
        </nav>
    </header>
    <section class="bienvenue fade-in">
        <div class="main">
            <div class="typewriter-2">
                <h1 class="typewriter-text-1">CHEIKH KEINDE & Co ,</h1><br>
                <h3 class="typewriter-text-2">Service expresse pour tous vos besoins</h3>
            </div>
        </div>
        <button class="vendre fade-in" onclick="openForm('sellForm')">Vendre</button>
        <button class="achat"><a href="acheter.php" style="text-decoration:none;color:white;">Buy Now</a></button>
    </section>
    <section id="articles-sell" class="fade-in">
        <center style="color:white;font-size:40px; background-color: rgb(0, 0, 0,.5);">~ Vendez votre bien immobilier ~
        <center> <form id="house-form" class="house-form">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required><br><br>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="telephone">Téléphone :</label>
            <input type="tel" id="telephone" name="telephone" required><br><br>

            <label for="adresse">Adresse de la Maison :</label>
            <input type="text" id="adresse" name="adresse" required><br><br>

            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" required><br><br>

            <label for="codepostal">Code Postal :</label>
            <input type="text" id="codepostal" name="codepostal" required><br><br>

            <label for="type">Type de Bien :</label>
            <select id="type" name="type" required>
                <option value="">--Sélectionner le type de bien--</option>
                <option value="maison">Maison</option>
                <option value="appartement">Appartement</option>
            </select><br><br>

            <label for="surface">Surface (m²) :</label>
            <input type="number" id="surface" name="surface" min="1" required><br><br>

            <label for="prix">Prix (en €) :</label>
            <input type="number" id="prix" name="prix" min="1" required><br><br>

            <label>Voulez-vous vendre ou louer votre maison :</label><br>
            <input type="radio" id="vendre" name="action" value="vendre" required>
            <label for="vendre">Vendre</label><br>
            <input type="radio" id="louer" name="action" value="louer" required>
            <label for="louer">Louer</label><br><br>

            <label for="description">Description de la Maison :</label><br>
            <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

            <button type="submit">Envoyer</button>
        </form>
        </center>
    </section>
    <footer>
        ~ CHEIKH KEINDE & Co created since 1999 by Pape Cheikh for his son Birama ~
    </footer>
    <script src="script.js"></script>
</body>
</html>
