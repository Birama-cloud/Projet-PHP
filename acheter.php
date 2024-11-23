<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acheter</title>
    <link rel="stylesheet" href="php.css">
</head>
<body class="immo">
    <header class="header-4">
        <nav class="header-nav">
            <img src="logo.png" style="border-radius: 100px;" class="logo">
            <a href="acheter.php" id="acheter" class="active">Acheter</a>
            <a href="vendre.php" id="vendre">Vendre</a>
            <a href="Louer" id="louer">Louer</a>
            <a href="#" id="contact">Contact</a>
        </nav>
    </header>
    <section class="bienvenue">
        <div class="main">
            <div class="typewriter-2">
                <h1 class="typewriter-text-1">Cheikh & Birama,</h1><br>
                <h3 class="typewriter-text-2">La qualité n'a pas de prix</h3>
            </div>
        </div>
        <button class="achat" onclick="openForm('buyForm')" style="display:flex;float:right;padding:20px;background-color:#ffb700;border-radius:20px">Acheter maintenant</button>
    </section>

    <section id="articles-low">
        <center style="color:white;font-size:40px;background-color: " >~ Formule Low ~</center>
        <div class="background-color:rgb(66, 63, 63);">
        <table class="low" cellpadding="20px">
            <tr>
                <th style="padding: 0;"><img src="https://media.istockphoto.com/id/1293762741/fr/photo/int%C3%A9rieur-moderne-de-salle-de-vie-rendu-3d.jpg?s=612x612&w=0&k=20&c=BKixm6wq1Y6NFFF-8XllknUQvSboRmCmjn_Lm_erHmQ=" onclick="openForm('lowForm1')" style="border-radius:10px;" width="350px"></th>
                <th><img src="data:image/jpeg;base64,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" onclick="openForm('lowForm2')" style="border-radius:10px;" width="350px"></th>
                <th><img src="https://www.shutterstock.com/image-photo/new-modern-block-flats-green-600nw-2501530247.jpg" onclick="openForm('lowForm3')" style="border-radius:10px;" width="350px"></th>
            </tr>
            <tr>
                <td><h3 style="color: white;text-align:center">Appartement Low 1 : 100.000</h3></td>
                <td><h3 style="color: white;text-align:center">Appartement Low 2 : 150.000</h3></td>
                <td><h3 style="color: white;text-align:center">Appartement Low 3 : 200.000</h3></td>
            </tr>
        </table>
        <hr>
        </div>
    </section>

    <section id="articles-med">
        <center style="color:white;font-size:40px">~ Formule Medium ~</center>
        <table class="medium" cellpadding="20px">
            <tr>
                <th style="padding: 0;"><img src="img/image1m.jpeg" onclick="openForm('medForm1')" style="border-radius:10px;" width="350px"></th>
                <th><img src="img/imagem2.jpeg" onclick="openForm('medForm2')" style="border-radius:10px;" width="350px"></th>
                <th><img src="img/image3m.jpeg" onclick="openForm('medForm3')" style="border-radius:10px;" width="350px"></th>
            </tr>
            <tr>
                <td><h3 style="color: white;text-align:center">Appartement Medium 1 : 300.000</h3></td>
                <td><h3 style="color: white;text-align:center">Appartement Medium 2 : 450.000</h3></td>
                <td><h3 style="color: white;text-align:center">Appartement Medium 3 : 600.000</h3></td>
            </tr>
        </table>
        <hr>
    </section>

    <section id="articles-pre">
        <center style="color:white;font-size:40px">~ Formule Premium ~</center>
        <table class="premium" cellpadding="20px">
            <tr>
                <th style="padding: 0;"><img src="img/imagep1.jpeg" onclick="openForm('preForm1')" style="border-radius:10px;" width="350px"></th>
                <th><img src="img/imagep2.jpeg" onclick="openForm('preForm2')" style="border-radius:10px;" width="350px"></th>
                <th><img src="img/imagep3.jpeg" onclick="openForm('preForm3')" style="border-radius:10px;" width="350px"></th>
            </tr>
            <tr>
                <td><h3 style="color: white;text-align:center">Appartement Premium 1 : 1.000.000</h3></td>
                <td><h3 style="color: white;text-align:center">Appartement Premium 2 : 1.500.000</h3></td>
                <td><h3 style="color: white;text-align:center">Appartement Premium 3 : 2.000.000</h3></td>
            </tr>
        </table>
        <hr>
    </section>
    </div>

    <div id="buyForm" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeForm('buyForm')">&times;</span>
            <h2>Formulaire de Demande d'Achat</h2>
            <form id="house-form">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required><br><br>

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="telephone">Téléphone :</label>
                <input type="tel" id="telephone" name="telephone" required><br><br>

                <label for="adresse">Adresse :</label>
                <input type="text" id="adresse" name="adresse" required><br><br>

                <label for="choix">Choisissez la formule :</label>
                <select id="choix" name="choix" required>
                    <option value="">--Sélectionner une formule--</option>
                    <option value="low">Low</option>
                    <option value="medium">Medium</option>
                    <option value="premium">Premium</option>
                </select><br><br>

                <label for="description">Description :</label><br>
                <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

                <button type="submit">Envoyer</button>
            </form>
        </div>
    </div>

    <div id="lowForm1" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeForm('lowForm1')">&times;</span>
       </div>
    </div>
   
    <footer>
        ~ Cheikh & Birama created since 1999 by the collaboration of Cheikh and Birama ~
    </footer>
    <script src="script.js"></script>
</body>
</html>
