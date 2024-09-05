<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page du Transporteur</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/transport.css"> <!-- Lien vers votre fichier CSS -->
</head>
<body>
    <header>
        <h1>Gestion des Colis - Transporteur</h1>
        
    </header>

    <main>
        <section>
            <h2>Informations sur le Transporteur</h2>
            <p><strong>Nom :</strong> Transporteur 1</p>
            <p><strong>Téléphone :</strong> +237 675583976</p>
            <p><strong>Email :</strong> contact@transporteur1.com</p>
        </section>

        <section>
            <h2>Colis en Cours de Livraison</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID du Colis</th>
                        <th>Destinataire</th>
                        <th>Statut</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>123456</td>
                        <td>Jean Dupont</td>
                        <td>En cours</td>
                        <td><button>Mise à jour</button></td>
                    </tr>
                    <tr>
                        <td>654321</td>
                        <td>Mafre raissa</td>
                        <td>Livré</td>
                        <td><button>Détails</button></td>
                    </tr>
                    <!-- Ajoutez d'autres lignes selon les besoins -->
                </tbody>
            </table>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Gestion des Colis. Tous droits réservés.</p>
    </footer>

    <script src="assets/js/script.js"></script> <!-- Lien vers votre fichier JS -->
</body>
</html>
