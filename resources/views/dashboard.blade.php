<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">

    <div class="w-full max-w-lg p-6 bg-white shadow-lg rounded-lg">
        <h2 class="text-2xl font-semibold text-gray-700">Welcome, {{ Auth::user()->name }}! 🎉</h2>

        <p class="mt-2 text-gray-500">You're logged in to your dashboard.</p>

        <form action="{{ route('logout') }}" method="POST" class="mt-4">
            @csrf
            <button type="submit" 
                class="px-4 py-2 font-semibold text-white bg-red-500 rounded-lg hover:bg-red-600">
                Logout
            </button>
        </form>
    </div>

</body>
</html>
