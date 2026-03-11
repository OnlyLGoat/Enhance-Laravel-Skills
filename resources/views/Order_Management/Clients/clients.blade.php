<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
</head>
<body>
    <h1>Gestion des Clients</h1>
    <table class="" border="1">
        <thead>
            <th>Id Client</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Adress</th>
            <th>Modification</th>
            <th>Suppression</th>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->nom }}</td>
                    <td>{{ $client->prenom }}</td>
                    <td>{{ $client->adress }}</td>
                    <td><a href="{{ route('client.edit', $client->id) }}">Modification</a></td>
                    <td>
                        <form action="{{ route('client.delete', $client->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Suppression</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('client.create') }}">Nouveau Client</a>
</body>
</html>
