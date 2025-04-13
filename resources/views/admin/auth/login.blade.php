<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-md">
        @if (session('status'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">{{ session('status') }}</span>
                </div>
            @endif
        <form action="{{ route('login') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="flex justify-center gap-4 mb-4">
                <h2 class="text-center text-2xl font-bold mb-6">Login</h2>
                <div class="flex justify-center mb-4">
                    <a href="{{ url('/') }}" class="text-blue-500 hover:text-blue-700">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8zPyImF8fc3dbBmocIghi5BK7wT_L1ONjGg&s" alt="home" class="w-8 h-8 rounded-full">
                    </a>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" type="email" name="email" placeholder="Email">
                <!-- Error message for email -->
                @error('email')
                    <sapn class="text-red-500 text-xs italic mt-2">{{ $message }}</sapn>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="password" type="password" name="password" placeholder="******************">
                <!-- Error message for password -->
                @error('password')
                    <sapn class="text-red-500 text-xs italic mt-2">{{ $message }}</sapn>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Sign In
                </button>
            </div>
        </form>
    </div>
</body>

</html>
