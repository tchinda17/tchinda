document.getElementById('commande-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const nom = document.getElementById('nom').value;
    const dimensions = document.getElementById('dimensions').value;
    const poids = document.getElementById('poids').value;
    const adresseExpedition = document.getElementById('adresse-expedition').value;
    const adresseLivraison = document.getElementById('adresse-livraison').value;

    // Ici, vous pouvez envoyer les données à votre serveur ou les traiter comme vous le souhaitez
    console.log({
        nom,
        dimensions,
        poids,
        adresseExpedition,
        adresseLivraison
    });

    alert('Commande créée avec succès !');
});
