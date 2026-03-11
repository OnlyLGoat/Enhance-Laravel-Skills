<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Un Produit</title>
</head>

<body>
    <h1>Ajouter Un Produit</h1>
    <form action="{{ route('produit.store') }}" method="post">
        @csrf
        <input type="number" name="id" placeholder="Enter le Id Ici" required><br>
        <input type="text" name="designation" placeholder="Enter lA Designation Ici" required><br>
        <input type="number" name="prix" placeholder="Enter le Prix Ici" required><br>
        <input type="number" name="qte_stock" placeholder="Enter la quantite du stock Ici" required><br>
        <button type="submit">Ajouter</button>
    </form>
</body>

</html>
