<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">

    <div class="w-full max-w-md p-8 space-y-6 bg-white shadow-lg rounded-lg">
        <h2 class="text-2xl font-bold text-center text-gray-700">Create an Account</h2>

        <form action="{{ route('registerPost') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-gray-600">Name</label>
                <input type="text" name="name" required 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-600">Email</label>
                <input type="email" name="email" required 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-600">Password</label>
                <input type="password" name="password" required 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit" 
                class="w-full px-4 py-2 font-semibold text-white bg-black-600 rounded-lg hover:bg-blue-700">
                Register
            </button>
        </form>

        <p class="text-sm text-center text-gray-600">
            Already have an account? 
            <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login here</a>.
        </p>
    </div>

</body>
</html>
