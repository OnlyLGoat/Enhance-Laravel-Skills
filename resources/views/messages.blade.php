<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg">

        <h1 class="text-2xl font-bold text-gray-800 mb-6">Messages</h1>


        <!-- Display Our Messages -->
        @foreach ( $messages as $message )
            <div class="mb-4">
                <h2 class="mb-1">{{ $message -> sender_name }}</h2>
                <p>{{ $message -> message }}</p>
            </div>
        @endforeach
    </div>

</body>
</html>
