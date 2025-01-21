<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">

    <div class="w-full max-w-md p-8 space-y-4 bg-white shadow-md">
        <!-- Alert for Logout -->
        @if(session('logout'))
            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded mb-6 w-full text-center" role="alert">
                <strong class="font-bold">Berhasil Logout!</strong>
                <span class="block sm:inline">{{ session('logout') }}</span>
            </div>
        @endif

        <h2 class="text-2xl font-bold text-center">Login</h2>

        <!-- Alert for Validation Errors -->
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6 w-full text-center" role="alert">
                <strong class="font-bold">Ada Kesalahan:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium">Username</label>
                <input type="text" name="username" id="username" class="w-full px-4 py-2 border rounded {{ $errors->has('username') ? 'border-red-500' : '' }}" value="{{ old('username') }}">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium">Password</label>
                <input type="password" name="password" id="password" class="w-full px-4 py-2 border rounded {{ $errors->has('password') ? 'border-red-500' : '' }}">
            </div>
            <button type="submit" class="w-full px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">
                Login
            </button>
        </form>
    </div>

</body>
</html>
