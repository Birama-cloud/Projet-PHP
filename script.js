function toggleSubmenu(submenuId) {
    var submenu = document.getElementById(submenuId);
    if (submenu.style.display === "block") {
        submenu.style.display = "none";
    } else {
        submenu.style.display = "block";
    }
}
function redirectionBuy(){
    return articles;
    
}
let slideIndex = 0;
showSlides();

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 4 seconds
}

document.getElementById('house-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche l'envoi du formulaire pour démonstration

    // Collecte des données du formulaire
    const nom = document.getElementById('nom').value;
    const email = document.getElementById('email').value;
    const telephone = document.getElementById('telephone').value;
    const adresse = document.getElementById('adresse').value;
    const ville = document.getElementById('ville').value;
    const codepostal = document.getElementById('codepostal').value;
    const type = document.getElementById('type').value;
    const surface = document.getElementById('surface').value;
    const prix = document.getElementById('prix').value;
    const action = document.querySelector('input[name="action"]:checked').value;
    const description = document.getElementById('description').value;

    // Afficher les données en console pour vérification
    console.log(`Nom: ${nom}`);
    console.log(`Email: ${email}`);
    console.log(`Téléphone: ${telephone}`);
    console.log(`Adresse: ${adresse}`);
    console.log(`Ville: ${ville}`);
    console.log(`Code Postal: ${codepostal}`);
    console.log(`Type de Bien: ${type}`);
    console.log(`Surface: ${surface}`);
    console.log(`Prix: ${prix}`);
    console.log(`Action: ${action}`);
    console.log(`Description: ${description}`);

    // Vous pouvez ajouter votre code pour envoyer les données à un serveur ici

    alert('Formulaire soumis avec succès!');
});
// JavaScript pour ouvrir et fermer les modales de formulaires
function openForm(formId) {
    document.getElementById(formId).style.display = "block";
}

function closeForm(formId) {
    document.getElementById(formId).style.display = "none";
}

document.getElementById('house-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const nom = document.getElementById('nom').value;
    const email = document.getElementById('email').value;
    const telephone = document.getElementById('telephone').value;
    const adresse = document.getElementById('adresse').value;
    const ville = document.getElementById('ville').value;
    const codepostal = document.getElementById('codepostal').value;
    const type = document.getElementById('type').value;
    const surface = document.getElementById('surface').value;
    const prix = document.getElementById('prix').value;
    const action = document.querySelector('input[name="action"]:checked').value;
    const description = document.getElementById('description').value;

    console.log(`Nom: ${nom}`);
    console.log(`Email: ${email}`);
    console.log(`Téléphone: ${telephone}`);
    console.log(`Adresse: ${adresse}`);
    console.log(`Ville: ${ville}`);
    console.log(`Code Postal: ${codepostal}`);
    console.log(`Type de Bien: ${type}`);
    console.log(`Surface: ${surface}`);
    console.log(`Prix: ${prix}`);
    console.log(`Action: ${action}`);
    console.log(`Description: ${description}`);

    alert('Formulaire soumis avec succès!');
});

