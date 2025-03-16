<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">

    <div class="w-full max-w-md p-8 space-y-6 bg-white shadow-lg rounded-lg">
        <h2 class="text-2xl font-bold text-center text-gray-700">Welcome!</h2>

        @if(session('success'))
            <p class="p-2 text-green-600 bg-green-100 border border-green-400 rounded-md">
                {{ session('success') }}
            </p>
        @endif

        @if($errors->any())
            <p class="p-2 text-red-600 bg-red-100 border border-red-400 rounded-md">
                {{ $errors->first() }}
            </p>
        @endif

        <form action="{{ route('loginPost') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-gray-600">Email</label>
                <input type="email" name="email" placeholder="Enter your email" required 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-600">Password</label>
                <input type="password" name="password" placeholder="Enter your password" required 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit" 
                class="w-full px-4 py-2 font-semibold text-white bg-gray-600 rounded-lg hover:bg-black-500">
                Login
            </button>
        </form>

        <p class="text-sm text-center text-gray-600">
            Don't have an account? 
            <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Sign up here</a>.
        </p>
    </div>

</body>
</html>
