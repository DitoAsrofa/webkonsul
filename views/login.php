<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-12">
        <div class="max-w-lg mx-auto bg-white p-8 shadow-md rounded-lg">
            <h1 class="text-2xl font-bold mb-6 text-center">Login</h1>
            <form action="../controllers/AuthController.php?action=login" method="POST">
                <label class="block mb-2">Email:</label>
                <input type="email" name="email" class="border border-gray-300 p-2 mb-4 w-full" required>
                <label class="block mb-2">Password:</label>
                <input type="password" name="password" class="border border-gray-300 p-2 mb-4 w-full" required>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded w-full">Login</button>
            </form>
            <p class="mt-4 text-sm text-center">
                Belum punya akun? <a href="register.php" class="text-blue-500">Daftar di sini</a>
            </p>
        </div>
    </div>
</body>
</html>
