<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits</title>
</head>

<body>
    <h1>Gestion des Produits</h1>
    <table class="" border="1">
        <thead>
            <th>Id Produits</th>
            <th>Deignation</th>
            <th>Prix</th>
            <th>Qte stock</th>
            <th>Modification</th>
            <th>Suppression</th>
        </thead>
        <tbody>
            @foreach ($produits as $produit)
                <tr>
                    <td>{{ $produit->id }}</td>
                    <td>{{ $produit->designation }}</td>
                    <td>{{ $produit->prix }}</td>
                    <td>{{ $produit->qte_stock }}</td>
                    <td><a href="{{ route('produit.edit', $produit->id) }}">Modification</a></td>
                    <td>
                        <form action="{{ route('produit.delete', $produit->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Suppression</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('produit.create') }}">Nouveau Produit</a>
</body>

</html>
