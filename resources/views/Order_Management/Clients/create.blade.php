<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Un Client</title>
</head>

<body>
    <h1>Ajouter Un Client</h1>
    <form action="{{ route('client.store') }}" method="post">
        @csrf
        <input type="number" name="id" placeholder="Enter le Id Ici" required><br>
        <input type="text" name="nom" placeholder="Enter le Nom Ici" required><br>
        <input type="text" name="prenom" placeholder="Enter le Prenom Ici" required><br>
        <input type="text" name="adress" placeholder="Enter l'Adress Ici" required><br>
        <button type="submit">Ajouter</button>
    </form>
</body>

</html>
