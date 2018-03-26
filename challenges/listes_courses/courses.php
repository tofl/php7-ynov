<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Liste de courses</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<main role="main">
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Ma liste de courses</h1>
        </div>
    </div>

    <div class="container">
        <h2>Choses à acheter</h2>

        <!-- Si la liste de course est vide -->
        <div class="alert alert-success" role="alert">
            La liste de course est vide. 👌
        </div>

        <!-- Sinon on affiche les produits de la liste de courses, triée par categorie puis nom de produit -->
        <table class="table">
            <tr>
                <th width="250px">Animaux</th>
                <td>Croquettes</td>
                <td style="text-align: right"><a href="#">Supprimer</a><td>
            </tr>
            <tr>
                <th>Animaux</th>
                <td>Litière 10kilos</td>
                <td style="text-align: right"><a href="#">Supprimer</a><td>
            </tr>
            <tr>
                <th>Bébé</th>
                <td>Couches</td>
                <td style="text-align: right"><a href="#">Supprimer</a><td>
            </tr>
            <tr>
                <th>Bébé</th>
                <td>Petit pots légumes</td>
                <td style="text-align: right"><a href="#">Supprimer</a><td>
            </tr>
            <tr>
                <th>Entretien et nettoyage</th>
                <td>Liquide vaisselle</td>
                <td style="text-align: right"><a href="#">Supprimer</a><td>
            </tr>
        </table>

        <hr />

        <h2>Ajouter un produit</h2>
        <form action="courses.html" method="POST">
            <div class="form-group">
                <label for="product">Produit</label>
                <input name="product" type="product" class="form-control" id="product" placeholder="Nom du produit">
            </div>
            <div class="form-group">
                <label for="category">Catégorie</label>
                <select class="form-control" name="category">
                    <option value="Animaux">Animaux</option>
                    <option value="Bébé">Bébé</option>
                    <option value="Boissons et Cave à vins">Boissons et Cave à vins</option>
                    <option value="Charcuterie">Charcuterie</option>
                    <option value="Crémerie">Crémerie</option>
                    <option value="Entretien et nettoyage">Entretien et nettoyage</option>
                    <option value="Epicerie Salée">Epicerie Salée</option>
                    <option value="Epicerie Sucrée">Epicerie Sucrée</option>
                    <option value="Fruits et Légumes">Fruits et Légumes</option>
                    <option value="Hygiène et Beauté">Hygiène et Beauté</option>
                    <option value="Maison, Loisir, Textile">Maison, Loisir, Textile</option>
                    <option value="Pains et Pâtisseries">Pains et Pâtisseries</option>
                    <option value="Surgelés">Surgelés</option>
                    <option value="Traiteur">Traiteur</option>
                    <option value="Viandes et Poissons">Viandes et Poissons</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter un produit</button>
        </form>
    </div>
</main>
</body>
</html>
