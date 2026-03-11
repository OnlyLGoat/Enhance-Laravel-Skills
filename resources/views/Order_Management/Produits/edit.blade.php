<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Un Produit</title>
</head>

<body>
    <h1>Modifier Un Produit</h1>
    <form action="{{ route('produit.modify', $prod->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="number" name="id" placeholder="Enter le Id Ici" value="{{ $prod->id }}" required><br>
        <input type="text" name="designation" placeholder="Enter le Nom Ici" value="{{ $prod->designation }}"
            required><br>
        <input type="number" name="prix" placeholder="Enter le Prenom Ici" value="{{ $prod->prix }}" required><br>
        <input type="number" name="qte_stock" placeholder="Enter l'Adress Ici" value="{{ $prod->qte_stock }}"
            required><br>
        <button type="submit">Modifier</button>
    </form>
</body>

</html>
