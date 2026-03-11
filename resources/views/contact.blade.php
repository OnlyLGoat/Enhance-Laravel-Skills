<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg">

        <h1 class="text-2xl font-bold text-gray-800 mb-6">Contact Us</h1>

        <form action="/contact" method="POST" novalidate>
            @csrf

            @if ($errors->any())
                <div class="m-2 p-2 border-2 border-red-600 rounded-md">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Name -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-1" for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your name"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500"
                    value="{{ old('name') }}"
                >
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-1" for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your email"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500"
                    value="{{ old('email') }}"
                >
            </div>

            <!-- Message -->
            <div class="mb-6">
                <label class="block text-gray-700 mb-1" for="message">Message</label>
                <textarea id="message" name="message" rows="4" placeholder="Your message"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
                        {{ old('message') }}
                </textarea>
            </div>

            <!-- Button -->
            <button type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded">
                Send Message
            </button>

        </form>

    </div>

</body>
</html>
