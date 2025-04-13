<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <div class="flex justify-center gap-4 mb-4">
                <h2 class="text-center text-2xl font-bold mb-6">Register</h2>
                <div class="flex justify-center mb-4">
                    <a href="{{ url('/') }}" class="text-blue-500 hover:text-blue-700">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8zPyImF8fc3dbBmocIghi5BK7wT_L1ONjGg&s" alt="home" class="w-8 h-8 rounded-full">
                    </a>
                </div>
            </div>
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" id="name" name="name" class="w-full px-2 py-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                    @error('name')
                    <sapn class="text-red-500 text-xs italic mt-2">{{ $message }}</sapn>
                @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-2 py-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                    @error('email')
                    <sapn class="text-red-500 text-xs italic mt-2">{{ $message }}</sapn>
                @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-2 py-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                    @error('password')
                    <sapn class="text-red-500 text-xs italic mt-2">{{ $message }}</sapn>
                @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-2 py-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                    @error('password_confirmation')
                    <sapn class="text-red-500 text-xs italic mt-2">{{ $message }}</sapn>
                @enderror
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-600 text-white px-2 py-1 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
