<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Un Client</title>
</head>

<body>
    <h1>Modifier Un Client</h1>
    <form action="{{ route('client.modify', $c->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="number" name="id" placeholder="Enter le Id Ici" value="{{ $c->id }}" required><br>
        <input type="text" name="nom" placeholder="Enter le Nom Ici" value="{{ $c->nom }}" required><br>
        <input type="text" name="prenom" placeholder="Enter le Prenom Ici" value="{{ $c->prenom }}" required><br>
        <input type="text" name="adress" placeholder="Enter l'Adress Ici" value="{{ $c->adress }}" required><br>
        <button type="submit">Modifier</button>
    </form>
</body>

</html>
